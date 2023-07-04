<div class="flex gap-4 justify-end">
    <a href="{{ route('verses.show', $verse) }}" class="btn btn-blue-c">
        Ver
    </a>
    <a href="{{ route('verses.edit', $verse) }}" class="btn btn-yellow">
        Editar
    </a>
    <form class="form-verse" action="{{ route('verses.destroy', $verse) }}" method="POST">
        @csrf
        @method('DELETE')
    <button class="mr-2 btn btn-red">Eliminar</button>
    </form>
    <script>


        $('.form-verse').submit(function(e){
            e.preventDefault();
            Swal.fire({
                title: '¿Seguro que quieres eliminar este versículo?',
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
</div>
