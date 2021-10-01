@extends('backoffice.template.mainback')

@section('title')
    Modifiez la barre de navigation
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
        <form class="container d-flex flex-column w-75" action="{{ route('headers.update', $header->id) }}" method="post">
            @csrf
            @method('PUT')

            <label class="my-3" for="name">Nom : </label>
            <div class="d-flex">
                <input type="text" value="{{ $header->name }}" name="name" id="name">
            </div>

            <label class="my-3" for="">Nom des différentes sections :</label>
            <div class="d-flex flex-column container">
                <label for="sect1">Section 1 : </label>
                <input value="{{ $header->nav1 }}" type="text" name="nav1" id="sect1">

                <label for="sect2">Section 2 : </label>
                <input value="{{ $header->nav2 }}" type="text" name="nav2" id="sect2">

                <label for="sect3">Section 3 : </label>
                <input value="{{ $header->nav3 }}" type="text" name="nav3" id="sect3">

                <label for="sect4">Section 4 : </label>
                <input value="{{ $header->nav4 }}" type="text" name="nav4" id="sect4">

                <label for="sect5">Section 5 : </label>
                <input value="{{ $header->nav5 }}" type="text" name="nav5" id="sect5">

                <label for="sect6">Section 6 : </label>
                <input value="{{ $header->nav6 }}" type="text" name="nav6" id="sect6">

                <label for="sect7">Section 7 : </label>
                <input value="{{ $header->nav7 }}" type="text" name="nav7" id="sect7">
            </div>


            <button class="btn btn-success w-25 mt-5" type="submit">Modifier</button>
        </form>
    </div>
@endsection
