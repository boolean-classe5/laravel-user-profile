@extends('layouts.app')

@section('content')

  <div class="container">
    <h1>Pagina profilo utente</h1>
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        @if (!empty($user->userDetail))
          <img class="card-img-top" src="{{ asset('storage/' . $user->userDetail->profile_picture) }}" alt="Immagine profilo di {{ $user->name }}">
        @else
          <p>Imposta la tua foto profilo</p>
        @endif
        <p class="card-text">
          <ul>
            <li>Nome utente: {{ $user->name }}</li>
            <li>Email: {{ $user->email }}</li>
          </ul>
        </p>
      </div>
    </div>
  </div>

@endsection
