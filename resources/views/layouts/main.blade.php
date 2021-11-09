
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistem Pengarsipan | {{ $title }}</title>

    <link href="{{ asset('style/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('style/css/sb-admin.css') }}" rel="stylesheet">
    <link href="{{ asset('style/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    

</head>

<body>

    <div id="wrapper">


        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a><h3>Menu</h3></a>
                    </li>
                    <li>
                        <a>........</a>
                    </li>
                    <li>
                        <a href="/"><i class="fa fa-fw fa-star"></i> Arsip</a>
                    </li>
                    <li>
                        <a href="/about"><i class="fa fa-fw fa-warning"></i> About</a>
                    </li>
               </ul>
        </nav>

        <!-- Halaman Content -->
        <div class="container-fluid">
            @yield('content')
        </div>
        <!-- End Content -->

    </div>

    <script src="{{ asset('style/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('style/js/bootstrap.min.js"></script>
    

</body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    @yield('scripts')
</html>
