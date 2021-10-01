@extends('backoffice.template.mainback')

@section('title')
    Fonctionnalités
@endsection


@section('content')
    <div>
        
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif

        <div class="container d-flex justify-content-center">
            <a class="btn btn-success mt-3 mb-5 fs-4" href="{{route('features.create')}}">Ajouter une fonctionnalité</a>
        </div>


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Titre</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($feature as $data)
                    <tr>
                        <th scope="row">{{$data->id}}</th>
                        <td>{{$data->title}}</td>
                        <td>
                            <div class="d-flex justify-content-around my-3">
                                <a class="btn btn-primary text-black" href="{{ route('features.show', $data->id) }}">Détails</a>
                                <a class="btn btn-warning mx-2" href="{{ route('features.edit', $data->id) }}">Modifier</a>
                                <form action="{{ route('features.destroy', $data->id) }}" method="post">
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
