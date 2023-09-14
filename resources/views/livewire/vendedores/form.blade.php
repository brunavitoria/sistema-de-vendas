<div>
    <form wire:submit.prevent="store">
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Criar vendedor</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Crie um novo vendedor preenchendo os campos e clicando em Criar.</p>
        
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="nome" class="block text-sm font-medium leading-6 text-gray-900">Nome</label>
                        <div class="mt-2">
                            <input type="text" name="nome" id="nome" wire:model="nome" autocomplete="nome" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-red-600 sm:text-sm sm:leading-6">
                            @error('nome') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
            
                    <div class="sm:col-span-3">
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">E-mail</label>
                        <div class="mt-2">
                            <input type="email" name="email" id="email" wire:model="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-red-600 sm:text-sm sm:leading-6">
                            @error('email') <span class="error">{{ $message }}</span> @enderror
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
