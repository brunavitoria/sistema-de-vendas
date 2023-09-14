<div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
    <label for="vendedor_id" class="block text-sm font-medium leading-6 text-gray-900">Filtre por vendedor</label>
    <select name="vendedor_id" id="vendedor_id" wire:model="vendedor_id" wire:change="filter" class="block rounded-md shadow-sm focus:ring-red-500 focus:border-red-500 sm:text-sm border-gray-300">
        <option value="">Todos os vendedores</option>
        @foreach($vendedores as $item)
            <option value="{{ $item->id }}">{{ $item->nome }}</option>
        @endforeach
    </select>
    <table class="min-w-full divide-y divide-gray-300">
        <thead>
        <tr>
            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">ID</th>
            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Nome do Vendedor</th>
            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Email do Vendedor</th>
            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Comissão</th>
            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Valor</th>
            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Data</th>
        </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @if(count($vendas) > 0)
                @foreach($vendas as $venda)
                    <tr>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">#{{ $venda->id }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $venda->vendedor->nome }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $venda->vendedor->email }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">R$ {{ number_format($venda->comissao, 2, ',', '.') }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">R$ {{ number_format($venda->valor, 2, ',', '.') }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $venda->created_at->format('d/m/Y') }}</td>
                    </tr>
                @endforeach
            @else
            <tr>
                <td colspan="3" class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">
                    Nenhum venda cadastrada.
                </td>
            </tr>
            @endif
        </tbody>
    </table>
</div>
