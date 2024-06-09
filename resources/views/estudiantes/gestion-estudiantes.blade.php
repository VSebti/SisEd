<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage='gestion-estudiantes'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="gestion-estudiantes"></x-navbars.navs.auth>
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

            <!-- Formulario de registro de estudiantes -->
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
                    <label for="Codigo">Código</label>
                    <input type="text" class="form-control" id="Codigo" name="Codigo" value="{{ old('Codigo') }}" required>
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
    </main>
    <x-plugins></x-plugins>
</x-layout>
