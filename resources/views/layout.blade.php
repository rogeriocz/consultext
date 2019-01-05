<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../demos/plugins/images/favicon.png">
    <title>Triage - Urgencias</title>
    <!-- Bootstrap Core CSS -->
    <link href="landingpage/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="landingpage/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="landingpage/bower_components/Animatedbg/css/component.css" />
    <!-- animation CSS -->
    <link href="landingpage/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="landingpage/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="landingpage/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Tu padre, unico y verdadero, Sr. Robot. -->
 <meta HTTP-EQUIV="REFRESH" CONTENT="20;URL=http://localhost/consultaext/public/data">
</head>

<body class="">
    <!-- Preloader -->
    <div id="wrapper">
        
       
    @yield('content')
                
           
        <!-- /Row -->
        <!-- Row -->
        
        <div class="row">
            <div class="col-md-12">
                <div class="p-20">
                    <center> Hospital Regional Minatitlan<a href="#">PEMEX</a></center>
                </div>
            </div>
        </div>
        <!-- /Row -->
    </div>

    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../demos/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!--Style Switcher -->
    <script src="../ampleadmin-html/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>

    <script>
var meses = new Array ("ENERO","FEBRERO","MARZO","ABRIL","MAYO","JUNIO","JULIO","AGOSTO","SEPTIEMBRE","OCTUBRE","NOVIEMBRE","DICIEMBRE");
var diasSemana = new Array("DOMINGO","LUNES","MARTES","MIERCOLES","JUEVES","VIERNES","SABADO");
var f=new Date();
document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " DE " + meses[f.getMonth()] + " DE " + f.getFullYear());
</script>

 <script language="JavaScript" type="text/javascript">
    function show5(){
        if (!document.layers&&!document.all&&!document.getElementById)
        return
         var Digital=new Date()
         var hours=Digital.getHours()
         var minutes=Digital.getMinutes()
         var seconds=Digital.getSeconds()
        var dn="PM"
        if (hours<12)
        dn="AM"
        if (hours>12)
        hours=hours-12
        if (hours==0)
        hours=12
         if (minutes<=9)
         minutes="0"+minutes
         if (seconds<=9)
         seconds="0"+seconds
        //change font size here to your desire
        myclock="<font size='6' face='Tahoma'>"+hours+":"+minutes+":"
         +seconds+" "+dn+".</font>"
        if (document.layers){
        document.layers.liveclock.document.write(myclock)
        document.layers.liveclock.document.close()
        }
        else if (document.all)
        liveclock.innerHTML=myclock
        else if (document.getElementById)
        document.getElementById("liveclock").innerHTML=myclock
        setTimeout("show5()",1000)
         }
        window.onload=show5
         //-->
     </script>

</body>

</html>