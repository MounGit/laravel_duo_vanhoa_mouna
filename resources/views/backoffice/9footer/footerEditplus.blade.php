@extends('backoffice.template.mainback')

@section('title')
    Modifiez le footer
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
                action="{{ route('footerUpdateDroite', $footerdroite->id) }}" method="post">
                @csrf
                @method('PUT')
                <label class="my-3 fw-bold"   for="titreplus">Titre Newsletter: </label>
                <input  type="text" name="titreplus" id="titreplus" value="{{ $footerdroite->titreplus }}">

                <label class="my-3 fw-bold"  for="description">Description: </label>
                <input type="text" name="description" id="description" value="{{ $footerdroite->description }}">

                <label class="my-3 fw-bold"  for="copyright">Copyright: </label>
                <input type="text" name="copyright" id="copyright" value="{{ $footerdroite->copyright }}">

                @can('adminweb')
                    <button class="btn btn-success w-25 mt-5 text-dark" type="submit">Modifier</button>
                @endcan

    </div>
    </form>
    </section>
    </div>
@endsection
