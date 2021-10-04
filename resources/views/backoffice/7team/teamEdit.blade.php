@extends('backoffice.template.mainback')

@section('title')
    Modifiez le profil de {{$team->nom}}
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
                action="{{ route('teams.update', $team->id) }}" method="post">
                @csrf
                @method('PUT')

                <label class="my-3 fw-bold" for="nom">Nom : </label>
                <input type="text" name="nom" id="nom" value="{{ $team->nom }}">

                <label class="my-3 fw-bold" for="image">Photo : </label>
                <input  type="file" value="{{ $team->image }}" name="image" id="image">

                <label class="my-3 fw-bold" for="metier">Métier : </label>
                <input type="text" name="metier" id="metier" value="{{ $team->metier }}">

                <button class="btn btn-success w-25 mt-5 text-dark" type="submit">Modifier</button>
            </form>
        </section>


    </div>
@endsection
