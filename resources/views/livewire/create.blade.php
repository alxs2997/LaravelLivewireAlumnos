<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Añadir Alumnos
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('alumnos.store') }}">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="nombre" class="block font-medium text-sm text-gray-700">Nombre</label>
                            <input type="text" name="name" id="name" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('nombre', '') }}" />
                            @error('nombre')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                            <label for="codigo" class="block font-medium text-sm text-gray-700">Código</label>
                            <input type="text" name="code" id="code" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('code', '') }}" />
                            @error('codigo')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                            <label for="direccion" class="block font-medium text-sm text-gray-700">Dirección</label>
                            <input type="text" name="direccion" id="direccion" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('direccion', '') }}" />
                            @error('direccion')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                            <label for="n_tel" class="block font-medium text-sm text-gray-700">Número de Teléfono</label>
                            <input type="number" name="n_tel" id="n_tel" type="number" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('n_tel', '') }}" />
                            @error('n_tel')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                            <label for="n_tel" class="block font-medium text-sm text-gray-700">E-Mail</label>
                            <input type="text" name="correo" id="n_tel" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('correo', '') }}" />
                            @error('correo')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit"class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Guardar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
