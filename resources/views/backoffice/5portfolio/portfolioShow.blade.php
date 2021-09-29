@extends('backoffice.template.mainback')

@section('title')
    Détails {{$portfolio->name}}
@endsection


@section('content')
    <div class="d-flex justify-content-center">
        <div class="card my-5" style="width: 25rem;">
            <div>
                <img class="img-fluid" style=" width: 25rem" src="{{ asset('img/' . $portfolio->url) }}">
            </div>
            <div class="card-body">
                <h4 class="card-title">{{ $portfolio->name }}</h4>
                <p class="card-text my-2">Catégorie : </p>
                <p class="card-text">{{ $portfolio->category }}</p>
                <div class="d-flex justify-content-center my-4">
                    <a class="btn btn-warning mx-2" href="{{ route('portfolios.edit', $portfolio->id) }}">Modifier</a>
                    <form action="{{ route('portfolios.destroy', $portfolio->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger text-black mx-2" type="submit">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
