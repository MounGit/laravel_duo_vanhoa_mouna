@extends('backoffice.template.mainback')

@section('title')
    Barre de navigation
@endsection


@section('content')
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <div class="d-flex justify-content-around mb-5">
            <p class="fw-bold fs-4">{{ $header[0]->name }}</p>
            <p class="fw-bold fs-4">{{ $header[0]->nav1 }} </p>
            <p class="fw-bold fs-4">{{ $header[0]->nav2 }}</p>
            <p class="fw-bold fs-4">{{ $header[0]->nav3 }}</p>
            <p class="fw-bold fs-4">{{ $header[0]->nav4 }}</p>
            <p class="fw-bold fs-4">{{ $header[0]->nav5 }}</p>
            <p class="fw-bold fs-4">{{ $header[0]->nav6 }}</p>
            <p class="fw-bold fs-4">{{ $header[0]->nav7 }}</p>
        </div>
        <div class="d-flex justify-content-center mt-4">
            @can('update', $header[0])
                <a href="{{ route('headers.edit', $header[0]->id) }}" class="btn btn-success">Modifer</a>
            @endcan
        </div>
    </div>
@endsection
