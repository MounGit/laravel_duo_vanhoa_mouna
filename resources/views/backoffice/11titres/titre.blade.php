@extends('backoffice.template.mainback')

@section('title')
    Titres et descriptions des différentes sections
@endsection


@section('content')
    <div>
        <div>8
            <h2>Première section </h2>
            <h3>{{$titre[0]->titreheader}}</h3>
            <p>{{$titre[0]->sous_titreheader}}</p>
            <p class="btn btn-primary">{{$titre[0]->boutonheader}}</p>
        </div>
        <div>
            <h2>Deuxième section </h2>
            <h3>{{$titre[0]->titreabout}}</h3>
            <p>{{$titre[0]->sous_titreabout}}</p>
            <p class="btn btn-primary">{{$titre[0]->boutonabout}}</p>
        </div>
        <div>
            <h2>Troisième section </h2>
            <h3>{{$titre[0]->titrefeatures}}</h3>
            <p>{{$titre[0]->sous_titrefeatures}}</p>
        </div>
        <div>
            <h2>Quatrième section </h2>
            <h3>{{$titre[0]->titreservice}}</h3>
            <p>{{$titre[0]->sous_titreservice}}</p>
        </div>
        <div>
            <h2>Cinquième section </h2>
            <h3>{{$titre[0]->titreportfolio}}</h3>
            <p>{{$titre[0]->sous_titreportfolio}}</p>
        </div>
        <div>
            <h2>Sixième section </h2>
            <h3>{{$titre[0]->titretestimonials}}</h3>
            <p>{{$titre[0]->sous_titretestimonials}}</p>
        </div>
        <div>
            <h2>Septième section </h2>
            <h3>{{$titre[0]->titreteam}}</h3>
            <p>{{$titre[0]->sous_titreteam}}</p>
        </div>
        <div>
            <h2>Huitième section </h2>
            <h3>{{$titre[0]->titrecontact}}</h3>
            <p>{{$titre[0]->sous_titrecontact}}</p>
        </div>
    </div>
@endsection