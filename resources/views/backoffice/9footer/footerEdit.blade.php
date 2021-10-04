@extends('backoffice.template.mainback')

@section('title')
    Modifiez le Footer
@endsection


@section('content')
    <div>
        <section class="container py-5 ">

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
           
                        <label class="my-3 fw-bold" for="titre">Titre : </label>
                        <input type="text" name="titre" id="titre" value="{{ $footer->titre }}">
                
                        <label class="my-3 fw-bold" for="link1">Premier lien : </label>
                        <input type="text" name="link1" id="link1" value="{{ $footer->link1 }}">
                
                        <label class="my-3 fw-bold" for="link2">Deuxième lien : </label>
                        <input type="text" name="link2" id="link2" value="{{ $footer->link2 }}">
                    
                        <label class="my-3 fw-bold" for="link3">Troisième lien : </label>
                        <input type="text" name="link3" id="link3" value="{{ $footer->link3 }}">
               
                        <label class="my-3 fw-bold" for="link4">Quatrième lien : </label>
                        <input type="text" name="link4" id="link4" value="{{ $footer->link4 }}">
         
                        <label class="my-3 fw-bold" for="link5">Cinquième lien : </label>
                        <input type="text"name="link5" id="link5" value="{{ $footer->link5 }}">
  
                    
                    
                    <button class="btn btn-success w-25 mt-5 text-dark" type="submit">Modifier</button>
                </div>
            </form>
        </section>
    </div>
@endsection
