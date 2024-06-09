<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage='gestion-estudiantes'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="gestion-estudiantes"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">

        <!-- Bootstrap CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

        <!-- jQuery and Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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

            <!-- Botón para crear un nuevo estudiante -->
            <div class="mb-4">
                <button class="btn btn-primary" data-toggle="modal" data-target="#createStudentModal">Nuevo Estudiante</button>
            </div>

            <!-- Tabla de estudiantes -->
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Código</th>
                            <th>Tutor</th>
                            <th>Curso</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($estudiantes as $estudiante)
                            <tr>
                                <td>{{ $estudiante->nombre }}</td>
                                <td>{{ $estudiante->apellido }}</td>
                                <td>{{ $estudiante->codigo }}</td>
                                <td>{{ $estudiante->tutor->nombre }} {{ $estudiante->tutor->apellido }}</td>
                                <td>{{ $estudiante->curso->curso }}</td>
                                <td>
                                    <!-- Botones de acción -->
                                    <a href="{{ route('estudiantes.edit', $estudiante->id_estudiante) }}" class="btn btn-warning btn-sm">Editar</a>
                                    <form action="{{ route('estudiantes.destroy', $estudiante->id_estudiante) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Modal para crear un nuevo estudiante -->
            <div class="modal fade" id="createStudentModal" tabindex="-1" role="dialog" aria-labelledby="createStudentModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="createStudentModalLabel">Registrar Estudiante</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('estudiantes.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="apellido">Apellido</label>
                                    <input type="text" class="form-control" id="apellido" name="apellido" value="{{ old('apellido') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="codigo">Código</label>
                                    <input type="text" class="form-control" id="codigo" name="codigo" value="{{ old('codigo') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="id_tutor">Tutor</label>
                                    <select class="form-control" id="id_tutor" name="id_tutor" required>
                                        @foreach($tutores as $tutor)
                                            <option value="{{ $tutor->id_tutor }}">{{ $tutor->nombre }} {{ $tutor->apellido }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="id_curso">Curso</label>
                                    <select class="form-control" id="id_curso" name="id_curso" required>
                                        @foreach($cursos as $curso)
                                            <option value="{{ $curso->id_curso }}">{{ $curso->curso }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <x-plugins></x-plugins>
</x-layout>
