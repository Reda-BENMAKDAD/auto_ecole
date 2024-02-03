<x-app-layout>
   
    <div class="mt-[200px]">
       
        <div class="rounded-lg  max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-200 overflow-hidden shadow-sm sm:rounded-lg p-10">
                <div class="pb-6 pl-6 pr-6 text-gray-900 text-xl">
                    {{ __("Que voulez-vous faire ?") }}
                </div>
                <div class="relative w-100 h-100 grid grid-cols-3 gap-5">
                   @manager 
                        <x-dashboardLink url="{{ route('employes.index') }}" title="EMPLOYÉS" picture="employee.png"/>
                        <x-dashboardLink url="{{ route('employes.index') }}" title="VÉHICULES" picture="vehicles.png" />
                   @endmanager
                   @secretaire 
                        <x-dashboardLink url="{{ route('employes.create') }}" title="CLIENTS" picture="client.png" /> 
                        <x-dashboardLink url="{{ route('employes.edit', 1) }}" title="PAIEMENT" picture="payement.png" />
                        <x-dashboardLink url="{{ route('employes.create') }}" title="COURS" picture="cours.png" />
                        <x-dashboardLink url="{{ route('employes.edit', 1) }}" title="EMPLOYÉS" picture="client.png" />
                   @endsecretaire
                   @moniteur 
                        <x-dashboardLink url="{{ route('employes.index') }}" title="CLIENTS" picture="client.png" />
                        <x-dashboardLink url="{{ route('employes.index') }}" title="COURS" picture="cours.png" />
                   @endmoniteur

                   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
