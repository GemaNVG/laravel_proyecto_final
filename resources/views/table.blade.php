@extends('layouts.dashboard')
@section('content-dashboard')

      <section class="bg-white rounded-xl shadow p-6">
        <h2 class="text-lg font-semibold mb-4 text-purple-700">Usuarios</h2>
        <div class="overflow-x-auto">
          <table class="w-full text-sm">
            <thead class="text-left border-b text-pink-700">
              <tr>
                <th class="py-2">Nombre</th>
                <th>Email</th>
                <th>Timestamps</th>
              </tr>
            </thead>
            <tbody class="divide-y text-black">
              @foreach($user as $user)
              <tr>
                <td class="py-2">{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </section>
@endsection