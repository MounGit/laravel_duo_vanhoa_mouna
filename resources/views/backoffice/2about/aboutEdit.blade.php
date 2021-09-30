@extends('backoffice.template.mainback')

@section('title')
    Modifier About
@endsection


@section('content')
    <div>
        <section class="container rounded text-white py-5 ">

            @if ($errors->any())
                <div class="container alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="d-flex flex-column w-75" enctype="multipart/form-data"
                action="{{ route('aboutUpdate', $about->id) }}" method="post">
                @csrf
                @method('PUT')
                <div>
                    <div>
                        <label class="text-dark" for="titre">Titre: </label>
                        <input class="text-dark" name="titre" id="titre" value="{{ $about->titre }}">
                    </div>
                    <div>
                        <label class="text-dark" for="texte">Texte: </label>
                        <input class="text-dark" name="texte" id="texte" value="{{ $about->texte }}">
                    </div>
                    <button class="btn btn-success w-25 mt-3 text-dark" type="submit">Modifier</button>
                </div>
            </form>
        </section>
    </div>
@endsection
