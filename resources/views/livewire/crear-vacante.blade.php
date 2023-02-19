<form class="md:w-1/2 space-y-5">

    <!-- Email Address -->
    <div>
        <x-input-label for="titulo" :value="__('Titulo Vacante')" />

        <x-text-input 
            id="titulo" 
            class="block mt-1 w-full" 
            type="text" 
            name="titulo" 
            :value="old('titulo')" 
            placeholder="Titulo de la vacante"
        />
    </div>

    <div>
        <x-input-label for="salario" :value="__('Salario Mensual')" />
        <select 
            name="salario" 
            id="salario"
            class="block text-sm text-gray-500 font-bold uppercase mb-2 w-full"
        >
        </select>
    </div>


    <div>
        <x-input-label for="categoria" :value="__('Categoría')" />
        <select 
            name="categoria" 
            id="categoria"
            class="block text-sm text-gray-500 font-bold uppercase mb-2 w-full"
        >
        </select>
    </div>


    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />

        <x-text-input 
            id="empresa" 
            class="block mt-1 w-full" 
            type="text" 
            name="empresa" 
            :value="old('empresa')" 
            placeholder="Nombre de la empresa"
        />
    </div>

    <div>
        <x-input-label for="ultimo_dia" :value="__('último Día Postulación')" />

        <x-text-input 
            id="ultimo_dia" 
            class="block mt-1 w-full" 
            type="date" 
            name="ultimo_dia" 
            :value="old('ultimo_dia')" 
            placeholder="Nombre de la empresa"
        />
    </div>

    <div>
        <x-input-label for="ultimo_dia" :value="__('último Día Postulación')" />

        <textarea
            name="descripcion"
            placeholder="Descripción general del puesto, experiencia"
            class="rounded-md shadow-sm text-gray-500 mb-2 w-full h-72"
        ></textarea>
    </div>


    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />

        <x-text-input 
            id="imagen" 
            class="block mt-1 w-full" 
            type="file" 
            name="imagen" 
        />
    </div>

</form>