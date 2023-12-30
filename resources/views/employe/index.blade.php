<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gérer les employés') }}
        </h2>
    </x-slot>
    <div class="py-12">
            <div class="h-full">
              <!-- Table -->
              <div class="w-full max-w-4xl mx-auto bg-white shadow-lg border rounded-lg pb-10 border-gray-200 my-12">
                <header class="px-5 py-4 border-b border-gray-100">
                  <h2 class="font-semibold text-gray-800">Employés</h2>
                </header>
                <div class="p-3">
                  <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                      <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                        <tr>
                          <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">Nom</div>
                          </th>
                          <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">Prenom</div>
                          </th>
                          <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">Poste</div>
                          </th>
                          <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">Email</div>
                          </th>
                          <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">num tel</div>
                          </th>
                          <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold ">salaire <span class="lowercase">(dh)</span> </div>
                          </th>
                          <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">actions</div>
                          </th>
                        </tr>
                      </thead>
                      <tbody class="text-sm divide-y divide-gray-100">
                        @foreach($employes as $employe)
                            <tr>
                            <td class="p-2 whitespace-nowrap">
                                <div class="flex items-center">
                                <div class="font-medium text-gray-800 uppercase">{{ $employe->nom }}</div>
                                </div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="text-left capitalize">{{ $employe->prenom }}</div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="text-left">{{ $employe->poste }}</div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="text-left">{{ $employe->email }}</div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="text-left">{{ $employe->num_tel }}</div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="font-medium text-green-500 text-center">{{ $employe->salaire }}</div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="text-left font-medium"><a class="font-medium text-mygold-900 dark:text-mygold-900 hover:underline"  href="{{ route('employes.show', $employe->id) }}">détails</a></div>
                            </td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
    </div>
</x-app-layout>