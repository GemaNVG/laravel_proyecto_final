@extends('layouts.base')
@section('title_window')
    Login - Proyecto Final
@endsection
@section('content')

    <body class="min-h-screen bg-gradient-to-br from-indigo-100 via-purple-300 to-pink-400 flex items-center justify-center">
        <div class="bg-white w-full max-w-md rounded-2xl shadow-xl p-8">

            <div class="text-center mb-8">
                <div class="mx-auto mb-3 w-10 rounded-full flex items-center justify-center">
                    <img src="{{ asset('img/fresa.png') }}" alt="">
                </div>
                <h1 class="text-2xl font-bold">Bienvenido/a</h1>
                <p class="text-slate-500 text-sm">Inicia sesión para continuar</p>
                
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
            </div>

            <form class="space-y-5" method="POST" action="{{ route('login') }}">
                @csrf
                
                <div>
                    <label class="block text-sm font-medium mb-1">Correo electrónico</label>
                    <input type="email" 
                           placeholder="correo.ejemplo@email.com" 
                           id="email" 
                           name="email" 
                           value="{{ old('email') }}" 
                           required autofocus autocomplete="username"
                           class="w-full px-4 py-2 rounded-lg border focus:outline-none focus:ring-2 focus:ring-pink-400 @error('email') border-red-500 text-red-900 @enderror" />
                    
                    @error('email')
                        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">Contraseña</label>
                    <input type="password" 
                           placeholder="••••••••" 
                           id="password" 
                           name="password" 
                           required autocomplete="current-password"
                           class="w-full px-4 py-2 rounded-lg border focus:outline-none focus:ring-2 focus:ring-pink-400 @error('password') border-red-500 @enderror" />
                    
                    @error('password')
                        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex items-center justify-between">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-pink-600 shadow-sm focus:ring-pink-500" name="remember">
                        <span class="ms-2 text-sm text-slate-600">Recuérdame</span>
                    </label>
                </div>

                <button type="submit"
                        class="w-full bg-pink-500 hover:bg-purple-500 text-white font-semibold py-2 rounded-lg transition">
                        Iniciar sesión
                </button>
            </form>

            <p class="text-center text-sm text-slate-500 mt-6">
                ¿No tienes cuenta?
                <a href="{{ route('register') }}" class="text-pink-600 font-medium hover:underline">Regístrate</a>
            </p>
            
            <div class="my-6 flex items-center gap-3">
                <hr class="flex-1">
                <span class="text-sm text-slate-400">o</span>
                <hr class="flex-1">
            </div>

            <a href="/google-auth/redirect" 
               class="w-full bg-white border border-slate-300 hover:bg-slate-50 text-slate-700 font-semibold py-2 rounded-lg transition flex items-center justify-center gap-3">
                    <span>Iniciar sesión con Google</span>
                    <div class="w-6 h-6 bg-white rounded-full flex items-center justify-center">
                        <img src="{{ asset('img/google.jpg') }}" alt="Google" class="w-full h-full object-contain">
                    </div>
            </a>

        </div>
    </body>
@endsection