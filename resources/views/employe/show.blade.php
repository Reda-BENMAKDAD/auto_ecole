<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{$employe->sexe == "H" ? "Employé" : "Employée "}} {{"$employe->nom $employe->prenom" }}
        </h2>
    </x-slot>
    <div class="p-12">
        <div class="rounded-lg bg-white max-w-7xl mx-auto sm:px-6 lg:px-8 p-10">
            <div class="px-4 sm:px-0">
              <h3 class="font-bold leading-7 text-xl text-gray-900 inline-block">Informations de l'employé</h3>
             <x-retour-button url='/employes' />
            </div>
            <div class="mt-6 border-t border-gray-100">
              <dl class="divide-y divide-gray-100">
                <div class="px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                  <dt class="text-sm font-semibold leading-6 text-gray-900">nom complet</dt>
                  <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"><span class="uppercase">{{ $employe->nom }} </span><span class="capitalize">{{ $employe->prenom}} </span></dd>
                </div>
                <div class="px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-semibold leading-6 text-gray-900">Numéro CIN</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ "$employe->num_cin" }}</dd>
                  </div>
                <div class="px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                  <dt class="text-sm font-semibold leading-6 text-gray-900">Post</dt>
                  <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $employe->emposte->name }}</dd>
                </div>
                <div class="px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                  <dt class="text-sm font-semibold leading-6 text-gray-900">Email</dt>
                  <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $employe->email ? $employe->email : 'N/A' }}</dd>
                </div>
                <div class="px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                  <dt class="text-sm font-semibold leading-6 text-gray-900">Salaire</dt>
                  <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ "$employe->salaire dh" }}</dd>
                </div>
                <div class="px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                  <dt class="text-sm font-semibold leading-6 text-gray-900">Né a</dt>
                  <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $employe->lieu_naiss }} <b class="text-base">Le</b> {{ $employe->date_naiss }}</dd>
                </div>
                <div class="px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                  <dt class="text-sm font-semibold leading-6 text-gray-900">Documents</dt>
                  <dd class="mt-2 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                    <ul role="list" class="divide-y divide-gray-100 rounded-md border border-gray-200">
                        <!-- document -->
                        @if ($employe->scan_cv)
                            <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
                            <div class="flex w-0 flex-1 items-center">
                            <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z" clip-rule="evenodd" />
                            </svg>
                
                            <div class="ml-4 flex min-w-0 flex-1 gap-2">
                                <span class="truncate font-medium">{{ $employe->scan_cv }}</span>
                            </div>
                            </div>
                            <div class="ml-4 flex-shrink-0">
                                <a href="{{ route('documents.show', ['docsuuid' => $employe->docs_uuid,'filename', 'filename' => $employe->scan_cv]) }}" class="font-medium text-mygold-800 hover:text-mygold-600">Voir</a>
                            </div>
                        </li>
                      @endif
                      <!-- enddocument -->
                      <!-- document -->
                      @if($employe->scan_cin)
                            <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
                                <div class="flex w-0 flex-1 items-center">
                                <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z" clip-rule="evenodd" />
                                </svg>
                                <div class="ml-4 flex min-w-0 flex-1 gap-2">
                                    <span class="truncate font-medium">{{ $employe->scan_cin }}</span>
                                    
                                </div>
                                </div>
                                <div class="ml-4 flex-shrink-0">
                                    <a href="{{ route('documents.show', ['docsuuid' => $employe->docs_uuid,'filename', 'filename' => $employe->scan_cin])  }}" class="font-medium text-mygold-800 hover:text-mygold-600">Voir</a>
                                </div>
                            </li>
                        @endif
                        @if($employe->photo)
                            <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
                                <div class="flex w-0 flex-1 items-center">
                                <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z" clip-rule="evenodd" />
                                </svg>
                                <div class="ml-4 flex min-w-0 flex-1 gap-2">
                                    <span class="truncate font-medium">{{ $employe->photo }}</span>
                                </div>
                                </div>
                                <div class="ml-4 flex-shrink-0">
                                <a href="{{ route('documents.show', ['docsuuid' => $employe->docs_uuid,'filename' => $employe->photo,]) }}" class="font-medium text-mygold-800 hover:text-mygold-600">Voir</a>
                                </div>
                            </li>
                        @endif
                      <!-- enddocument -->
                    </ul>
                  </dd>
                </div>
              </dl>
            </div>
          </div>
        </div>
        <div class="px-12 pb-12 pt-0 mt-0">
          <div class="rounded-lg bg-white max-w-7xl mx-auto sm:px-6 lg:px-8 p-10">
            <div class="px-4 pb-4 sm:px-0">
              <h3 class="font-semibold leading-7 text-xl text-gray-900">Modifier les informations de l'employé</h3>
            </div>
            <a href="{{route('employes.edit', $employe->id)}}" >
              <x-primary-button >
                {{ 'Modifier' }}
             </x-primary-button>
          </a>
          </div>
        </div>

        <div class="px-12 pb-12 pt-0 mt-0">
          <div class="rounded-lg bg-white max-w-7xl mx-auto sm:px-6 lg:px-8 p-10">
            <div class="px-4 pb-4 sm:px-0">
              <h3 class="font-semibold leading-7 text-xl text-gray-900">supprimer cet employé ?</h3>
            </div>
            <x-danger-button
               x-data=""
               x-on:click.prevent="$dispatch('open-modal', 'confirm-employe-deletion')"
            >{{ __('supprimer') }}</x-danger-button>

            <x-modal name="confirm-employe-deletion"  :show="$errors->employeDeletion->isNotEmpty()" focusable>

              <form method="post" action="{{ route('employes.destroy', $employe->id) }}" class="p-6">
                @csrf
                @method('delete')
    
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('êtes-vous sûr de vouloir supprimer cet employé ?') }}
                </h2>
    
                <p class="mt-1 text-sm text-gray-600">
                    {{ __('Attention! une fois cet employé supprimé, toutes les ressources et les données relatives à celui-ci seront définitivement effacées. Veuillez entrer votre mot-de-passe pour confirmer que vous souhaitez supprimer cet employé de manière permanente.') }}
                </p>
    
                <div class="mt-6">
                    <x-input-label for="password" value="{{ __('mot-de-passe') }}" class="sr-only" />
    
                    <x-text-input
                        id="password"
                        name="password"
                        type="password"
                        class="mt-1 block w-3/4"
                        placeholder="{{ __('mot-de-passe') }}"
                    />
    
                    <x-input-error :messages="$errors->employeDeletion->get('password')" class="mt-2" />
                  </div>
    
                <div class="mt-6 flex justify-end">
                    <x-secondary-button x-on:click="$dispatch('close')">
                        {{ __('Annuler') }}
                    </x-secondary-button>
    
                    <x-danger-button class="ml-3">
                        {{ __('Supprimer l\'employé') }}
                    </x-danger-button>
                </div>
            </form>
            </x-modal>
          </div>
        </div>
</x-app-layout>