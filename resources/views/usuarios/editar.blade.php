@extends('layouth.app')

@section('titulo')
    Editar usuario
@endsection

@section('contenido')

        <div class="md:flex md:justify-center">
            <div class="md:w-96 bg-white p-6 rounded-lg shadow-xl">
                <form method="post" action="{{ url('usuarios/'.$usuario->cedula) }}">
                    @csrf
                    @method('PUT')
                    
                    @if (session('mensaje'))

                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ session('mensaje') }} </p>
                        
                    @endif
                    <div class="mb-5">
                        <label for="cedula" class="mb-2 block uppercase text-gray-500" > Cedula </label>
                        <input type="number" name="cedula" id="cedula" class="border p-3 w-full rounded-lg @error('name')
                            border-red-500
                        @enderror" placeholder="Ingrese su cedula" value="{{ $usuario->cedula }}">
                        @error('cedula')
                        
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </p>
                            
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="name" class="mb-2 block uppercase text-gray-500" > Nombre </label>
                        <input type="name" name="name" id="name" class="border p-3 w-full rounded-lg @error('name')
                            border-red-500
                        @enderror" placeholder="Ingrese su nombre" value="{{ $usuario->name }}">
                        @error('name')
                        
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </p>
                            
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="direccion" class="mb-2 block uppercase text-gray-500" > Dirección </label>
                        <input type="text" name="direccion" id="direccion" class="border p-3 w-full rounded-lg @error('name')
                            border-red-500
                        @enderror" placeholder="Ingrese su direccion" value="{{ $usuario->direccion }}">
                        @error('direccion')
                        
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </p>
                            
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="telefono" class="mb-2 block uppercase text-gray-500" > Telefono </label>
                        <input type="number" name="telefono" id="telefono" class="border p-3 w-full rounded-lg @error('name')
                            border-red-500
                        @enderror" placeholder="Ingrese su telefono" value="{{ $usuario->telefono }}">
                        @error('telefono')
                        
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </p>
                            
                        @enderror
                    </div>
                    <button type="submit" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"> Actualizar usuario </button>
                </form>
            </div>
        </div>


@endsection

{{-- @extends('layouth.app')

@section('contenido')

<form action="{{ route('usuario.destroy') }}">

    @csrf
    @method('DELETE')
    
    <p> Seguro que quieres eliminar a <strong> {{ $usuario->nombre }} ? </strong> </p>

    <button type="submit" class="bg-green-500 border border-green-800 p-1 rounded-lg"> Confirmar </button>
    <button type="button" class="bg-red-500 border border-red-800 p-1 rounded-lg ml-5"> Regresar </button>

</form>

@endsection --}}