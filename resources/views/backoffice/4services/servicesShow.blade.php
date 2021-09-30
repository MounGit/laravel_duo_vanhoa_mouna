@extends('backoffice.template.mainback')

@section('title')
    Montrer un service
@endsection


@section('content')
    <div>
        <section class="container">

            <div class="card" style="width: 18rem;">
                
                <div class="card-body">
                <h5 class="card-title">{{$service->titre}}</h5>
                
                <p class="card-text">{{$service->texte}}</p>
                  <div class="d-flex justify-content-center mb-5">
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