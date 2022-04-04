@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>{{$alumno->id}}</h2>
            </div>
        </div>
        @include('livewire.show')   
    </div>
    @foreach ($alumnos as $alumno )
        
    
    <div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                {{$alumno->name}}
            </div>
        </div>
    </div>
    <div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Codigo:</strong>
                {{$alumno->code}}
            </div>
        </div>
    </div>
    <div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Dirección:</strong>
                {{$alumno->direccion}}
            </div>
        </div>
    </div>
    <div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telefono:</strong>
                {{$alumno->n_tel}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Correo:</strong>
                {{$alumno->correo}}
            </div>
        </div>
    </div>
    @endforeach

            <div class="pull-right">
            <a href="{{ URL::to('alumnos/create') }}" class="btn btn-warning">Añadir Alumno<i class="fas fa-plus-circle"></i></a>
            </div>
@endsection