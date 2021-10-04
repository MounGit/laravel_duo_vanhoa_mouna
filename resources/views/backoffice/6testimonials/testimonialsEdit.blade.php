@extends('backoffice.template.mainback')

@section('title')
    Modifiez le témoignage de {{$testimonial->nom}}
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
                action="{{ route('testimonials.update', $testimonial->id) }}" method="post">
                @csrf
                @method('PUT')

                <label class="my-3 fw-bold" for="nom">Nom : </label>
                <input type="text"  name="nom" id="nom" value="{{ $testimonial->nom }}">

                <label class="my-3 fw-bold" for="image">Photo: </label>
                <input  type="file" value="{{ $testimonial->image }}" name="image" id="image">

                <label class="my-3 fw-bold"for="description">Témoignage : </label>
                {{-- <input type="text" name="description" id="description" value="{{ $testimonial->description }}"> --}}
                <textarea name="description" id="description" cols="30" rows="4">{{$testimonial->description}}</textarea>

                <label class="my-3 fw-bold"  for="metier">Métier : </label>
                <input type="text"  name="metier" id="metier" value="{{ $testimonial->metier }}">

                <button class="btn btn-success w-25 mt-5 text-dark" type="submit">Modifier</button>
            </form>
        </section>


    </div>
@endsection
