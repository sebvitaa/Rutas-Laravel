<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>@yield('titulo', 'Mi sitio')</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-50 text-slate-900">

  <nav class="bg-white shadow-sm">
    <div class="mx-auto flex max-w-2xl gap-6 px-6 py-4 font-medium">
      <a href="{{ route('home') }}"
        class="{{ request()->routeIs('home') ? 'text-indigo-600 font-semibold' : '' }}">Inicio</a>
      <a href="{{ route('login') }}"
        class="{{ request()->routeIs('login') ? 'text-indigo-600 font-semibold' : '' }}">Entrar</a>
      <a href="{{ route('register') }}"
        class="{{ request()->routeIs('register') ? 'text-indigo-600 font-semibold' : '' }}">Crear cuenta</a>
      <a href="{{ route('contacto') }}"
        class="{{ request()->routeIs('contacto') ? 'text-indigo-600 font-semibold' : '' }}">Contactanos</a>
    </div>
  </nav>

  <main class="mx-auto max-w-2xl px-6 py-10">
    @yield('contenido')
  </main>

  <footer class="mx-auto max-w-2xl px-6 py-6 text-sm text-slate-500">
    IIP323W · 2026
  </footer>
</body>
</html>