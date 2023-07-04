<x-tenancy-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Versículo {{ $verse->book->name . ' ' . $verse->chapter . ':' . $verse->verse }}
        </h2>
    </x-slot>
    <x-container class="pt-12 pb-24">
        <a class="btn btn-blue-c" href="{{ route('verses.index') }}"><< Regresar</a>
        <div class="card mt-4">
            <div class="card-body">
                <p class="font-bold">{{ $verse->book->name . ' ' . $verse->chapter . ':' . $verse->verse }}</p>
                <p class="text-md">
                    {{ $verse->content }}
                </p>
                <p class="font-bold mt-4">Creado</p>
                <p class="text-md mb-8">
                    {{ $verse->created_at }}
                </p>
                @isset($verse->url_post)
                <div class="flex justify-end">
                    <a target="_blank" href="{{ $verse->url_post }}" class="btn btn-blue">Ver Publicación</a>
                </div>
                @endisset
            </div>
        </div>
    </x-container>
</x-tenancy-layout>
