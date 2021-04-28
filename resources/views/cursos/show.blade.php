@extends('cursos.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> INFORMACION DEL CURSO</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('cursos.index') }}"> SALIR</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NOMBRE DEL CURSO:</strong>
                {{ $curso_Nuevo->nombre }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>DURACION DEL CURSO:</strong>
                {{ $curso_Nuevo->horas }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>INFORMACION DEL CURSO:</strong>
                {{ $curso_Nuevo->información }}
            </div>
        </div>
    </div>
@endsection
