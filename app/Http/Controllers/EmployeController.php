<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Employe;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\EmployeRequest;
use Illuminate\Support\Facades\Storage;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employes = Employe::orderBy('poste', 'asc')->orderBy('salaire', 'desc')->get();
        return view('employe.index', compact('employes'));
    }
   
    public function create()
    {
        $roles = Role::all();
        return view('employe.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeRequest $request)
    {
        /* création de l'employé */
        $EmployeInfo = $request->validated();
        // cette ligne n'est plus nécessaire comme maintenant c'est l'id du role qui est stocké dans la table employes
        /* $EmployeInfo['poste'] = Role::findOrFail($EmployeInfo['poste'])->name; // on récupère le nom du poste avec son id à partir de la table des roles */
        $EmployeInfo['docs_uuid'] = (string) Str::uuid();
        $employe = Employe::create($EmployeInfo);
        
        /* on stock les fichiers si il y'en a*/
        /* verification si le dossier de stockage génerale "documets" exist
         * sinon on le crée
        */ 
        
        if (!Storage::exists("documents")) {
            Storage::makeDirectory("documents");
        } 
        /* création du dossier de stockage de fichier personel de l'enployé qui a comme nom son docs_uuid*/ 
        Storage::makeDirectory("documents\\$employe->docs_uuid");

        if ($request->hasFile('scan_cin')) {
        $scanCin = $request->file('scan_cin');
        $scanCinFileName = $scanCin->getClientOriginalName();
        $scanCin->storeAs("documents\\$employe->docs_uuid", $scanCinFileName);
        $employe->scan_cin = $scanCinFileName;
        }
 
        if ($request->hasFile('photo')){
        $photo = $request->file('photo');
        $photoFileName = $photo->getClientOriginalName();
        $photo->storeAs("documents\\$employe->docs_uuid", "$photoFileName");
        $employe->photo = $photoFileName;
        }

        if ($request->hasFile('scan_cv')){
        $scanCv = $request->file('scan_cv');
        $scanCvFileName = $scanCv->getClientOriginalName();
        $scanCv->storeAs("documents\\$employe->docs_uuid", "$scanCvFileName");
        $employe->scan_cv = $scanCvFileName;
        }
        $employe->save();

        /* création de l'utilisateur assosié à l'employé */
        $employeUser = User::create([
            'name' => $request->prenom . ' ' . $request->nom,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'id_employe' => $employe->id,
        ]);

        /* assignation du role à l'utilisateur */
        $employeUser->assignRole($employe->poste);

        /* stockage des fichiers de l'employé */

        return redirect()->route('employes.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employe = Employe::findOrFail($id);
        return view('employe.show', compact('employe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $roles = Role::all();
        $employe = Employe::findOrFail($id);
        return view('employe.edit', compact('employe', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        /* la modification des documents n'est pas encore gérée */
        $employe = Employe::findOrFail($id);
        $employe->update($request->all());
        $employe->save();
        return redirect()->route('employes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Request $request)
    {
        
        $request->validateWithBag('employeDeletion', [
            'password' => ['required', 'current_password'],
        ]);
        $employe = Employe::findOrFail($id);
        $employe->user()->delete();
        $employe->delete();
        /* il faut ajouter la suppression des fichiers relatifs a cet employé */

        return redirect()->route('employes.index');
    }
}