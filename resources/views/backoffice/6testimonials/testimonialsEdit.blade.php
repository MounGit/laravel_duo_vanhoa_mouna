@extends('backoffice.template.mainback')

@section('title')
    Editer un témoignage
@endsection


@section('content')
    <div>
        




    <section class="container rounded text-white py-5 ">

        @if ($errors->any())
        <div class="container alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <form  class="d-flex flex-column w-75" enctype="multipart/form-data" action="{{ route('testimonials.update', $testimonial->id) }}" method="post">
            @csrf
            @method('PUT')


    <div>
    
    
    
    
    <div class="d-flex">
        <label class="text-dark p-2" for="image">Image: </label>
        <input class="text-dark" type="file" value="{{$testimonial->image}}" name="image" id="image">
    </div> 
    <div>   
        <label class="text-dark" for="description">Description: </label>
        <input class="text-dark" name="description" id="description" value="{{ $testimonial->description }}">
    </div>
    <div>
        <label class="text-dark" for="nom">Nom: </label>
        <input class="text-dark" name="nom" id="nom" value="{{ $testimonial->nom }}">
    </div>
    <div>
        <label class="text-dark" for="metier">Metier: </label>
        <input class="text-dark" name="metier" id="metier" value="{{ $testimonial->metier }}">
    </div>
            <button class="btn btn-success w-25 mt-3 text-dark" type="submit">Modifier</button>
        </form>
    </section>


    </div>
@endsection