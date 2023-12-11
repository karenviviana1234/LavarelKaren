@extends('layouth.app')


@section('contenido')

        <div class="md:flex md:justify-center">
            <div class="md:w-96 bg-white p-6 rounded-lg shadow-xl">
                <form method="post">
                    @csrf
                    @if (session('mensaje'))

                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ session('mensaje') }} </p>
                        
                    @endif
                    <div class="mb-5">
                        <label for="email" class="mb-2 block uppercase text-black" > Email </label>
                        <input type="email" name="email" id="email" class="border p-3 w-full @error('name')
                            border-red-500
                        @enderror" placeholder="Ingrese su correo" value="{{ old('email') }}">
                        @error('email')
                        
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </p>
                            
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="password" class="mb-2 block uppercase text-black" > Password </label>
                        <input type="password" name="password" id="password" class="border p-3 w-full @error('name')
                            border-red-500
                        @enderror" placeholder="Ingrese su contraseña">
                        @error('email')
                        
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </p>
                            
                        @enderror
                    </div>
                    <button type="submit" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 bg-black text-white"> Iniciar sesión </button>
                </form>
            </div>
        </div>

@endsection