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
                action="{{ route('footerUpdateDroite', $footerdroite->id) }}" method="post">
                @csrf
                @method('PUT')
                <div>
                    
                    <div>
                        <label class="text-dark" for="titreplus">Titre plus: </label>
                        <input class="text-dark" name="titreplus" id="titreplus" value="{{ $footerdroite->titreplus }}">
                    </div>
                    <div>
                        <label class="text-dark" for="description">Description: </label>
                        <input class="text-dark" name="description" id="description" value="{{ $footerdroite->description }}">
                    </div>
                    <div>
                        <label class="text-dark" for="copyright">Copyright: </label>
                        <input class="text-dark" name="copyright" id="copyright" value="{{ $footerdroite->copyright }}">
                    </div>
                    @can('adminweb')
                    <button class="btn btn-success w-25 mt-3 text-dark" type="submit">Modifier</button>
                    @endcan
                    
                </div>
            </form>
        </section>
    </div>
@endsection
