<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Clientes
        </h2>
    </x-slot>

    <x-container class="py-12">
        <div class="flex justify-end mb-8">
            <a href="{{ route('tenants.create') }}" class="btn btn-blue">
                Nuevo
            </a>
        </div>
        <div class="card">
            <div class="card-body">

                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Id
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Dominio
                                </th>
                                <th scope="col" class="px-6 py-3">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tenants as $tenant)
                            <tr class="bg-white border-b ">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                   {{  $tenant->id }}
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                   <p>{{  $tenant->domains->first()->domain ?? '' }}</p>
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    <div class="flex justify-end gap-2">

                                        <a target="_blank" href="{{  $tenant->domains->first()->domain ? 'https://' . $tenant->domains->first()->domain : '#' }}" class="btn btn-blue-c">
                                            Acceder
                                        </a>
                                        <a href="{{ route('tenants.edit', $tenant) }}" class="btn btn-yellow">
                                            Editar
                                        </a>
                                        <form class="form-tenant" action="{{ route('tenants.destroy', $tenant) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        <button class="mr-2 btn btn-red">Eliminar</button>
                                        </form>
                                    </div>
                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </x-container>
    <script>
        $('.form-tenant').submit(function(e){
            e.preventDefault();
            Swal.fire({
                title: '¿Seguro que quieres eliminar este tenant?',
                text: "No podrás revertir esta acción!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Si, Bórralo',
                cancelButtonText: 'Cancelar',
                customClass:{
                    confirmButton: 'btn bg-red-500',
                    cancelButton: 'btn btn-blue ml-2'
                }
                }).then((result) => {
                if (result.isConfirmed) {
                    // Swal.fire(
                    // 'Deleted!',
                    // 'Your file has been deleted.',
                    // 'success'
                    // )
                    this.submit();
                }
            })
        })

    </script>
</x-app-layout>
