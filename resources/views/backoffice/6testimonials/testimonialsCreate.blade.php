@extends('backoffice.template.mainback')

@section('title')
    Ajoutez un témoignage
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

                <label class="my-3 fw-bold" for="nom">Nom : </label>
                <input type="text" value="{{old('nom')}}" name="nom" id="nom">

                <label class="my-3 fw-bold" for="image">Photo : </label>
                <input type="file" name="image" id="image" value="{{old('image')}}">
                
                <label class="my-3 fw-bold" for="description">Témoignage : </label>
                <textarea name="description" id="description" cols="30" rows="4">{{old('description')}}</textarea>
                {{-- <input type="text"  name="description" id="description"> --}}

                <label class="my-3 fw-bold" for="metier">Metier : </label>
                <input type="text" value="{{old('metier')}}" name="metier" id="metier">
        
                
        
                <button class="btn btn-success mt-4 w-25" type="submit">Ajouter</button>
            </form>
        </section>
    </div>
@endsection