<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage='gestion-estudiantes'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Editar estudiante"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <!-- Mensajes de éxito y errores -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <a href="{{ url()->previous() }}" class="btn btn-secondary btn-sm">
                        <i class="fas fa-arrow-left me-2"></i>
                        Volver
                    </a>

                    <!-- Form to edit estudiante -->
                    <form method="POST" action="{{ route('actualizar-estudiante', ['id' => $estudiante->id_estudiante]) }}">
                        @csrf
                        @method('PUT')

                        <!-- Display current estudiante details -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $estudiante->nombre }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="apellido" class="form-control" id="apellido" name="apellido" value="{{ $estudiante->apellido }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="codigo" class="form-label">Codigo</label>
                            <input type="codigo" class="form-control" id="codigo" name="codigo" value="{{ $estudiante->codigo }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="id_tutor" class="form-label">Tutor</label>
                            <select class="form-control" id="id_tutor" name="id_tutor">
                                <option value="" {{ $estudiante->id_tutor == null ? 'selected' : '' }}>Sin Tutor</option>
                                @foreach($tutores as $tutor)
                                    <option value="{{ $tutor->id_tutor }}" {{ $estudiante->id_tutor == $tutor->id_tutor ? 'selected' : '' }}>{{ $tutor->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="id_curso" class="form-label">Curso</label>
                            <select class="form-control" id="id_curso" name="id_curso">
                                <option value="" {{ $estudiante->id_curso == null ? 'selected' : '' }}>Sin Curso</option>
                                @foreach($cursos as $curso)
                                    <option value="{{ $curso->id_curso }}" {{ $estudiante->id_curso == $curso->id_curso ? 'selected' : '' }}>{{ $curso->curso.$curso->paralelo }}</option>
                                @endforeach
                            </select> 
                        </div>
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </form>

                   

                    <form action="{{ route('eliminar-estudiante', $estudiante->id_estudiante) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este estudiante? Esta acción no se puede deshacer.');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar Estudiante</button>
                    </form>


                </div>
            </div>


         

        </div>
    </main>
    <x-plugins></x-plugins>


</x-layout>
