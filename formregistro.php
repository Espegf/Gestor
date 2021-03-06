<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="fr"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="fr"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="fr"> <![endif]-->
<!--[if gt IE 8]> <html class="no-js" lang="fr"> <![endif]-->
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=2">
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
	
	<body>
	<div class="page-container">	
		<!--BEGIN OF TERMS OF USE. DO NOT EDIT OR DELETE THESE LINES. IF YOU EDIT OR DELETE THESE LINES AN ALERT MESSAGE MAY APPEAR WHEN TEMPLATE WILL BE ONLINE-->
	<div id="copy" style="height: 75px; position: absolute; bottom: 0px; left:0px; border: none; width: 100%;">
		<div id="free-flash-header" style="width:820px;margin:0 auto;text-align:right;position:relative;bottom:0px;margin-top:63px;color:#363636;font-size:10px;font-family:Verdana"><strong>musica de fondo</strong> : <a href="https://lamusicagratis.com/musica-de-fondo-para-video">musica para video</a></div>																			 
	</div>	
	<!--END OF TERMS OF USE-->	

				<header>
			<div class="container">

				<!-- logo -->
				<div class="logo">
					<a href="">
						<div class="name_logo">
							<p>Mi <span class="orange">G</span>ESTOR</p>
                                                        <p>DE <span class="green">B</span>ASES </p>
                                                        <p>DE <span class="green">D</span>ATOS</p>
						</div>
						<div class="picture_logo">
							<div class="orange_square"></div>
							<div class="green_square"></div>
						</div>
					</a>
				</div>
				<!-- logo -->

			</div>
		</header>


		<div id="content">
			<div class="container container-content">

				<!-- sidebar -->
				<aside class="col-md-3 col-xs-12 no_left">
					<!-- naviguation -->
						<div id="content">
			<div class="container container-content">

				<!-- sidebar -->
				<aside class="col-md-3 col-xs-12 no_left">
					<!-- naviguation -->
					<nav id="nav">
						<ul>
							<li class="active">		
								<a href="index.htm">
									<i class="icon-arrow"></i>
									<span>HOME</span>
									<div class="bg-nav"></div>
								</a>
							</li>
							<li>	
								<a href="USUARIOS.php">
									<i class="icon-arrow"></i>
									<span>USUARIOS</span>
									<div class="bg-nav"></div>
								</a>
							</li>
							<li>	
								<a href="basededatos.php">
									<i class="icon-arrow"></i>
									<span>BASES DE DATOS</span>
									<div class="bg-nav"></div>
								</a>
							</li>
							<li>	
								<a href="tablas.php">
									<i class="icon-arrow"></i>
									<span>TABLAS</span>
									<div class="bg-nav"></div>
								</a>
							</li>
                                                        <li>	
								<a href="vistas.php">
									<i class="icon-arrow"></i>
									<span>VISTAS</span>
									<div class="bg-nav"></div>
								</a>
							</li>
							<li>	
								<a href="contact.htm">
									<i class="icon-arrow"></i>
									<span>CONTACTAR CONMIGO</span>
									<div class="bg-nav"></div>
								</a>
							</li>
						</ul>


					</nav>
					<!-- end naviguation -->
         
					<div class="bloc ">
						<h3 class="grey">Creaci??n de usuarios</h3>
						<span class="date green">20-1-2021</span>
						<p class="grey">Elige lo que desees hacer. </p>
						
          <form action="registro.php" method="post">
    <table>
<tr>
<td>Nombre del usuario(*):</td>
    <td><input type="text" class="estilo1" name="username" required/></td>
</tr>
<br>
<tr>
<td>Contrase&#241;a(*):</td>
    <td><input type="password" class="estilo1" name="password1" required/></td>
</tr>
<br>
<tr>
<td>Repite la contrase&#241;a(*):</td>
    <td><input type="password" class="estilo1" name="password2" required/></td>
</tr>
<tr>
    <td>Donde desea crearlo (ej:localhost)</td>
    <td><input type="text" class="estilo1" name="host" required/></td>
<br>
</tr>
    </table>
<br>
<table>
    <p class="algo">Selecciona el tipo de permiso que desea asignar al usuario:</p>
<input type="checkbox" name="tema[]" value="SELECT" >SELECT
<br>
<input type="checkbox" name="tema[]" value="INSERT">INSERT
<br>
<input type="checkbox" name="tema[]" value="DELETE">DELETE
<br>
<input type="checkbox" name="tema[]" value="UPDATE">UPDATE
<br>
<input type="checkbox" name="tema[]" value="ALL PRIVILEGES">ALL PRIVILEGES
<br>
<input style="background-color: #4EB24D" type="submit" value="Crear" class="crear"/>    

<br>
</table >
<br>
<center>
    <table>
<?php
$link = mysql_connect("localhost","root"); 
mysql_select_db("mysql", $link); 

$result = mysql_query("SELECT user FROM mysql.user", $link);
echo "<table border = '1'> \n"; 
echo "<tr><td>Usuarios existentes en la base de datos:</td></tr> \n"; 
while ($row = mysql_fetch_row($result)){ 
       echo "<tr><td>$row[0]</td></tr> \n";
} 
echo "</table> \n"; 
mysql_close($link);
?>
           
</table>
          </form>
</center>
                             
      
					</div>

				</aside>
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