@extends('backoffice.template.mainback')

@section('title')
    Modifiez les données de contact
@endsection


@section('content')
    <div>
        @if ($errors->any())
            <div class="container alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="container d-flex flex-column w-75" action="{{ route('contacts.update', $contact->id) }}" method="post">
            @csrf
            @method('PUT')

            <label class="my-3 fw-bold"for="address">Adresse : </label>
            <input type="text" value="{{ $contact->address }}" name="address" id="address">

            <label class="my-3 fw-bold" for="">Adresses email : </label>
            <div class="container d-flex flex-column">
                <input class="mb-2" value="{{$contact->email1}}" type="text" name="email1" id="">
                <input value="{{$contact->email2}}" type="text" name="email2" id="">
            </div>

            <label class="my-3 fw-bold" for="">Numéros de téléphone : </label>
            <div class="container d-flex flex-column">
                <input class="mb-2" value="{{$contact->phone1}}" type="text" name="phone1" id="">
                <input value="{{$contact->phone2}}" type="text" name="phone2" id="">
            </div>
        
            <button class="btn btn-success w-25 mt-5" type="submit">Modifier</button>
        </form>
    </div>
@endsection
