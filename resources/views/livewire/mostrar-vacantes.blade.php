<div>

    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    
        @forelse ($vacantes as $vacante)
        <div class="p-6 text-gray-900 dark:text-gray-100 md:flex md:justify-between md:items-center">
            <div class="space-y-3">
                <a href="{{route('vacantes.show',$vacante->id)}}" class="text-xl font-bold">
                    {{ $vacante->titulo }}
                </a>
    
                <p class="text-sm text-gray-300 font-bold"> {{ $vacante->empresa }}</p>
                <p class="text-sm text-gray-400">último día: {{$vacante->ultimo_dia->format('d/m/Y') }}</p>
            </div>
    
            <div class="flex flex-col md:flex-row gap-3 items-stretch mt-5 md:mt-0">
                <a 
                    class="bg-slate-50 py-2 px-4 rounded-lg text-gray-700 text-xs font-bold text-center"
                    href="{{route('candidatos.index',$vacante)}}"
                >
                {{ $vacante->candidatos->count()}}
                CANDIDATOS
                </a>
    
                <a 
                    class="bg-blue-800 py-2 px-4 rounded-lg text-gray-50 text-xs font-bold text-center"
                    href="{{route('vacantes.edit',$vacante->id)}}"
                >
                EDITAR
                </a>
    
                <button 
                    class="bg-red-600 py-2 px-4 rounded-lg text-white-50 text-xs font-bold text-center"
                    wire:click="$emit('mostrarAlerta',{{$vacante->id}})"
                >
                Eliminar
                </button>
            </div>
        </div>    
        @empty
            <p class="p-3 text-center text-sm text-gray-600">No hay vacantes que mostrar</p>
        @endforelse
    
    </div>
    
    <div class=" mt-10">
        {{ $vacantes->links() }}
    </div>
</div>


@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script> 
        Livewire.on('mostrarAlerta', (vacante_id) => { 
            Swal.fire({
                title: 'Eliminar Vacante?',
                text: "Una vacante eliminada no se puede recuperar",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Eliminar vacante'
                }).then((result) => {
                if (result.isConfirmed) {

                    // Eliminar la vacante
                    Livewire.emit('eliminarVacante',vacante_id)

                    Swal.fire(
                    'Eliminado!',
                    'Se ha eliminado correctamente',
                    'success'
                    )
                }
            })
        })

    </script>
@endpush