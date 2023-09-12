<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="rounded-lg bg-slate-200 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-200 overflow-hidden shadow-sm sm:rounded-lg p-10">
                <div class="pb-6 pl-6 pr-6 text-gray-900 text-xl">
                    {{ __("Que voulez-vous faire ?") }}
                </div>
                <div class="relative w-100 h-100 grid grid-cols-3 gap-5">
                   @manager 
                        <x-dashBoardLink url="{{ route('employes.index') }}" title="Gérer les employés" picture="employee.png"/>
                        <x-dashBoardLink url="{{ route('employes.index') }}" title="Gérer les vehicules" picture="vehicles.png" />
                   @endmanager
                   @secretaire 
                        <x-dashBoardLink url="{{ route('employes.create') }}" title="Gérer les clients" picture="client.png" /> 
                        <x-dashBoardLink url="{{ route('employes.edit', 1) }}" title="Encaisser un payement" picture="payement.png" />
                        <x-dashBoardLink url="{{ route('employes.create') }}" title="Ajouter un cours" picture="cours.png" />
                        <x-dashBoardLink url="{{ route('employes.edit', 1) }}" title="Gérer les employés" picture="client.png" />
                   @endsecretaire
                   @moniteur 
                        <x-dashBoardLink url="{{ route('employes.index') }}" title="voir les clients" picture="client.png" />
                        <x-dashBoardLink url="{{ route('employes.index') }}" title="voir les cours" picture="cours.png" />
                   @endmoniteur

                   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
