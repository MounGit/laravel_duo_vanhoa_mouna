@extends('backoffice.template.mainback')

@section('title')
    Témoignages
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
                <a class="btn btn-success mt-3 mb-5 fs-4" href="{{route('testimonials.create')}}">Ajouter un nouveau Témoignage</a>
            </div>
        
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        {{-- <th scope="col">Image</th> --}}
                        <th scope="col">Nom</th>
                        <th scope="col">Témoignage</th>
                        <th scope="col">Metier</th>
                        <th></th>
        
                    </tr>
                </thead>
                <tbody>
                    @foreach($testimonial as $data)
                    <tr>
                        <th scope="row">{{$data->id}}</th>
                        {{-- <th scope="row"><img src="{{ asset("img/" . $data->image) }}" alt=""></th> --}}
                        <td>{{$data->nom}}</td>
                        <td>{{$data->description}}</td>
                        <td>{{$data->metier}}</td>
                        <td>
                        <div class="d-flex justify-content-around my-3">
                                        <a class="btn btn-primary text-black" href="{{route('testimonials.show', $data->id)}}">Détails</a>
                                        <a class="btn btn-warning mx-2" href="{{route('testimonials.edit', $data->id)}}">Modifier</a>
                                        <form action="{{route('testimonials.destroy', $data->id)}}" method="post">
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