@extends('layouts.app')
 
@section('titulo', 'Crear cuenta')
 
@section('contenido')
  <h1 class="text-3xl font-bold">Crear cuenta</h1>
 
  <form class="mt-6 space-y-4 rounded-2xl bg-white p-6 shadow-sm">
    <input type="text" placeholder="Nombre"
      class="w-full rounded-xl border border-slate-300 p-3">
    <input type="email" placeholder="Correo"
      class="w-full rounded-xl border border-slate-300 p-3">
    <input type="password" placeholder="Contraseña"
      class="w-full rounded-xl border border-slate-300 p-3">
 
    <button class="w-full rounded-xl bg-indigo-600 py-2.5
      font-medium text-white hover:bg-indigo-700">Crear cuenta</button>
  </form>
@endsection