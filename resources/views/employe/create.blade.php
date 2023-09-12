<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gérer les employés') }}
        </h2>
    </x-slot>
    <div class="py-2">
        <section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800 mt-20">
            <h1 class="text-xl font-bold text-black dark:text-white">Informations de l'employé</h1>
            
            <form method="POST" action="{{ route('employes.store') }}" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">

                    <div>
                        <x-input-label for="nom" :value="__('Nom')" />
                        <x-text-input id="nom" class="block mt-1 w-full" type="text" name="nom" :value="old('nom')" required autofocus autocomplete="nom" />
                        <x-input-error :messages="$errors->get('nom')" class="mt-2" />
                    </div>
        
                    <div>
                        <x-input-label for="prenom" :value="__('Prenom')" />
                        <x-text-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" :value="old('prenom')" required autofocus autocomplete="prenom" />
                        <x-input-error :messages="$errors->get('prenom')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="num_cin" :value="__('Numéro CIN')" />
                        <x-text-input id="num_cin" class="block mt-1 w-full" type="text" name="num_cin" :value="old('num_cin')" required autofocus autocomplete="num_cin" />
                        <x-input-error :messages="$errors->get('num_cin')" class="mt-2" />
                    </div>
                    
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="email" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="num_tel" :value="__('Numéro de téléphone')" />
                        <x-text-input id="num_tel" class="block mt-1 w-full" type="telephone" name="num_tel" :value="old('num_tel')" required autofocus autocomplete="lieu_naiss" />
                        <x-input-error :messages="$errors->get('num_tel')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="adresse" :value="__('Adresse')" />
                        <x-text-input id="adresse" class="block mt-1 w-full" type="text" name="adresse" :value="old('adresse')" required autofocus autocomplete="adresse" />
                        <x-input-error :messages="$errors->get('adresse')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="date_naiss" :value="__('Date de naissance')" />
                        <x-text-input id="date_naiss" class="block mt-1 w-full" type="date" name="date_naiss" :value="old('date_naiss')" required autofocus autocomplete="date_naiss" />
                        <x-input-error :messages="$errors->get('date_naiss')" class="mt-2" />
                    </div>
        
                    <div>
                        <x-input-label for="lieu_naiss" :value="__('Lieu de naissance')" />
                        <x-text-input id="lieu_naiss" class="block mt-1 w-full" type="text" name="lieu_naiss" :value="old('lieu_naiss')" required autofocus autocomplete="lieu_naiss" />
                        <x-input-error :messages="$errors->get('lieu_naiss')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="nationalite" :value="__('Nationalite')" />
                        <x-text-input id="nationalite" class="block mt-1 w-full" type="text" name="nationalite" :value="old('nationalite')" required autofocus autocomplete="lieu_naiss" />
                        <x-input-error :messages="$errors->get('nationalite')" class="mt-2" />
                    </div>

                    <div>
                        <label class="text-black dark:text-gray-200" for="sexe">Sexe</label>
                        <select id="sexe" name="sexe" class="block w-full text-gray-700  rounded-md border-gray-300 focus:border-mygold focus:ring-mygold shadow-sm">
                            <option value="H">Homme</option>
                            <option value="F">Femme</option>
                        </select>
                    </div>

                    <div>
                        <x-input-label for="salaire" :value="__('Salaire')" />
                        <x-text-input id="salaire" class="block mt-1 w-full" type="number" name="salaire" :value="old('salaire')" required autofocus autocomplete="salaire" />
                        <x-input-error :messages="$errors->get('salaire')" class="mt-2" />
                    </div>

                    <div>
                        <label class="text-black dark:text-gray-200" for="role">Poste</label>
                        <select id="poste" name="poste" class="block w-full text-gray-700  rounded-md border-gray-300 focus:border-mygold focus:ring-mygold shadow-sm">
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <x-input-label for="password" :value="__('Mot de passe')" />
                        <x-text-input id="password" class="block mt-1 w-full" type="text" name="password" :value="old('password')" required autofocus autocomplete="lieu_naiss" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="ConfirmPassword" :value="__('Confirmer le mot de passe')" />
                        <x-text-input id="ConfirmPassword" class="block mt-1 w-full" type="text" name="ConfirmPassword" :value="old('ConfirmPassword')" required autofocus autocomplete="ConfirmPassword" />
                        <x-input-error :messages="$errors->get('ConfirmPassword')" class="mt-2" />
                    </div>

                    <div class="mb-3">
                        <label for="formFileMultiple"class="mb-2 inline-block text-neutral-700 dark:text-neutral-200">CV</label>
                        <input name="scan_cv" class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary" type="file" id="formFileMultiple" multiple />
                        <x-input-error :messages="$errors->get('scan_cv')" class="mt-2" />
                    </div>

                    <div class="mb-3">
                        <label for="formFileMultiple"class="mb-2 inline-block text-neutral-700 dark:text-neutral-200">CIN</label>
                        <input name="scan_cin" class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary" type="file" id="formFileMultiple" multiple />
                        <x-input-error :messages="$errors->get('scan_cin')" class="mt-2" />
                    </div>

                    <div class="mb-3">
                        <label for="formFileMultiple"class="mb-2 inline-block text-neutral-700 dark:text-neutral-200">Photo</label>
                        <input name="photo" class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary" type="file" id="formFileMultiple" multiple />
                        <x-input-error :messages="$errors->get('photo')" class="mt-2" />
                    </div>
                    
                </div>
        
                <div class="flex justify-end mt-6">
                    <input type="submit" value="ajouter" class="px-6 py-2 leading-5 text-black transition-colors duration-200 transform bg-mygold rounded-md hover:bg-mygold-800 focus:outline-none focus:bg-mygold-800"/>
                </div>
            </form>
        </section>
        
    </div>
</x-app-layout>