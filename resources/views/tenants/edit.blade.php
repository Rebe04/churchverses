<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Clientes
        </h2>
    </x-slot>

    <x-container class="py-12">

        <div class="card">
            <div class="card-body">
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <form action="{{ route('tenants.update', $tenant) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="mb-4">
                        <x-label class="mb-2">
                            Nombre
                        </x-label>

                        <x-input class="w-full mt-2" value="{{ old('id', $tenant->id) }}" type="text" name="id" placeholder="Ingrese el Nombre" />


                    </div>
                    <div class="flex justify-end">
                        <button class="btn btn-blue">
                            Guardar
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </x-container>
</x-app-layout>
