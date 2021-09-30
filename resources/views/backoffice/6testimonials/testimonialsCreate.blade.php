@extends('backoffice.template.mainback')

@section('title')
    Editer un témoignage
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
        
            <form class="container d-flex flex-column w-75" action="{{route('testimonials.store')}}" enctype="multipart/form-data" method="post">
                @csrf
                <label for="image">Image</label>
                <input type="file" name="image" id="image" value="{{old('image')}}">
                
                <label for="description">Description: </label>
                <input type="text" value="{{old('description')}}" name="description" id="description">

                <label for="nom">Nom: </label>
                <input type="text" value="{{old('nom')}}" name="nom" id="nom">

                <label for="metier">Metier: </label>
                <input type="text" value="{{old('metier')}}" name="metier" id="metier">
        
                
        
                <button class="btn btn-success mt-3 w-25" type="submit">Ajouter</button>
            </form>
        </section>
    </div>
@endsection