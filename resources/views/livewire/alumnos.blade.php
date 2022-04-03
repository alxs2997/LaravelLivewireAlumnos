<div>
    {{-- Do your work, then step back. --}}
    <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
                Listado De Alumnos
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if(session()->has('message'))
            <div class="bg-teal-100 rounded-b text-teal-900 px-4 py-4 shadow-md my-3" role="alert">
                <div class="flex">
                    <div>
                        <h4>{{ session('message')}}</h4>
                    </div>
                </div>
            </div>
        @endif
             <a href="{{route('alumnos.create')}}" class="btn bg-info hover:bg-info text-white font-bold py-2 px-4 my-3">Nuevo </a>
       
            @include('livewire.create')   
  
                <table class="table-fixed w-full">
                    <thead>
                        <tr class="bg-indigo-600 text-white">
                            <th class="border px-4 py-2 text-center">N° </th>
                            <th class="border px-4 py-2 text-center">Nombre</th>
                            <th class="border px-4 py-2 text-center">Código</th>
                            <th class="border px-4 py-2 text-center">Dirección </th>
                            <th class="border px-4 py-2 text-center">Teléfono </th>
                            <th class="border px-4 py-2 text-center">Mail </th>
                            <th class="border px-4 py-2 text-center" width="280px">Mantenimiento</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($alumnos as $alumno )
                        <tr>
                            <td class="border px-4 py-2">{{$alumno->id}}</td>
                            <td class="border px-4py-2">{{$alumno->name}}</td>
                            <td class="border px-4 py-2">{{$alumno->code}}</td>
                            <td class="border px-4 py-2">{{$alumno->direccion}}</td>
                            <td class="border px-4 py-2">{{$alumno->n_tel}}</td>
                            <td class="border px-4 py-2">{{$alumno->correo}}</td>
                            <td class="border px-4 py-2">
                    <form action="{{URL::to ('/alumnos'.$alumnos->id)}}" method="POST">
                        <a href="{{url('/alumnos/'.$alumnos->id)}}" title="show">
                            <i class="fas fa-eye text-indigo fa-lg"></i>
                        </a>
                        |
                        <a href="">
                            <i class="fas fa-edit text-black fa-lg"></i>
                        </a>
                        |
                            @csrf
                            @method('DELETE')
                            <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash text-danger"></i>
                        </button>
                        
                    </form>
                </td>
                        </tr>    
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>

</div>
