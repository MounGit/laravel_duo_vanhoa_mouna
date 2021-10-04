@extends('backoffice.template.mainback')

@section('title')
    Modifiez la section à propos
@endsection


@section('content')
    <div>
        <section class="container py-5 ">

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

                <label class="my-3 fw-bold" for="titre">Titre: </label>
                <input type="text"  name="titre" id="titre" value="{{ $about->titre }}">


                <label class="my-3 fw-bold" for="texte">Texte: </label>
                <input type="text"  name="texte" id="texte" value="{{ $about->texte }}">

                <button class="btn btn-success w-25 mt-3 text-dark" type="submit">Modifier</button>

            </form>
        </section>
    </div>
@endsection
