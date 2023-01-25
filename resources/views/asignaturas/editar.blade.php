<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Aplicación Web de Gestión de Horarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="/asignaturas/editar/{{ $asignatura->codAs}}" method ="POST">
                        @csrf
                        <!-- {{ method_field('PUT') }} -->
                        <label class="col-8 offset-2">Nombre:
                        <input type="text" class="form-control" name="nombreAs" placeholder="Nombre" value="{{ $asignatura->nombreAs}}"></label>
                        <label class="col-8 offset-2">Nombre Corto:
                        <input type="text" class="form-control" name="nombreCortoAs" placeholder="Nombre Corto" value="{{ $asignatura->nombreCortoAs}}"></label>
                        <label class="col-8 offset-2">Profesor:
                        <input type="text" class="form-control" name="profesorAs" placeholder="Profesor" value="{{ $asignatura->profesorAs}}"></label>
                        <label class="col-8 offset-2">Color:
                        <input type="text" class="form-control" name="colorAs" placeholder="Color" value="{{ $asignatura->colorAs}}"></label>
                        <input type="submit" value="Guardar" class="col-2 offset-7 btn btn-success"> 
                    </form>
                        <!-- <a  class="col-8 offset-2" href="/asignaturas">Volver al listado de asignaturas</a> -->
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>
