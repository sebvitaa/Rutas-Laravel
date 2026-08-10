@extends('layouts.app')
 
@section('titulo', 'Entrar')
 
@section('contenido')
  <h1 class="text-3xl font-bold">Entrar</h1>
 
  <form class="mt-6 space-y-4 rounded-2xl bg-white p-6 shadow-sm">
    <input type="email" placeholder="Correo"
      class="w-full rounded-xl border border-slate-300 p-3">
    <input type="password" placeholder="Contraseña"
      class="w-full rounded-xl border border-slate-300 p-3">
