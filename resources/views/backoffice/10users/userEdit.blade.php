@extends('backoffice.template.mainback')

@section('title')
    Modifier les données de {{ $user->name }}
@endsection


@section('content')
    <div>
        @if ($errors->any())
            <div class="container alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="container d-flex flex-column w-75" action="{{ route('users.update', $user->id) }}" method="post">
            @csrf
            @method('PUT')

            <label class="my-3 fw-bold" for="name">Nom complet : </label>
            <input value="{{ $user->name }}" type="text" name="name" id="name">

            <label class="my-3 fw-bold" for="email">Adresse email : </label>
            <input value="{{ $user->email }}" type="text" name="email" id="email">

            <label class="my-3 fw-bold" for="password">Mot de passe : </label>
            <input value="{{ $user->password }}" type="text" name="password" id="password">


            <label class="my-3 fw-bold" for="role">Rôle : </label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="role_id" id="role">
                <option selected value="{{$user->role_id}}">{{$user->role->name}}</option>
                {{-- <option selected>Sélectionnez un rôle</option> --}}
                    <option value="1">Admin</option>
                    <option value="2">Webmaster</option>
                    <option value="3">Editeur</option>
                
            </select>

            <button class="btn btn-success mt-3 w-25" type="submit">Modifier</button>
        </form>
    </div>
@endsection
