@extends('backoffice.template.mainback')

@section('title')
    Détails fonctionnalités
@endsection


@section('content')
    <div class="d-flex justify-content-center">
        <div class="card my-5" style="width: 30rem;">
            <div>
                <img class="img-fluid" style=" width: 30rem" src="{{ asset('img/' . $feature->url) }}">
            </div>
            <div class="card-body">
                <h4 class="card-title">{{ $feature->title }}</h4>
                <p class="card-text my-2">Description : </p>
                <p class="card-text">{{ $feature->description }}</p>
                <ul>
                    <li>{{$feature->p1}}</li>
                    <li>{{$feature->p2}}</li>
                    <li>{{$feature->p3}}</li>
                </ul>
                <div class="d-flex justify-content-center my-4">
                    <a class="btn btn-warning mx-2" href="{{ route('features.edit', $feature->id) }}">Modifier</a>
                    <form action="{{ route('features.destroy', $feature->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger text-black mx-2" type="submit">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
