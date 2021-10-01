@extends('backoffice.template.mainback')

@section('title')
    Modifiez les sections
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
        <form class="container d-flex flex-column w-75" enctype="multipart/form-data" action="{{ route('titreUpdate', $titre->id) }}" method="post">
            @csrf
            @method('PUT')


            <label class="mt-4 fw-bold" for="sect1">Première section :</label>
            <div class="container d-flex flex-column">
                <label class="my-3" for="sect1T">Titre :</label>
                <input value="{{$titre->titreheader}}" type="text" name="titreheader" id="sect1T">

                <label class="my-3" for="sect1ST">Description :</label>
                <input value="{{$titre->sous_titreheader}}" type="text" name="sous_titreheader" id="sect1ST">

                <label class="my-3" for="sect1B">Bouton :</label>
                <input value="{{$titre->boutonheader}}" type="text" name="boutonheader" id="sect1B">

                <label class="my-3" for="sect1url">Image :</label>
                <input value="{{$titre->url}}" type="file" name="url" id="sect1url">


            </div>

            <label class="mt-4 fw-bold" for="sect2">Deuxième section :</label>
            <div class="container d-flex flex-column">
                <label class="my-3" for="sect2T">Titre :</label>
                <input value="{{$titre->titreabout}}" type="text" name="titreabout" id="sect2T">

                <label class="my-3" for="sect2ST">Description :</label>
                <input value="{{$titre->sous_titreabout}}" type="text" name="sous_titreabout" id="sect2ST">

                <label class="my-3" for="sect2B">Bouton :</label>
                <input value="{{$titre->boutonabout}}" type="text" name="boutonabout" id="sect2B">
            </div>

            <label class="mt-4 fw-bold" for="sect3">Troisième section :</label>
            <div class="container d-flex flex-column">
                <label class="my-3" for="sect3T">Titre :</label>
                <input value="{{$titre->titrefeatures}}" type="text" name="titrefeatures" id="sect3T">

                <label class="my-3" for="sect3ST">Description :</label>
                <input value="{{$titre->sous_titrefeatures}}" type="text" name="sous_titrefeatures" id="sect3ST">
            </div>

            <label class="mt-4 fw-bold" for="sect4">Quatrième section :</label>
            <div class="container d-flex flex-column">
                <label class="my-3" for="sect4T">Titre :</label>
                <input value="{{$titre->titreservice}}" type="text" name="titreservice" id="sect4T">

                <label class="my-3" for="sect4ST">Description :</label>
                <input value="{{$titre->sous_titreservice}}" type="text" name="sous_titreservice" id="sect4ST">
            </div>

            <label class="mt-4 fw-bold" for="sect5">Cinquième section :</label>
            <div class="container d-flex flex-column">
                <label class="my-3" for="sect5T">Titre :</label>
                <input value="{{$titre->titreportfolio}}" type="text" name="titreportfolio" id="sect5T">

                <label class="my-3" for="sect5ST">Description :</label>
                <input value="{{$titre->sous_titreportfolio}}" type="text" name="sous_titreportfolio" id="sect5ST">
            </div>

            <label class="mt-4 fw-bold" for="sect6">Sixième section :</label>
            <div class="container d-flex flex-column">
                <label class="my-3" for="sect6T">Titre :</label>
                <input value="{{$titre->titretestimonials}}" type="text" name="titretestimonials" id="sect6T">

                <label class="my-3" for="sect6ST">Description :</label>
                <input value="{{$titre->sous_titretestimonials}}" type="text" name="sous_titretestimonials" id="sect6ST">
            </div>

            <label class="mt-4 fw-bold" for="sect7">Septième section :</label>
            <div class="container d-flex flex-column">
                <label class="my-3" for="sect7T">Titre :</label>
                <input value="{{$titre->titreteam}}" type="text" name="titreteam" id="sect7T">

                <label class="my-3" for="sect7ST">Description :</label>
                <input value="{{$titre->sous_titreteam}}" type="text" name="sous_titreteam" id="sect7ST">
            </div>

            <label class="mt-4 fw-bold" for="sect8">Huitième section :</label>
            <div class="container d-flex flex-column">
                <label class="my-3" for="sect8T">Titre :</label>
                <input value="{{$titre->titrecontact}}" type="text" name="titrecontact" id="sect8T">

                <label class="my-3" for="sect8ST">Description :</label>
                <input value="{{$titre->sous_titrecontact}}" type="text" name="sous_titrecontact" id="sect8ST">
            </div>
            
           
            <button class="btn btn-success w-25 mt-5" type="submit">Modifier</button>
        </form>
    </div>
@endsection
