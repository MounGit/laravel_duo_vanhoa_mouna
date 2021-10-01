@extends('backoffice.template.mainback')

@section('title')
    Footer
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
                        <th scope="col">Link 1</th>
                        <th scope="col">Link 2</th>
                        <th scope="col">Link 3</th>
                        <th scope="col">Link 4</th>
                        <th scope="col">Link 5</th>
                        
                        <th></th>
        
                    </tr>
                </thead>
                <tbody>
                    @foreach($footer as $data)
                    <tr>
                        <th scope="row">{{$data->id}}</th>
                        
                        
                        <td>{{$data->titre}}</td>
                        <td>{{$data->link1}}</td>
                        <td>{{$data->link2}}</td>
                        <td>{{$data->link3}}</td>
                        <td>{{$data->link4}}</td>
                        <td>{{$data->link5}}</td>
                        <td>
                        <div class="d-flex justify-content-around my-3">
                                        
                                        <a class="btn btn-warning" href="{{route('footerEdit', $data->id)}}">Modifier</a>
                                        
                                    </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section> 
    </div>
@endsection