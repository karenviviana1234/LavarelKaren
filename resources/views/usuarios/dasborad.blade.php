@extends('layouth.app')

@section('titulo')
    usuarios registrados
@endsection

@section('contenido')

<button type="submit" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-52 p-3 text-white rounded-lg ml-52 mb-7"> <a href="{{ route('create') }}">Registrar usuario </a></button>
<div class="w-full flex justify-center items-center">
    <table class="w-8/12">
        <thead>
            <tr class="bg-slate-400">
                <th class="border border-gray-600 px-4 py-2"> Cedula </th>
                <th class="border border-gray-600 px-4 py-2"> Nombre </th>
                <th class="border border-gray-600 px-4 py-2"> Direccion </th>
                <th class="border border-gray-600 px-4 py-2"> Telefono </th>
                <th class="border border-gray-600 px-4 py-2" colspan="2"> Acciones </th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
            <tr>
                <td class="border-b-2 px-4 py-2"> {{ $usuario->cedula }} </td>
                <td class="border-b-2 px-4 py-2"> {{ $usuario->name }} </td>
                <td class="border-b-2 px-4 py-2"> {{ $usuario->direccion }} </td>
                <td class="border-b-2 px-4 py-2"> {{ $usuario->telefono }} </td>
                <td class="border-b-2 px-4 py-2">
                    <button type="button" class="bg-green-500 border border-green-800 p-1 rounded-lg ml-5"> <a href="{{ url('usuarios/'.$usuario->cedula.'/edit') }}"> Editar </a></button>
                </td>
                <td class="border-b-2 px-4 py-2">
                    <form action="{{ route('usuarios.destroy', $usuario->cedula) }}" method="post">

                        @csrf
                        @method('DELETE')

                         <button type="submit" class="bg-red-500 border border-red-800 p-1 rounded-lg ml-1"> Eliminar </button>
                    </form>
                   
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection