@extends('layouts.base')
@section('title_window')
    Login - Proyecto Final
@endsection
@section('content')

    <body class="min-h-screen bg-gradient-to-br from-indigo-100 via-purple-300 to-pink-400 flex items-center justify-center">
        <!-- Login Card -->
        <div class="bg-white w-full max-w-md rounded-2xl shadow-xl p-8">


            <!-- Logo / Title -->
            <div class="text-center mb-8">
                <div class="mx-auto mb-3 w-10 rounded-full flex items-center justify-center"><img
                        src="{{ asset('img/fresa.png') }}" alt=""></div>
                <h1 class="text-2xl font-bold">Bienvenido/a</h1>
                <p class="text-slate-500 text-sm">Inicia sesión para continuar</p>
            </div>


            <!-- Form -->
            <form class="space-y-5">
                <div>
                    <label class="block text-sm font-medium mb-1">Correo electrónico</label>
                    <input type="email" placeholder="correo.ejemplo@email.com"
                        class="w-full px-4 py-2 rounded-lg border focus:outline-none focus:ring-2 focus:ring-pink-400" />
                </div>


                <div>
                    <label class="block text-sm font-medium mb-1">Contraseña</label>
                    <input type="password" placeholder="••••••••"
                        class="w-full px-4 py-2 rounded-lg border focus:outline-none focus:ring-2 focus:ring-pink-400" />
                </div>

                <a href="/dashboard"><button type="submit"
                        class="w-full bg-pink-500 hover:bg-purple-500 text-white font-semibold py-2 rounded-lg transition">
                        Iniciar sesión
                    </button></a>
            </form>


            <!-- Footer -->
            <p class="text-center text-sm text-slate-500 mt-6">
                ¿No tienes cuenta?
                <a href="/register" class="text-pink-600 font-medium hover:underline">Regístrate</a>
            </p>
            <div class="my-6 flex items-center gap-3">
                <hr class="flex-1">
                <span class="text-sm text-slate-400">o</span>
                <hr class="flex-1">
            </div>
            <a href="/google-auth/redirect"><button type="submit"
                class="w-full bg-pink-500 hover:bg-purple-500 text-white font-semibold py-2 rounded-lg transition">
                <div class="flex items-center justify-center gap-3">
                    <span>Iniciar sesión con Google</span>
                    <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center">
                        <img src="{{ asset('img/google.jpg') }}" alt="Google" class="w-4 h-4">
                    </div>
                </div>

            </button></a>


        </div>
    </body>
@endsection
