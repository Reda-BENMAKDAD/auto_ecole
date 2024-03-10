<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gérer les employés') }}
        </h2>
    </x-slot>
    <div class="pb-8">
        <section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800 mt-12">
            <h1 class="text-xl font-bold text-black dark:text-white">modification des informations de l'{{$employe->sexe == "H" ? "employé" : "employée "}} <span class="uppercase">{{"$employe->nom "}}</span><span class="capitalize">{{ $employe->prenom }}</span></h1>
            <?php /* enctype="multipart/form-data" */ ?>
            <form  action="{{ route('employes.update', ['id' => $employe->id]) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">

                    <div>
                        <x-input-label for="nom" :value="__('Nom')" />
                        <x-text-input id="nom" class="block mt-1 w-full" type="text" name="nom" :value="$employe->nom" required autofocus autocomplete="nom" />
                        <x-input-error :messages="$errors->get('nom')" class="mt-2" />
                    </div>
        
                    <div>
                        <x-input-label for="prenom" :value="__('Prenom')" />
                        <x-text-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" :value="$employe->prenom" required autofocus autocomplete="prenom" />
                        <x-input-error :messages="$errors->get('prenom')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="num_cin" :value="__('Numéro CIN')" />
                        <x-text-input id="num_cin" class="block mt-1 w-full" type="text" name="num_cin" :value="$employe->num_cin" required autofocus autocomplete="num_cin" />
                        <x-input-error :messages="$errors->get('num_cin')" class="mt-2" />
                    </div>
                    
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="$employe->email" required autofocus autocomplete="email" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="num_tel" :value="__('Numéro de téléphone')" />
                        <x-text-input id="num_tel" class="block mt-1 w-full" type="text" name="num_tel" :value="$employe->num_tel" required autofocus autocomplete="num_tel" />                        <x-input-error :messages="$errors->get('num_tel')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="adresse" :value="__('Adresse')" />
                        <x-text-input id="adresse" class="block mt-1 w-full" type="text" name="adresse" :value="$employe->adresse" required autofocus autocomplete="adresse" />
                        <x-input-error :messages="$errors->get('adresse')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="date_naiss" :value="__('Date de naissance')" />
                        <x-text-input id="date_naiss" class="block mt-1 w-full" type="date" name="date_naiss" :value="$employe->date_naiss" required autofocus autocomplete="date_naiss" />
                        <x-input-error :messages="$errors->get('date_naiss')" class="mt-2" />
                    </div>
        
                    <div>
                        <x-input-label for="lieu_naiss" :value="__('Lieu de naissance')" />
                        <x-text-input id="lieu_naiss" class="block mt-1 w-full" type="text" name="lieu_naiss" :value="$employe->lieu_naiss" required autofocus autocomplete="lieu_naiss" />
                        <x-input-error :messages="$errors->get('lieu_naiss')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="nationalite" :value="__('Nationalite')" />
                        <x-text-input id="nationalite" class="block mt-1 w-full" type="text" name="nationalite" :value="$employe->nationalite" required autofocus autocomplete="lieu_naiss" />
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
                        <x-text-input id="salaire" class="block mt-1 w-full" type="number" name="salaire" :value="$employe->salaire" required autofocus autocomplete="salaire" />
                        <x-input-error :messages="$errors->get('salaire')" class="mt-2" />
                    </div>

                    <div>
                        <label class="text-black dark:text-gray-200" for="role">Poste</label>
                        <select id="poste" name="poste" class="block w-full text-gray-700  rounded-md border-gray-300 focus:border-mygold focus:ring-mygold shadow-sm">
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}" {{ $employe->poste == $role->id ? "selected" : null }}>{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                </div>
        
                <div class="w-100 pt-2 px-2 mt-6  flex justify-between">
                    <a href="{{ url()->previous() }}"><x-danger-button type="button">annuler</x-danger-button></a>
                    <x-primary-button type="submit">valider</x-primary-button>
                </div>
            </form>
        </section>
        
    </div>
</x-app-layout>