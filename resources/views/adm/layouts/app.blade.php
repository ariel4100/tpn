<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hello, world!</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    @yield('style')
    <style>
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
        #sidebar ul li ul li a {
            background: #fff;
            padding-left: 10px;
        }
    </style>
</head>
<body>
<div id="app">
    <!-- Sidebar -->
    <div class="conta iner-fluid">
        <div class="ro w">
            <nav id="sidebar" class="col-m d-3 " style="height: 100vh; background-color: #fff; width: 300px; box-shadow: 0px 0px 2px black">
                @include('adm.partials.header')
            </nav>

            <main class=" col-md-9">
                @yield('content')
            </main>
        </div>
    </div>

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
@yield('style')
<script>

</script>
</body>
</html>