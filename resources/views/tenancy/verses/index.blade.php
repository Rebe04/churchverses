<x-tenancy-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Versículos
        </h2>
    </x-slot>
    <x-container class="pt-12 pb-24">
        <div class="flex justify-end mb-8">
            <a href="{{ route('verses.create') }}" class="btn btn-blue">
                Nuevo versículo
            </a>
        </div>
        <div class="card">
            <div class="card-body">
                @livewire('verse-table')
            </div>
        </div>
    </x-container>
</x-tenancy-layout>
