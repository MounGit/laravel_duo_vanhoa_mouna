@extends('backoffice.template.mainback')

@section('title')
    à propos
@endsection


@section('content')
    <div>
        <section class="container">


            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif
        
            
        
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
                    @foreach($about as $data)
                    <tr>
                        <th scope="row">{{$data->id}}</th>
                        
                        
                        <td>{{$data->titre}}</td>
                        <td>{{$data->texte}}</td>
                        <td>
                        <div class="d-flex justify-content-around my-3">
                                        @can('adminweb')
                                        <a class="btn btn-warning" href="{{route('aboutEdit', $data->id)}}">Modifier</a>  
                                        @endcan
                                        
                                        
                                    </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section> 
    </div>
@endsection