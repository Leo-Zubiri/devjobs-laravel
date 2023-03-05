<div>

    <livewire:filtrar-vacantes/>

    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <h3 class="font-extrabold text-4xl text-gray-400 mb-12 text-center">
                Nuestras Vacantes disponibles
            </h3>

            <div class="bg-white shadow-sm rounded-lg p-6 divide-y divide-slate-500">
                @forelse ($vacantes as $vacante)
                    <div class="md:flex md:justify-between md:items-center py-5">
                        <div class="md:flex-1">
                            <a href="" class="text-2xl font-extrabold text-slate-600"
                            href="{{route('vacantes.show',$vacante->id)}}">
                                {{$vacante->titulo}}
                            </a>
                            <p class="text-base text-gray-600">{{$vacante->empresa}}</p>

                            <p class="text-xs">Último dia para postularse: 
                                <span class="font-bold">{{$vacante->ultimo_dia->format('d/m/Y')}}</span>
                            </p>
                        </div>

                        <div class="mt-5 md:mt-0">
                            <a  class="bg-indigo-500 p-3 text-sm uppercase font-bold text-white rounded-lg block text-center"
                                href="{{route('vacantes.show',$vacante->id)}}">
                                Ver vacante
                            </a>
                        </div>
                    </div>
                @empty
                    <p class="p-3 text-center text-sm text-gray-600">
                        No hay vacantes aún
                    </p>
                @endforelse
            </div>
        </div>
    </div>
</div>
