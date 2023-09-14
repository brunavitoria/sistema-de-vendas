<div>
    <form wire:submit.prevent="store">
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Criar venda</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Crie uma nova vendeda preenchendo os campos e clicando em Criar.</p>
        
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="valor" class="block text-sm font-medium leading-6 text-gray-900">Valor</label>
                        <div class="mt-2">
                            <input type="text" name="valor" id="valor" wire:model.prevent="valor" autocomplete="valor" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-red-600 sm:text-sm sm:leading-6">
                            @error('valor') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
            
                    <div class="sm:col-span-3">
                        <label for="vendedor_id" class="block text-sm font-medium leading-6 text-gray-900">Vendedor</label>
                        <div class="mt-2">
                            <select name="vendedor_id" id="vendedor_id" wire:model.prevent="vendedor_id" class="block w-full rounded-md shadow-sm focus:ring-red-500 focus:border-red-500 sm:text-sm border-gray-300">
                                <option value="">Selecione um vendedor</option>
                                @foreach($vendedores as $item)
                                    <option value="{{ $item->id }}">{{ $item->nome }}</option>
                                @endforeach
                            </select>
                            @error('vendedor_id') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="mt-6 flex items-center justify-end gap-x-6">
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <button type="submit" class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">
                Criar
            </button>
        </div>
    </form> 
        <script>
            setTimeout(function() {
                $('.alert').fadeOut('fast');
            }, 3000);
        </script>
</div>

