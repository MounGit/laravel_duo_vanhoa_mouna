@extends('backoffice.template.mainback')

@section('title')
    Détails {{$user->name}}
@endsection


@section('content')
    <div class="d-flex justify-content-center">
        <div class="card my-5" style="width: 25rem;">
            <div class="card-body">
                <h4 class="card-title">{{ $user->name }}</h4>
                <h5 class="card-text text-uppercase my-2">{{ $user->role->name }}</h5>
                <p class="card-text my-2">Email : </p>
                <p class="card-text">{{ $user->email }}</p>
                <p class="card-text my-2">Mot de passe : </p>
                <p class="card-text">{{ $user->password }}</p>

                <div class="d-flex justify-content-center my-4">
                    <a class="btn btn-warning mx-2" href="{{ route('users.edit', $user->id) }}">Modifier</a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger text-black mx-2" type="submit">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
