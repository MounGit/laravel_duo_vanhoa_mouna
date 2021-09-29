<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/tailwind.js') }}"></script>
    <title>Document</title>
</head>

<body>

    @include('backoffice.partials.navback')



    <section class="home-section">
        <div class="text">
            <h2 class="page-section-heading text-center text-uppercase py-5">

                @yield('title')

            </h2>

            <section class="container pb-5">

                @yield('content')

            </section>
        </div>
    </section>




</body>

</html>
