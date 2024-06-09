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


        
        //dd($cursos, $estudiantes, $tutores);

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
        return redirect()->route('estudiantes.indexGestion')->with('success', 'Estudiante registrado exitosamente');
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
    }
}
