@extends('layouth.app')



@section('contenido')

<button type="submit" class="bg-sky-600 hover:bg-sky-700 transition-colors bg-black cursor-pointer uppercase font-bold w-52 p-3 text-white ml-52 mb-7"> <a href="{{ route('create') }}">Registrar usuario </a></button>
<div class="w-full flex justify-center items-center">
    <table class="w-8/12">
        <thead>
            <tr>
                <th class="border border-black px-4 py-2"> Cedula </th>
                <th class="border border-black px-4 py-2"> Nombre </th>
                <th class="border border-black px-4 py-2"> Direccion </th>
                <th class="border border-black px-4 py-2"> Telefono </th>
                <th class="border border-black px-4 py-2" colspan="2"> Acciones </th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
            <tr class="border-black border">
                <td class="px-4 py-2" > {{ $usuario->cedula }} </td>
                <td class="px-4 py-2"> {{ $usuario->name }} </td>
                <td class="px-4 py-2"> {{ $usuario->direccion }} </td>
                <td class="px-4 py-2"> {{ $usuario->telefono }} </td>
                <td class="px-4 py-2">
                    <button type="button" class="bg-black  text-white  p-1  ml-5"> <a href="{{ url('usuarios/'.$usuario->cedula.'/edit') }}"> Editar </a></button>
                </td>
                <td class="border-b-2 px-4 py-2">
                    <form action="{{ route('usuarios.destroy', $usuario->cedula) }}" method="post">

                        @csrf
                        @method('DELETE')

                         <button type="submit" class="bg-red-500 border-red-800 p-1 ml-1"> Eliminar </button>
                    </form>
                   
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection