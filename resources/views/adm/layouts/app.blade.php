<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script>
        document.__API_URL = '{{ url('/') }}';
    </script>
    <!-- CSS ADM SIDEBAR -->
    <style>
        i.material-icons{
            margin-right: .5rem;
            margin-left: .5rem;
        }
        #sidebar {
            min-width: 25%;
            max-width: 25%;
            background: #ffffff;
            color: #333333;
            transition: all 0.3s;
            box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2);
            z-index: 1;
        }

        #sidebar ul li > a {
            color: black;
        }
        #sidebar ul li a {
            display: block;
            color: black;
            padding: 10px;
        }
        #sidebar ul li a:hover, #sidebar ul ul .active {
            background: darkgray;
        }

        #content{
            transition: all 0.3s;
            margin-left: 25%;
        }
    </style>
    @yield('style')
</head>
<body>
<div id="app">
    <!-- Sidebar -->
    @include('adm.partials.sidebar')

    <main class="" id="content">
        <!-- Navbar -->
        @include('adm.partials.header')
        @yield('content')
    </main>
</div>

<!-- Optional JavaScript -->
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/js/mdb.min.js"></script>
<script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
@yield('script')

</body>
</html>