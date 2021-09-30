@extends('backoffice.template.mainback')

@section('title')
    Ajoutez un utilisateur
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

        <form class="container d-flex flex-column w-75" action="{{route('users.store')}}" method="post">
            @csrf

            <label class="my-3 fw-bold" for="name">Nom complet : </label>
            <input value="{{old('name')}}" type="text" name="name" id="name">

            <label class="my-3 fw-bold" for="email">Adresse email : </label>
            <input value="{{old('email')}}" type="text" name="email" id="email">

            <label class="my-3 fw-bold" for="password">Mot de passe : </label>
            <input value="{{old('password')}}" type="password" name="password" id="password">


            <label class="my-3 fw-bold" for="role">Rôle : </label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="role_id" id="role">
                <option selected>Sélectionnez un rôle</option>
            @foreach ($role as $data)
              <option value="{{$data->id}}">{{$data->name}}</option>
          @endforeach
        </select>

            <button class="btn btn-success mt-3 w-25" type="submit">Ajouter</button>
        </form>
    </div>
@endsection
