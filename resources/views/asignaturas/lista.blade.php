<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Aplicación Web de Gestión de Horarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 col-12">
                    <h1 class="h2">Listado de Asignaturas</h1>
                        @if(count($asignaturas)>0)
                        @foreach ($asignaturas as $asignatura)
                            <div class="row">
                                <h3 class="col-5 d-flex align-items-center h6">-> {{ $asignatura->nombreAs }}<h3>
                                <button class="btn btn-success"><a href="/asignaturas/ver/{{$asignatura->codAs}}">Ver</a></button>
                                <button class="btn btn-warning"><a href="/asignaturas/editar/{{$asignatura->codAs}}">Editar</a></button>
                                <button class="btn btn-danger"><a href="/asignaturas/eliminar/{{$asignatura->codAs}}">Eliminar</a></button>
                            </div>
                        @endforeach
                        @else
                        <h1 class="fw-bolder text-danger">No hay asignaturas creadas</h1>
                        @endif
                        <a href="/asignaturas/crear" class="btn btn-primary">Crear Nueva Asignatura</a>
                </div>
            </div>
    </div>
</x-app-layout>




