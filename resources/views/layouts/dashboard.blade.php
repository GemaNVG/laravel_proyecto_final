@extends('layouts.base')
@section('title_window')
    Dashboard - Logeado
@endsection
@section('content')

    <body class="bg-slate-100 text-slate-800 min-h-screen">
        <div class="flex min-h-screen">

            <!-- Sidebar -->
            <aside class="w-64 bg-pink-500 shadow-lg hidden md:flex flex-col text-white">
                <div class="p-6 text-xl font-bold text-white">Proyecto Final</div>
                <nav class="flex-1 px-4 space-y-2 text-white">
                    <a href="/dashboard" class="block px-4 py-2 rounded-lg hover:bg-purple-700">Usuarios</a>
                    <hr>
                    <a href="/report" class="block px-4 py-2 rounded-lg hover:bg-purple-700">Reportes</a>
                </nav>
                <div class="p-4 text-sm text-slate-500 text-white">© 2025</div>
            </aside>

            <!-- Main content -->
            <main class="flex-1 p-6">

                <!-- Header -->
                <header class="flex items-center justify-between mb-6">
                    <h1 class="text-2xl font-bold text-pink-700">Dashboard para usuarios logeados</h1>
                    <div class="flex items-center gap-4">
                        <a href="/"><button type="submit"
                        class="w-full bg-pink-500 hover:bg-purple-500 text-white font-semibold py-2 rounded-lg transition">Cerrar sesión</button></a>
                        <div class="mx-auto mb-3 w-15 rounded-full flex items-center justify-center"><img
                        src="{{ asset('img/fresa.png') }}" alt=""></div>
                    </div>
                </header>

                @yield('content-dashboard')
            </main>
        </div>
    </body>
@endsection
