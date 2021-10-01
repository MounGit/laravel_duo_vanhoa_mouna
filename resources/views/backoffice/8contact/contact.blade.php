@extends('backoffice.template.mainback')

@section('title')
    Données Contact
@endsection


@section('content')
    
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <div class="d-flex justify-content-between my-5">
        <div class="text-center">
            <h2>Adresse</h2>
            <p>{{$contact[0]->address}}</p>
        </div>
        <div class="text-center">
            <h2>Adresses email</h2>
            <p>{{$contact[0]->email1}}</p>
            <p>{{$contact[0]->email2}}</p>
        </div>
        <div class="text-center">
            <h2>Numéros de téléphone</h2>
            <p>{{$contact[0]->email1}}</p>
            <p>{{$contact[0]->email2}}</p>
        </div>

    </div>
        <div class="d-flex justify-content-center mt-4">
            <a href="{{ route('contacts.edit', $contact[0]->id) }}" class="btn btn-success">Modifer</a>
        </div>
@endsection