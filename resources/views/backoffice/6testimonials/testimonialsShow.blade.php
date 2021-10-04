@extends('backoffice.template.mainback')

@section('title')
    témoignage de {{$testimonial->nom}}
@endsection


@section('content')
    <div>
        <section class="container d-flex justify-content-center">

            <div class="card" style="width: 22rem;">
                <img src="{{asset('img/'.$testimonial->image)}}" style="width: 22rem;" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{$testimonial->nom}}</h5>
                <h5 class="card-title">{{$testimonial->metier}}</h6>
                <p class="card-text">{{$testimonial->description}}</p>
                  <div class="d-flex justify-content-center my-4">
                    <a class="btn btn-warning mx-2" href="{{route('testimonials.edit', $testimonial->id)}}">Modifier</a>
                    <form action="{{route('testimonials.destroy', $testimonial->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger text-black mx-2" type="submit">Supprimer</button>
                    </form>
                </div>
                </div>
            </div>
        
        </section>
    </div>
@endsection