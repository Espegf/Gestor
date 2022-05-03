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
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$host = $_POST['host'];
$coma=", ";
$final="";

if (isset($_POST['tema'])) {
     $arrayname=$_POST['tema'];


$arrayname=$_POST['tema'];

$num=count($arrayname);


for($n=0; $n<$num; $n++){

    $final="$final $arrayname[$n]";
    
    if($n==$num-1){
        break;
    }
    $final="$final $coma";
    }
}
if ($password1 === $password2){
    
    function Conectarse(){

        if (!($conexion=mysql_connect("localhost","root"))){
         echo "Error conectando a la base de datos.";
         }
        if (!mysql_select_db("mysql",$conexion)){
        echo "Error seleccionando la base de datos.";
        }
        
        return $conexion;
    }$conexionbd = Conectarse();

    $con1 = "SELECT user FROM mysql.user WHERE user LIKE '".$username."'";
    $con2=mysql_query($con1);

      if(!mysql_fetch_row ($con2)){
    
        $creacion = "CREATE USER '$username'@'$host' IDENTIFIED BY '$password1'";
        $permisos = "GRANT $final ON *.* TO '$username'@'$host'";
    
    mysql_query($creacion);
    mysql_query($permisos);
    
    echo "<img src=\"images\correct.png\"> El usuario $username ha sido creado correctamente en la base de datos.";

}else{
    echo "<img src=\"images\incorrect.png\"> Error, el usuario $username ya existe en la base de datos.";
    }

}else{
    echo "<img src=\"images\incorrect.png\"> Error, las contrase&#241;as no coinciden.";
} 

?>
</body>
<footer class="footer">
			<div class="container">
				<div class="row">

					<div class="col-md-8 col-xs-12 align_right">
						<p class="copyright">Copyright &#169; 2021 ESPERANZA GONZÁLEZ FUENTES</p>
					</div>
				</div>
			</div>
		</footer>
		<!-- end footer -->

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




</html>