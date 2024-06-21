<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Estudiante;
use App\Models\Tutor;
use App\Models\Curso;

class EstudiantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexGestion()
    {
        //
          // Obtener todos los tutores y cursos para el formulario
        $tutores = Tutor::all();
        $cursos = Curso::all();
        $estudiantes = Estudiante::all();
       // dd($estudiantes);
        return view('estudiantes.gestion-estudiantes', compact('tutores', 'cursos', 'estudiantes'));
    }

    public function indexReporte()
    {
        //
        return view('estudiantes.reporte-estudiantes');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:30',
            'apellido' => 'required|string|max:30',
            'codigo' => 'required|string|max:8|unique:estudiantes',
            'id_tutor' => 'required|exists:tutor,id_tutor',
            'id_curso' => 'required|exists:curso,id_curso',
        ]);

        // Crear un nuevo estudiante
        $estudiante = new Estudiante([
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'codigo' => $request->input('codigo'),
            'id_tutor' => $request->input('id_tutor'),
            'id_curso' => $request->input('id_curso'),
        ]);

        // Guardar el estudiante en la base de datos
        $estudiante->save();

        // Redirigir a una página de éxito o a la lista de estudiantes
        return redirect()->route('estudiantes.reporte-estudiantes')->with('success', 'Estudiante registrado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $estudiante = Estudiante::findOrFail($id);
        $tutores = Tutor::all();
        $cursos = Curso::all();
      
        return view('estudiantes.editar-estudiante', compact('estudiante', 'tutores', 'cursos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'nombre' => 'required|string|max:30',
            'apellido' => 'required|string|max:30',
            'codigo' => 'required|string|max:8|unique:estudiantes,codigo,' . $id,
            'id_tutor' => 'required|exists:tutors,id_tutor',
            'id_curso' => 'required|exists:cursos,id_curso',
        ]);

        $estudiante = Estudiante::findOrFail($id);
        $estudiante->nombre = $request->input('nombre');
        $estudiante->apellido = $request->input('apellido');
        $estudiante->codigo = $request->input('codigo');
        $estudiante->id_tutor = $request->input('id_tutor');
        $estudiante->id_curso = $request->input('id_curso');
        $estudiante->save();

        return redirect()->route('gestion-estudiantes')->with('success', 'Estudiante actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // Buscar el estudiante por ID y eliminarlo
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->delete();

        // Redirigir a la lista de estudiantes con un mensaje de éxito
        return redirect()->route('gestion-estudiantes')->with('success', 'Estudiante eliminado exitosamente');
    }
}
