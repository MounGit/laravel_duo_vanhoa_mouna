@extends('backoffice.template.mainback')

@section('title')
    services
@endsection


@section('content')
    <div>
        <section class="container">


            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif
        
            <div class="container d-flex justify-content-center">
                <a class="btn btn-success mt-3 mb-5 fs-4" href="{{route('services.create')}}">Ajouter un nouveau Service</a>
            </div>
        
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Titre</th>
                        <th scope="col">Texte</th>
                        
                        <th></th>
        
                    </tr>
                </thead>
                <tbody>
                    @foreach($service as $data)
                    <tr>
                        <th scope="row">{{$data->id}}</th>
                        
                        <td>{{$data->titre}}</td>
                        <td>{{$data->texte}}</td>
                        
                        <td>
                        <div class="d-flex justify-content-around my-3">
                                        <a class="btn btn-primary text-black" href="{{route('services.show', $data->id)}}">Détails</a>
                                        <a class="btn btn-warning" href="{{route('services.edit', $data->id)}}">Modifier</a>
                                        <form action="{{route('services.destroy', $data->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger text-black" type="submit">Supprimer</button>
                                        </form>
                                    </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section> 
    </div>
@endsection