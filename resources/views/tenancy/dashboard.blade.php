<x-tenancy-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-4 gap-4">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <p class="text-5xl text-center text-sky-900">
                            {{ $verses->count() }}
                        </p>
                        <p class="text-center text-lg text-gray-900">
                            Versículos creados
                        </p>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <p class="text-5xl text-center text-sky-900">
                            {{ $users->count() }}
                        </p>
                        <p class="text-center text-lg text-gray-900">
                            Usuarios registrados
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-tenancy-layout>
