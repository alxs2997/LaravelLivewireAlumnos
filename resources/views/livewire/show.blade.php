@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>{{ $alumnos->id }}</h2>
            </div>
        </div>
    </div>
    <div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $alumnos->nombre }}
            </div>
        </div>
    </div>
    <div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Codigo:</strong>
                {{ $alumnos->code }}
            </div>
        </div>
    </div>
    <div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Dirección:</strong>
                {{ $alumnos->direccion }}
            </div>
        </div>
    </div>
    <div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telefono:</strong>
                {{ $alumnos->n_tel }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Correo:</strong>
                {{ $alumnos->correo }}
            </div>
        </div>
    </div>

            <div class="pull-right">
            <a href="{{ URL::to('alumnos/create') }}" class="btn btn-warning">Añadir Alumno<i class="fas fa-plus-circle"></i></a>
            </div>
@endsection