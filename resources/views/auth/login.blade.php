@extends('layouts.app')

@section('titulo')
    Iniciar sesión en DevStagram
@endsection

@section('contenido')
<div class="md:flex md:justify-center md:gap-6 md:items-center">
    <div class="md:w-4/12 p-5">
        <img src="{{ asset('img/crear_cuenta.jpg')}}" alt="img-login-usuario">
    </div>

    <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
        <form method="POST" action="{{route('login')}}" novalidate>
            @csrf
            
            @if(session('mensaje'))
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ session('mensaje') }}</p>
            @endif
            
             <div class="mb-5">
                <label for="email" class="md-2 block uppercase text-gray500 font-bold">Email</label> 
                <input
                 id="email"
                 name="email"
                 type="email"
                 placeholder="Tu email de registro"
                 class="border p-3 w-full rounded-lg"
                />
                @error('email')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
              @enderror
             </div>
             <div class="mb-5">
                <label for="password" class="md-2 block uppercase text-gray500 font-bold">Password</label> 
                <input
                 id="password"
                 name="password"
                 type="password"
                 placeholder="Password de Registro"
                 class="border p-3 w-full rounded-lg"
                />
                @error('password')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
              @enderror
             </div>

            <input type="submit" value="Iniciar sesion" class="bg-sky-688 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 rounded-lg"/>
        </form>
    </div>
</div>
@endsection