@extends('backoffice.template.mainback')

@section('title')
    portfolio
@endsection


@section('content')
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <div class="container d-flex justify-content-center">
            <a class="btn btn-success mt-3 mb-5 fs-4" href="{{ route('portfolios.create') }}">Ajouter un élément au
                portfolio</a>
        </div>
        <div class="row justify-content-center">

            @foreach ($portfolio as $item)

                <div class="col-md-6 col-lg-4 mb-5 p-4 pb-0 m-1 bg-secondary rounded">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid" style="height: 250px; width: 340px" src="{{ asset('img/' . $item->url) }}"
                            alt="..." />
                    </div>
                    <div class="d-flex justify-content-around my-3">
                        <a class="btn btn-primary text-black" href="{{ route('portfolios.show', $item->id) }}">Détails</a>
                        <a class="btn btn-warning" href="{{ route('portfolios.edit', $item->id) }}">Modifier</a>
                        <form action="{{ route('portfolios.destroy', $item->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger text-black" type="submit">Supprimer</button>
                        </form>
                    </div>
                </div>

            @endforeach

        </div>
    </div>

@endsection
