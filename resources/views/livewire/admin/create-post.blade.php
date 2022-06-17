<div>
    <x-jet-danger-button class="ml-2 inline-block" wire:click="$set('open',true)">
        Crear Nuevo Post
    </x-jet-danger-button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            Crear Nuevo Post
        </x-slot>

        <x-slot name="content">

            <div wire:loading wire:target="image" class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Imagen Cargando!</strong>
                <span class="block sm:inline">Espere un momento hasta que la imagen haya cargado.</span>
            </div>


            @if($image)
                <img class="mb-4" src="{{$image->temporaryUrl()}}">
            @endif


            <div class="mb-4">
                <x-jet-label value="Titulo del Post" />
                <x-jet-input type="text" class="w-full" wire:model="title" />
                @error('title')
                    <span class="text-sm text-red-600">{{$message}}</span>
                @enderror
            </div>

            <div class="mb-4">
                <x-jet-label value="Contenido del Post" />
                <textarea wire:model="content" class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" rows="6"></textarea>
                @error('content')
                    <span class="text-sm text-red-600">{{$message}}</span>
                @enderror

            </div>

            <div>
                <input type="file" wire:model="image" id="{{$identificador}}">
                @error('image')
                    <br><span class="text-sm text-red-600">{{$message}}</span>
                @enderror
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button class="mr-2" wire:click="$set('open',false)">
                Cancelar
            </x-jet-secondary-button>

            <x-jet-danger-button wire:click="save" wire:loading.attr="disable" wire:target="save,image" class="disable:opacity-25">
                Crear Post
            </x-jet-danger-button>

        </x-slot>
    </x-jet-dialog-modal>
</div>
