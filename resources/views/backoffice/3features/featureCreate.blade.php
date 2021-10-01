@extends('backoffice.template.mainback')

@section('title')
    Ajoutez un élément aux fonctionnalités
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

        <form class="container d-flex flex-column w-75" action="{{ route('features.store') }}" enctype="multipart/form-data"
            method="post">
            @csrf

            <label class="my-3 fw-bold" for="title">Titre : </label>
            <input value="{{ old('title') }}" type="text" name="title" id="title">

            <label class="my-3 fw-bold" for="url">Image : </label>
            <input type="file" name="url" id="url" value="{{ old('url') }}">

            <label class="my-3 fw-bold" for="descr">Description : </label>
            <textarea name="description" id="descr" cols="30" rows="4">{{old('description')}}</textarea>

            <label class="my-3 fw-bold" for="det">Détails : </label>
            <div class="container d-flex flex-column">
                <textarea  name="p1" id="" cols="30" rows="1">{{old('p1')}}</textarea>
                <textarea class="my-2" name="p2" id="" cols="30" rows="1">{{old('p2')}}</textarea>
                <textarea name="p3" id="" cols="30" rows="1">{{old('p3')}}</textarea>
            </div>

            <button class="btn btn-success mt-3 w-25" type="submit">Ajouter</button>
        </form>
    </div>
@endsection
