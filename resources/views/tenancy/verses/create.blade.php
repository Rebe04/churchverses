<x-tenancy-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Nuevo Versículo
        </h2>
    </x-slot>
    <x-container class="pt-12 pb-24">
        <a class="btn btn-blue-c" href="{{ route('verses.index') }}"><< Regresar</a>
        <div class="card mt-4">
            <div class="card-body">
                <div>
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <form action="{{ route('verses.store') }}" method="POST">
                    @csrf
                    <div class="mb-8">
                        <x-label for="book" class="mb-2">
                            Libro
                        </x-label>

                        <select name="book_id" class="w-full mt-2 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            @foreach ($books as $book)
                                <option value="{{ $book->id }}">{{ $book->name }}</option>
                            @endforeach
                        </select>


                    </div>
                    <div class="mb-8">
                        <x-label for="chapter" class="mb-2">
                            Capítulo
                        </x-label>

                        <x-input autocomplete="off" class="w-full mt-2" value="{{ old('chapter') }}" type="text" name="chapter" placeholder="Ingrese el Capítulo" />


                    </div>
                    <div class="mb-8">
                        <x-label for="verse" class="mb-2">
                            Versículo
                        </x-label>

                        <x-input autocomplete="off" class="w-full mt-2" value="{{ old('verse') }}" type="text" name="verse" placeholder="Ingrese el Versículo" />


                    </div>
                    <div class="mb-8">
                        <x-label for="url_post" class="mb-2">
                            Url del Post en Facebook
                        </x-label>

                        <x-input autocomplete="off" class="w-full mt-2" value="{{ old('url_post') }}" type="text" name="url_post" placeholder="Ingrese la url del post" />


                    </div>
                    <div class="mb-8">
                        <x-label for="content" class="mb-2">
                            Texto
                        </x-label>

                        <textarea autocomplete="off" class="w-full mt-2 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="content" placeholder="Ingrese el Texto" >{{ old('content') }}</textarea>


                    </div>
                    <div class="flex justify-end">
                        <button class="btn btn-blue">
                            Guardar
                        </button>
                    </div>
                </form>
                </div>
            </div>
        </div>

    </x-container>
</x-tenancy-layout>
