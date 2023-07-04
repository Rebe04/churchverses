<div>
    <x-input wire:keydown="limpiar_page" wire:model="search" class="w-full mt-2" value="{{ old('url_post') }}" type="text" name="url_post" placeholder="Buscar" />
    @if ($verses->count())
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Libro
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Capítulo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Versiculo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Texto
                    </th>
                    <th scope="col" class="px-6 py-3">
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($verses as $verse)
                <tr class="bg-white border-b ">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                       {{  $verse->book }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                       {{  $verse->chapter }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                       {{  $verse->verse }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                       {{  $verse->content }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        <div class="flex justify-end">
                            <form action="{{ route('verses.destroy', $verse) }}" method="POST">
                                @csrf
                                @method('DELETE')
                            <button class="mr-2 btn btn-red">Eliminar</button>
                            </form>
                            <a href="{{ route('verses.edit', $verse) }}" class="btn btn-yellow">
                                Editar
                            </a>
                        </div>
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
            <div class="card-footer">
                {{$verses->links()}}
            </div>
        @else
            <div class="card-body">
                <strong>No hay registros que coincidan con la busqueda</strong>
            </div>
        @endif
</div>
