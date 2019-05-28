<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <meta name="description" content="Description of the page">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}">
        <!-- Foundation Zurb CSS -->
        <!-- <link rel="stylesheet" href="{{ asset('css/vendor/foundation.min.css') }}"> -->
        <!-- Materialize CSS -->
        <!-- <link rel="stylesheet" href="{{ asset('css/vendor/materialize.min.css') }}"> -->
        <!-- Flat UI CSS -->
        <link rel="stylesheet" href="{{ asset('css/vendor/flat-ui.min.css') }}">
        <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{ asset('css/vendor/all.min.css') }}">
        <!-- App CSS -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/style.css') }}">
        
        <title>Liga Tari Krida Budaya @yield('title')</title>
    </head>
    <body>

        @include('layout/_nav')
        
        @yield('content')

        @include('layout/_footer')

    </body>


</html>