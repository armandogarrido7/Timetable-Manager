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
                <h1>Crear nueva asignatura</h1>
                <form action="/asignaturas/crear" method ="POST">
                @csrf
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <label>Nombre <input type="text" name="nombreAs" required></label> <br>
                    <label>Nombre Corto <input type="text" name="nombreCortoAs" required></label> <br>
                    <label>Profesor <input type="text" name="profesorAs" required></label> <br>
                    <label>Color <input type="color" name="colorAs" required></label> <br>
                    <button class="btn btn-success"><input type="submit" value="Guardar"></button>
                </form>
                {{-- <a href="/asignaturas">Volver al listado de asignaturas</a> --}}
            </div>
        </div>
    </div>
</x-app-layout>