<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

    @forelse ($vacantes as $vacante)
    <div class="p-6 text-gray-900 dark:text-gray-100 md:flex md:justify-between md:items-center">
        <div class="space-y-3">
            <a href="#" class="text-xl font-bold">
                {{ $vacante->titulo }}
            </a>

            <p class="text-sm text-gray-300 font-bold"> {{ $vacante->empresa }}</p>
            <p class="text-sm text-gray-400">último día: {{$vacante->ultimo_dia->format('d/m/Y') }}</p>
        </div>

        <div class="flex flex-col md:flex-row gap-3 items-stretch mt-5 md:mt-0">
            <a 
                class="bg-slate-50 py-2 px-4 rounded-lg text-gray-700 text-xs font-bold text-center"
                href="#"
            >
            CANDIDATOS
            </a>

            <a 
                class="bg-blue-800 py-2 px-4 rounded-lg text-gray-50 text-xs font-bold text-center"
                href="{{route('vacantes.edit',$vacante->id)}}"
            >
            EDITAR
            </a>

            <a 
                class="bg-red-600 py-2 px-4 rounded-lg text-white-50 text-xs font-bold text-center"
                href="#"
            >
            EDITAR
            </a>
        </div>
    </div>    
    @empty
        <p class="p-3 text-center text-sm text-gray-600">No hay vacantes que mostrar</p>
    @endforelse

</div>

<div class=" mt-10">
    {{ $vacantes->links() }}
</div>
