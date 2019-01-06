<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="landingpage/plugins/images/favicon.png">
    <title>HRM - is a responsive admin template</title>
    <!-- Bootstrap Core CSS -->
    <link href="landingpage/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="landingpage/demos/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="landingpage/plugins/bower_components/Animatedbg/css/component.css" />
    <!-- animation CSS -->
    <link href="landingpage/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="landingpage/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="landingpage/css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="">
    <!-- Preloader -->
    <div id="wrapper">
        @include('pantalla._cabecera')

        @yield('content')
        <!-- Row -->
        <div class="row">
            <div class="col-md-12">
                <div class="p-20">
                    <center> Servicios Medicos 2018 - 2019 <a href="http://localhost/consultaext/public/data">Pemex</a></center>
                </div>
            </div>
        </div>
        <!-- /Row -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="ampleadmin/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="ampleadmin/bootstrap/dist/js/bootstrap.min.js"></script>
    <!--Style Switcher -->
    <script src="ampleadmin/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>