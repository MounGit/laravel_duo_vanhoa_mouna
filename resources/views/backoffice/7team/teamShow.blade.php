@extends('backoffice.template.mainback')

@section('title')
    Montrer Teams
@endsection


@section('content')
    <div>
        <section class="container">

            <div class="card" style="width: 18rem;">
                <img src="{{asset('img/'.$team->image)}}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{$team->nom}}</h5>
                <h5 class="card-title">{{$team->metier}}</h6>
                
                  <div class="d-flex justify-content-center mb-5">
                    <a class="btn btn-warning mx-2" href="{{route('teams.edit', $team->id)}}">Modifier</a>
                    <form action="{{route('teams.destroy', $team->id)}}" method="post">
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