@extends('cursos.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>EDITAR CURSO</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('cursos.index') }}"> SALIR</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>¡Ups!</strong> Hubo algunos problemas con su entrada.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('cursos.update',$curso_Nuevo->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NOMBRE DEL CURSO:</strong>
                    <input type="text" name="nombre" value="{{ $curso_Nuevo->nombre }}" class="form-control" placeholder="Nombre">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>DURACION DEL CURSO:</strong>
                    <input type="text" name="horas" value="{{ $curso_Nuevo->horas }}" class="form-control" placeholder="Duracion">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>INFORMACION DEL CURSO:</strong>
                    <textarea class="form-control" style="height:150px" name="información" placeholder="Información">{{ $curso_Nuevo->información }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">GUARDAR</button>
            </div>
        </div>

    </form>
@endsection
