<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="fr"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="fr"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="fr"> <![endif]-->
<!--[if gt IE 8]> <html class="no-js" lang="fr"> <![endif]-->
<html>
<META HTTP-EQUIV="REFRESH" CONTENT="10;URL=index.htm">
<form action="index.htm" method="post">
<br>
<input style="background-color: #4EB24D " type="submit" value="Volver" class="crear">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Gestor de bases de datos EGF</title>
		<!--BEGIN OF TERMS OF USE. DO NOT EDIT OR DELETE THESE LINES. IF YOU EDIT OR DELETE THESE LINES AN ALERT MESSAGE MAY APPEAR WHEN TEMPLATE WILL BE ONLINE-->
<style>#free-flash-header a,#free-flash-header a:hover {color:#363636;}#free-flash-header a:hover {text-decoration:none}</style>
<!--END OF TERMS OF USE-->

		<!-- Bootstrap -->
		<link href="css/reset.css" rel="stylesheet" type="text/css" media="all">
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
		<link href="css/font.css" rel="stylesheet" type="text/css" media="all">
		<link href="css/mobile.css" rel="stylesheet" type="text/css" media="all">
                <link href="css/style2.css" rel="stylesheet" type="text/css" media="all">
		<!-- end Bootstrap -->

		<link href='http://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,900,900italic,300italic,300,100italic,100' rel='stylesheet' type='text/css'>

		<!-- LightBox -->
		<link href="css/lightbox/vlightbox.css" rel="stylesheet" type="text/css" media="all">
		<link href="css/lightbox/style-gallery.css" rel="stylesheet" type="text/css" media="all">
		<link href="css/lightbox/visuallightbox.css" rel="stylesheet" type="text/css" media="all">
		<link rel="stylesheet" type="text/css" href="css/lightbox/style.css" />
		<!-- end LightBox -->


		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
			

	</head>

<body class="body">
    
<?php
$username = $_POST['username'];
$hosted = $_POST['host'];

    
    function Conectarse(){

        if (!($conexion=mysql_connect("localhost","root"))){
         echo "Error al conectarse a la base de datos.";
         }
        if (!mysql_select_db("mysql",$conexion)){
        echo "Error seleccionando la base de datos.";
        }
        
        return $conexion;
    }$conexionbd = Conectarse();

    $comprobacion = "SELECT user FROM mysql.user WHERE user LIKE '".$username."'" or die(mysql_error());
    $comprobacion2=mysql_query($comprobacion);
    $comprobacion3 = "SELECT USER.Host FROM mysql.user WHERE USER.Host LIKE '".$hosted."'" or die(mysql_error());
    $comprobacion4=mysql_query($comprobacion3);
    if(mysql_fetch_row ($comprobacion2) && mysql_fetch_row ($comprobacion4)) {
    $borrado = "DROP USER '$username'@'$hosted'";
    mysql_query($borrado);
    
    echo "<img src=\"images\correct.png\"> El usuario $username ha sido eliminado de la base de datos.";
    
    }
    else{
    echo "<img src=\"images\incorrect.png\"> Error, el usuario que ha introducido no existe en la base de datos.";
    }
    

?>

<footer class="footer">
			<div class="container">
				<div class="row">

					<div class="col-md-8 col-xs-12 align_right">
						<p class="copyright">Copyright &#169; 2021 ESPERANZA GONZ??LEZ FUENTES</p>
					</div>
				</div>
			</div>
		</footer>
		<!-- end footer -->
    </div>

<!--BEGIN OF TERMS OF USE. DO NOT EDIT OR DELETE THESE LINES. IF YOU EDIT OR DELETE THESE LINES AN ALERT MESSAGE MAY APPEAR WHEN TEMPLATE WILL BE ONLINE-->
	<div id="copy" style="height: 75px; position: absolute; bottom: 0px; left:0px; border: none; width: 100%;">
		<div id="free-flash-header" style="width:820px;margin:0 auto;text-align:right;position:relative;bottom:0px;margin-top:63px;color:#363636;font-size:10px;font-family:Verdana"><strong>musica libre de derechos</strong> : <a href="https://lamusicagratis.com/">musica sin copyright</a></div>																			 
	</div>	
	<!--END OF TERMS OF USE-->
		

    <script type='text/javascript' src="js/jquery-2.1.3.js"></script>
    <script type='text/javascript' src="assets/js/visuallightbox.js"></script>
    <script type='text/javascript' src="assets/js/vlbdata.js"></script>
    <script type="text/javascript" src="assets/js/wowslider.js"></script>
    <script type="text/javascript" src="assets/js/wowslider-gallery.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
	<script type="text/javascript" src="assets/js/script-gallery.js"></script>
    <script type='text/javascript' src="js/app.js"></script>


</body> 

</html>