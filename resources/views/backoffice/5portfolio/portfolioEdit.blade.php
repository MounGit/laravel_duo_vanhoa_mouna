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

        <form class="container d-flex flex-column w-75" action="{{ route('portfolios.update', $portfolio->id) }}" enctype="multipart/form-data"
            method="post">
            @csrf
            @method('PUT')
            <label class="my-3 fw-bold" for="name">Nom : </label>
            <input value="{{ $portfolio->name }}" type="text" name="name" id="name">

            <label class="my-3 fw-bold" for="url">Image : </label>
            <input type="file" name="url" id="url" value="{{ $portfolio->url }}">

            <label class="my-3 fw-bold" for="cat">Catégorie : </label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="category" id="cat">
                <option value="{{$portfolio->category}}" selected>{{$portfolio->category}}</option>
                <option value="app">App</option>
                <option value="web">Web</option>
                <option value="card">Card</option>
              </select>

            <button class="btn btn-success mt-3 w-25" type="submit">Modifier</button>
        </form>
    </div>
@endsection
