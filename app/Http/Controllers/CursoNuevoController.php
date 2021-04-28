<?php

namespace App\Http\Controllers;

use App\Models\Curso_Nuevo;
use Illuminate\Http\Request;

class CursoNuevoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursosNuevo=Curso_Nuevo::latest()->paginate(5);

        return view ('cursos.index',compact('cursosNuevo'))
        ->with('i', (request()->input('page', 1) - 1) * 5);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'horas' => 'required',
            'información' => 'required',
        ]);

        Curso_Nuevo::create($request->all());

        return redirect()->route('cursos.index')
        ->with('success','Curso creado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Curso_Nuevo  $curso_Nuevo
     * @return \Illuminate\Http\Response
     */
    public function show(Curso_Nuevo $curso_Nuevo)
    {
        return view('cursos.show',compact('curso_Nuevo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Curso_Nuevo  $curso_Nuevo
     * @return \Illuminate\Http\Response
     */
    public function edit(Curso_Nuevo $curso_Nuevo)
    {
        return view('cursos.edit',compact('curso_Nuevo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Curso_Nuevo  $curso_Nuevo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curso_Nuevo $curso_Nuevo)
    {
        $request->validate([
            'nombre' => 'required',
            'horas' => 'required',
            'información' => 'required',
        ]);

        $curso_Nuevo->update($request->all());

        return redirect()->route('cursos.index')
        ->with('success','Curso actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Curso_Nuevo  $curso_Nuevo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curso_Nuevo $curso_Nuevo)
    {
        $curso_Nuevo->delete();

        return redirect()->route('cursos.index')
        ->with('success','Curso eliminado con éxito.');
    }
}
