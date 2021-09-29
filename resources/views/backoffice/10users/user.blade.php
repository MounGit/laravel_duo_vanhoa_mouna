@extends('backoffice.template.mainback')

@section('title')
    Utilisateurs
@endsection


@section('content')
    <div>
        
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif

        <div class="container d-flex justify-content-center">
            <a class="btn btn-success mt-3 mb-5 fs-4" href="{{route('users.create')}}">Ajouter un utilisateur</a>
        </div>


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Rôle</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $data)
                    <tr>
                        <th scope="row">{{$data->id}}</th>
                        <td>{{$data->name}}</td>
                        <td>
                            @if ($data->role->name === 'admin')
                                Admin
                            @elseif ($data->role->name === 'webmaster')
                                Webmaster
                            @elseif ($data->role->name === 'editeur')
                                Editeur
                            @endif
                        </td>
                        <td>
                            <div class="d-flex justify-content-around my-3">
                                <a class="btn btn-primary text-black" href="{{ route('users.show', $data->id) }}">Détails</a>
                                <a class="btn btn-warning mx-2" href="{{ route('users.edit', $data->id) }}">Modifier</a>
                                <form action="{{ route('users.destroy', $data->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger text-black" type="submit">Supprimer</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
