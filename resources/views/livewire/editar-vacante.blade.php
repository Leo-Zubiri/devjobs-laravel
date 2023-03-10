<form class="md:w-1/2 space-y-5" wire:submit.prevent='editarVacante'>

    <!-- Email Address -->
    <div>
        <x-input-label for="titulo" :value="__('Titulo Vacante')" />

        <x-text-input 
            id="titulo" 
            class="block mt-1 w-full" 
            type="text" 
            wire:model="titulo" 
            :value="old('titulo')" 
            placeholder="Titulo de la vacante"
        />

        @error('titulo')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>

    <div>
        <x-input-label for="salario" :value="__('Salario Mensual')" />
        <select 
            wire:model="salario" 
            id="salario"
            class="block text-sm text-gray-500 font-bold uppercase mb-2 w-full"
        >
            <option>-- Seleccione --</option>
            @foreach ($salarios as $salario)
                <option value="{{$salario->id}}">{{$salario->salario}}</option>
            @endforeach
        </select>

        
        @error('salario')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>


    <div>
        <x-input-label for="categoria" :value="__('Categoría')" />
        <select 
            wire:model="categoria" 
            id="categoria"
            class="block text-sm text-gray-500 font-bold uppercase mb-2 w-full"
        >
        <option>-- Seleccione --</option>
        @foreach ($categorias as $categoria)
            <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
        @endforeach
        </select>

        
        @error('categoria')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>


    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />

        <x-text-input 
            id="empresa" 
            class="block mt-1 w-full" 
            type="text" 
            wire:model="empresa" 
            :value="old('empresa')" 
            placeholder="Nombre de la empresa"
        />

        @error('empresa')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>

    <div>
        <x-input-label for="ultimo_dia" :value="__('último Día Postulación')" />

        <x-text-input 
            id="ultimo_dia" 
            class="block mt-1 w-full" 
            type="date" 
            wire:model="ultimo_dia" 
            :value="old('ultimo_dia')" 
            placeholder="Nombre de la empresa"
        />

        
        @error('ultimo_dia')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>

    <div>
        <x-input-label for="descripcion" :value="__('Descripción Postulación')" />

        <textarea
            id="descripcion"
            wire:model="descripcion"
            placeholder="Descripción general del puesto, experiencia"
            class="rounded-md shadow-sm text-gray-500 mb-2 w-full h-72"
        ></textarea>

        
        @error('descripcion')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>


    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />

        <x-text-input 
            id="imagen" 
            class="block mt-1 w-full" 
            type="file" 
            wire:model="imagen_nueva" 
            accept="image/*"
        />

        <div class="my-5 w-80">
            <x-input-label :value="__('Imagen Actual')" />
            <img src="{{ asset('storage/vacantes/'.$imagen) }}" alt="{{'Imagen Vacante '.$titulo}}">
        </div>

        <div class="my-5 w-80">
            <!-- Two way data binding -->
            @if ($imagen_nueva)
                Imagen Nueva:
                <img src="{{$imagen_nueva->temporaryUrl()}}" alt="Preview">
            @endif
        </div>

        
        @error('imagen_nueva')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>

    
    <x-primary-button class="w-full justify-center">
        {{ __('GUARDAR CAMBIOS') }}
    </x-primary-button>

</form>