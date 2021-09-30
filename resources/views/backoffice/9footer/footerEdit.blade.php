@extends('backoffice.template.mainback')

@section('title')
    Modifier Footer
@endsection


@section('content')
    <div>
        <section class="container rounded text-white py-5 ">

            @if ($errors->any())
                <div class="container alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="d-flex flex-column w-75" enctype="multipart/form-data"
                action="{{ route('footerUpdate', $footer->id) }}" method="post">
                @csrf
                @method('PUT')
                <div>
                    <div>
                        <label class="text-dark" for="titre">Titre: </label>
                        <input class="text-dark" name="titre" id="titre" value="{{ $footer->titre }}">
                    </div>
                    <div>
                        <label class="text-dark" for="link1">Link 1: </label>
                        <input class="text-dark" name="link1" id="link1" value="{{ $footer->link1 }}">
                    </div>
                    <div>
                        <label class="text-dark" for="link2">Link 2: </label>
                        <input class="text-dark" name="link2" id="link2" value="{{ $footer->link2 }}">
                    </div>
                    <div>
                        <label class="text-dark" for="link3">Link 3: </label>
                        <input class="text-dark" name="link3" id="link3" value="{{ $footer->link3 }}">
                    </div>
                    <div>
                        <label class="text-dark" for="link4">Link 4: </label>
                        <input class="text-dark" name="link4" id="link4" value="{{ $footer->link4 }}">
                    </div>
                    <div>
                        <label class="text-dark" for="link5">Link 5: </label>
                        <input class="text-dark" name="link5" id="link5" value="{{ $footer->link5 }}">
                    </div>
                    
                    <button class="btn btn-success w-25 mt-3 text-dark" type="submit">Modifier</button>
                </div>
            </form>
        </section>
    </div>
@endsection
