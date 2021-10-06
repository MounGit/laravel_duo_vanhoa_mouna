@extends('backoffice.template.mainback')

@section('title')
    Editer un service
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

        <form  class="d-flex flex-column w-75" enctype="multipart/form-data" action="{{ route('services.update', $service->id) }}" method="post">
            @csrf
            @method('PUT')


   
        <label class="my-3 fw-bold" for="titre">Titre: </label>
        <input type="text"  name="titre" id="titre" value="{{ $service->titre }}">

        <label class="my-3 fw-bold" for="texte">Texte: </label>
        <input type="text"  name="texte" id="texte" value="{{ $service->texte }}">

        <label class="my-3 fw-bold" for="cat">Icone: </label>
        <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="icone" >
            <option selected>
                {{-- Sélectionnez une catégorie --}}
            </option>
            <option value="bx bx-layer">pile</option>
            <option value="bx bx-tachometer">boussole</option>
            <option value="bx bx-file">document</option>
            <option value="bx bxl-dribbble">ballon</option>
            <option value="icon-camera-retro">camera</option>
            <option value="icon-flag">drapeau</option>
            <option value="icon-eur">euros</option>
            <option value="icon-windows">windows</option>
          </select>

        <button class="btn btn-success w-25 mt-4 text-dark" type="submit">Modifier</button>
        </form>
    </section>


    </div>
@endsection