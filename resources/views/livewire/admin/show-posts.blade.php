<div class="container">
    <div class="flex flex-col mt-8">
        <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">

                <div class="px-6 py-4 flex items-center">

                    <x-jet-input class="flex-1" placeholder="Ingrese texto a buscar" type="text" wire:model="search" />
                    {{-- <input wire:model="search" class="form-input flex-1 shadow-sm" type="text" placeholder="Ingrese el nombre de un curso"> --}}
                    @livewire('admin.create-post')

                </div>

                @if ($posts->count())

                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">ID</th>
                                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">TITLE</th>
                                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">CONTENT</th>
                                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50"></th>

                            </tr>
                        </thead>

                        <tbody class="bg-white">

                            @foreach ($posts as $post)
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm font-medium leading-5 text-gray-900">
                                                    {{$post->id}}
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="flex items-center">

                                            <div class="ml-4">
                                                <div class="text-sm font-medium leading-5 text-gray-900">
                                                    {{$post->title}}
                                                </div>

                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm font-medium leading-5 text-gray-900 flex items-center">
                                                    {{$post->content}}
                                                </div>

                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                        @livewire('admin.edit-post', ['post' => $post], key($post->id))

                                    </td>
                                </tr>
                            @endforeach



                        </tbody>
                    </table>


                @else
                    <div class="px-6 py-4">
                        No hay registros que mostrar
                    </div>
                @endif

                <div>
                    {{$posts->links()}}
                </div>


            </div>
        </div>
    </div>
</div>
