<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\EmployeRequest;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employes = Employe::all();
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
        $EmployeInfo['poste'] = Role::findOrFail($EmployeInfo['poste'])->name; // on récupère le nom du poste avec son id à partir de la table des roles
        $employe = Employe::create($EmployeInfo);

        /* on préfix les noms des fichier de l'utilisateur par son id et ensuite les stocker (si ils sont existants) */
        if ($request->hasFile('scan_cin')) {
        $scanCin = $request->file('scan_cin');
        $scanCinFileName = $employe->id . '_' . $scanCin->getClientOriginalName();
        $scanCin->storeAs("documents/$scanCinFileName");
        $employe->scan_cin = $scanCinFileName;
        }
 
        if ($request->hasFile('photo')){
        $photo = $request->file('photo');
        $photoFileName = $employe->id . '_' . $photo->getClientOriginalName();
        $photo->storeAs("documents/$photoFileName");
        $employe->photo = $photoFileName;
        }

        if ($request->hasFile('scan_cv')){
        $scanCv = $request->file('scan_cv');
        $scanCvFileName = $employe->id . '_' . $scanCv->getClientOriginalName();
        $scanCv->storeAs("documents/$scanCvFileName");
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
        $employe = Employe::findOrFail($id);
        return view('employe.edit', compact('employe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmployeRequest $request, string $id)
    {
        $employe = Employe::findOrFail($id);
        $employe->update($request->validated());
        return redirect()->route('employes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employe = Employe::findOrFail($id);
        $employe->delete();
        return redirect()->route('employes.index');
    }
}
