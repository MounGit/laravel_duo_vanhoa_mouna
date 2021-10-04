@extends('backoffice.template.mainback')

@section('title')
    Ajoutez un membre à l'équipe
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
        
            <form class="container d-flex flex-column w-75" action="{{route('teams.store')}}" enctype="multipart/form-data" method="post">
                @csrf

                <label for="nom">Nom : </label>
                <input type="text" value="{{old('nom')}}" name="nom" id="nom">

                <label for="image">Photo : </label>
                <input type="file" name="image" id="image" value="{{old('image')}}">

                <label for="metier">Métier : </label>
                <input type="text" value="{{old('metier')}}" name="metier" id="metier">
        
                
        
                <button class="btn btn-success mt-3 w-25" type="submit">Ajouter</button>
            </form>
        </section>
    </div>
@endsection