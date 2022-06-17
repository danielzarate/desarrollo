<div>

    <a wire:click="$set('open',true)">
       <i class="cursor-pointer fas fa-edit"></i>
    </a>


    <x-jet-dialog-modal wire:model="open">
        <x-slot name='title'>
            Editar Post {{$post->title}}
        </x-slot>

        <x-slot name='content'>

            <div wire:loading wire:target="image" class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Imagen Cargando!</strong>
                <span class="block sm:inline">Espere un momento hasta que la imagen haya cargado.</span>
            </div>


            @if($image)
                <img class="mb-4" src="{{$image->temporaryUrl()}}">
            @else
                    <img src="{{Storage::url($post->image)}}" alt="">

            @endif

            <div class="mb-4">
                <x-jet-label value="Titulo del Post" />
                <x-jet-input wire:model="post.title" type="text" class="w-full" />
                @error('title')
                    <span class="text-sm text-red-600">{{$message}}</span>
                @enderror
            </div>

            <div class="mb-4">
                <x-jet-label value="Contenido del Post" />
                <textarea wire:model="post.content" class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" rows="6"></textarea>
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

        <x-slot name='footer'>

            <x-jet-danger-button class="mr-2" wire:click="$set('open',false)">
                Cancelar
            </x-jet-danger-button>

            <x-jet-secondary-button wire:click="update" wire:loading.attr="disable" wire:target="update,image" class="disable:opacity-25">
                Actualizar Post
            </x-jet-secondary-button>

        </x-slot>
    </x-jet-dialog-modal>
</div>
