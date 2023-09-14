<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vendedores') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-4 sm:p-6 lg:p-8">
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            <h1 class="text-base font-semibold leading-6 text-gray-900">Vendedores</h1>
                            <p class="mt-2 text-sm text-gray-700">Listagem com todos os vendedores cadastrados.</p>
                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <a href="{{ route('vendedores.novo') }}" class="block rounded-md bg-red-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">
                                Novo vendedor
                            </a>
                        </div>
                    </div>
                    <div class="mt-8 flow-root">
                        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                            <table class="min-w-full divide-y divide-gray-300">
                                <thead>
                                <tr>
                                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">ID</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Nome</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Email</th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    @if($vendedores)
                                        @foreach($vendedores as $vendedor)
                                            <tr>
                                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">#{{ $vendedor->id }}</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $vendedor->nome }}</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $vendedor->email }}</td>
                                            </tr>
                                        @endforeach
                                    @else
                                    <tr>
                                        <td colspan="3" class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">
                                            Nenhum vendedor cadastrado.
                                        </td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>                  
            </div>
        </div>
    </div>
</x-app-layout>