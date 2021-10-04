@extends('backoffice.template.mainback')

@section('title')
    Footer
@endsection


@section('content')
    <div>
        <section class="container">


            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif



            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Titre</th>
                        <th scope="col">Premier Lien</th>
                        <th scope="col">Deuxième Lien</th>
                        <th scope="col">Troisième Lien</th>
                        <th scope="col">Quatrième Lien</th>
                        <th scope="col">Cinquième Lien</th>

                        <th></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($footer as $data)
                        <tr>
                            <th scope="row">{{ $data->id }}</th>


                            <td>{{ $data->titre }}</td>
                            <td>{{ $data->link1 }}</td>
                            <td>{{ $data->link2 }}</td>
                            <td>{{ $data->link3 }}</td>
                            <td>{{ $data->link4 }}</td>
                            <td>{{ $data->link5 }}</td>
                            <td>
                                <div class="d-flex justify-content-around my-3">

                                    <a class="btn btn-warning" href="{{ route('footerEdit', $data->id) }}">Modifier</a>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <hr class="thin my-3">
            <div class="mt-5">
                <h2 class="text-center">Section Copyright Du Footer</h2>

                <div class="d-flex justify-content-between my-5">
                    <div class="text-center">
                        <p>{{ $footerdroite[0]->titreplus }}</< /p>
                    </div>
                    <div class="text-center">
                        <p>{{ $footerdroite[0]->description }}</p>
                    </div>
                    <div class="text-center">
                        <p>{{ $footerdroite[0]->copyright }}</p>
                    </div>

                </div>

            </div>


            <div class="d-flex justify-content-around my-3">

                <a class="btn btn-warning" href="{{ route('footerEditplus', $footerdroite[0]->id) }}">Modifier</a>

            </div>


        </section>
    </div>
@endsection
