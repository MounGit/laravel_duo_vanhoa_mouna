@extends('backoffice.template.mainback')

@section('title')
    Ajoutez un élément au portfolio
@endsection


@section('content')
    <div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="container d-flex flex-column w-75" action="{{ route('portfolios.store') }}" enctype="multipart/form-data"
            method="post">
            @csrf

            <label class="my-3 fw-bold" for="name">Nom : </label>
            <input value="{{ old('name') }}" type="text" name="name" id="name">

            <label class="my-3 fw-bold" for="url">Image : </label>
            <input type="file" name="url" id="url" value="{{ old('url') }}">

            <label class="my-3 fw-bold" for="cat">Catégorie : </label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="category" id="cat">
                <option selected>
                    {{-- Sélectionnez une catégorie --}}
                </option>
                <option value="App">App</option>
                <option value="Web">Web</option>
                <option value="Card">Card</option>
              </select>

            <button class="btn btn-success mt-3 w-25" type="submit">Ajouter</button>
        </form>
    </div>
@endsection
