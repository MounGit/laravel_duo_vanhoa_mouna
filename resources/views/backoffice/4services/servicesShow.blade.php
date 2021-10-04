@extends('backoffice.template.mainback')

@section('title')
    détails service {{$service->titre}}
@endsection


@section('content')
    <div>
        <section class="container d-flex justify-content-center">

            <div class="card" style="width: 20rem;">
                
                <div class="card-body">
                <h5 class="card-title mb-3">{{$service->titre}}</h5>
                
                <p class="card-text">{{$service->texte}}</p>
                  <div class="d-flex justify-content-center my-4">
                    <a class="btn btn-warning mx-2" href="{{route('services.edit', $service->id)}}">Modifier</a>
                    <form action="{{route('services.destroy', $service->id)}}" method="post">
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