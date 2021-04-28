@extends('cursos.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>MAS CURSOS PARA TI</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('cursos.create') }}"> CREAR NUEVO CURSO</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>NOMBRE DEL CURSO</th>
            <th>DURACION DEL CURSO</th>
            <th>INFORMACION DEL CURSO</th>
            <th width="280px">ACCIONES</th>
        </tr>
        @foreach ($cursosNuevo as $curso_Nuevo)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $curso_Nuevo->nombre }}</td>
            <td>{{ $curso_Nuevo->horas }}</td>
            <td>{{ $curso_Nuevo->información }}</td>
            <td>
                <form action="{{ route('cursos.destroy',$curso_Nuevo->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('cursos.show',$curso_Nuevo->id) }}">VER</a>

                    <a class="btn btn-primary" href="{{ route('cursos.edit',$curso_Nuevo->id) }}">EDITAR</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">ELIMINAR</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $cursosNuevo->links() !!}

@endsection
