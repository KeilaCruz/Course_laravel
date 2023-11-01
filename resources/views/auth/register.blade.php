@extends('layouts.app')

@section('titulo')
    Registrate en DevStagram
@endsection

@section('contenido')
<div class="md:flex md:justify-center md:gap-6 md:items-center">
    <div class="md:w-4/12 p-5">
        <img src="{{ asset('img/crear_cuenta.jpg')}}" alt="img-registro-usuario">
    </div>

    <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
        <form>
            <div class="mb-5">
               <label for="name" class="md-2 block uppercase text-gray500 font-bold">Nombre</label> 
               <input
                id="name"
                name="name"
                type="text"
                placeholder="Tu nombre"
                class="border p-3 w-full rounded-lg"
               />
            </div>
            <div class="mb-5">
                <label for="username" class="md-2 block uppercase text-gray500 font-bold">Username</label> 
                <input
                 id="username"
                 name="username"
                 type="text"
                 placeholder="Tu username"
                 class="border p-3 w-full rounded-lg"
                />
             </div>
             <div class="mb-5">
                <label for="email" class="md-2 block uppercase text-gray500 font-bold">Email</label> 
                <input
                 id="email"
                 name="email"
                 type="email"
                 placeholder="Tu email de registro"
                 class="border p-3 w-full rounded-lg"
                />
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
             </div>
             <div class="mb-5">
                <label for="password_confirmation" class="md-2 block uppercase text-gray500 font-bold">Repetir Password</label> 
                <input
                 id="password_confirmation"
                 name="password_confirmation"
                 type="password"
                 placeholder="Repite tu password"
                 class="border p-3 w-full rounded-lg"
                />
             </div>
            <input type="submit" value="Crear cuenta" class="bg-sky-688 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 rounded-lg"/>
        </form>
    </div>
</div>
@endsection