@extends('backoffice.template.mainback')

@section('title')
    ajoutez un service
@endsection


@section('content')
    <div>
       


        <section class="container">

            @if ($errors->any())
                <div class="container alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        
            <form class="container d-flex flex-column w-75" action="{{route('services.store')}}" enctype="multipart/form-data" method="post">
                @csrf
                
                
                <label class="my-3 fw-bold" for="titre">Titre: </label>
                <input type="text" value="{{old('titre')}}" name="titre" id="titre">

                <label class="my-3 fw-bold" for="texte">Texte: </label>
                <input type="text" value="{{old('texte')}}" name="texte" id="texte">

                
        
                
        
                <button class="btn btn-success mt-5 w-25" type="submit">Ajouter</button>
            </form>
        </section>
    </div>
@endsection