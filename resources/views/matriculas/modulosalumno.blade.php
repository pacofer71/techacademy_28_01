@extends('plantillas.plantilla1')
@section('titulo')
    Modulos Alumno
@endsection
@section('cabecera')
    Matriula Alumno: {{ $alumno->apellidos . ', ' . $alumno->nombre }}
@endsection
@section('contenido')
    <a href="#" class="bg-yellow-600 hover:bg-green-800 rounded text-white font-bold py-2 px-4 shadow">
        <i class="fa fa-plus"></i> Nueva Asignatura</a>
    <div class="text-center grid grid-cols-5 py-2 gap-2 mt-10 border-2 border-blue-200 shadow">
        <div class="font-bold text-xl text-gray-700">Código</div>
        <div class="font-bold text-xl text-gray-700">Asignatura</div>
        <div class="font-bold text-xl text-gray-700">Nota</div>
        <div class="font-bold text-xl text-gray-700">Matriculado</div>
        <div class="font-bold text-xl text-gray-700">Acciones</div>
    </div>
    <div class="text-center grid grid-cols-5 py-2 gap-2 mt-10 border-2 border-blue-200 shadow align-middle">
        @foreach ($asignaturas as $asig)
            @php
            $color= ($asig->pivot->nota<5)? "text-red-600" : "text-green-700" ; @endphp <div
                class="mb-5 {{ $color }} border-2">
                {{ $asig->id }}
    </div>
    <div class="mb-5 {{ $color }} border-2">
        {{ $asig->nombre }}
    </div>
    <div class="mb-5 {{ $color }} border-2">
        {{ $asig->pivot->nota }}

    </div>
    <div class="mb-5 {{ $color }} border-2">
        {{ $asig->pivot->created_at }}
    </div>
    <div class="mb-5 {{ $color }} border-2">
        Acciones
    </div>
    @endforeach

    </div>
    <div class="mt-8 text-right">
        <a href="{{ route('alumnos.show', $alumno) }}"
            class="bg-blue-600 hover:bg-blue-800 rounded text-white font-bold py-2 px-4 shadow">
            <i class="fas fa-backward"></i> Volver</a>
    </div>

@endsection
