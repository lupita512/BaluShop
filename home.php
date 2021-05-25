<?php
require "config/constants.php";
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Ecommerce</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<style></style>
	</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand">B A L U</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="home.php"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span> Productos</a></li>
			</ul>
            <form class="navbar-form navbar-left">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search" id="search">
		        </div>
		        <button type="submit" class="btn btn-primary" id="search_btn"><span class="glyphicon glyphicon-search"></span></button>
		     </form>
             <ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span> Carrito <span class="badge" >0</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">No</div>
									<div class="col-md-3">Imagen del Producto</div>
									<div class="col-md-3">Nombre del Producto</div>
									<div class="col-md-3">Precio <?php echo CURRENCY; ?></div>
								</div>
							</div>
                            <div class="panel-body">
								<div id="cart_product">
								<!--<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $.</div>
								</div>-->
								</div>
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Entrar/Registrarse</a>
					<ul class="dropdown-menu">
						<div style="width:300px;">
							<div class="panel panel-primary">
								<div class="panel-heading">Acceder</div>
								<div class="panel-heading">
									<form onsubmit="return false" id="login">
										<label for="email">Correo</label>
										<input type="email" class="form-control" name="email" id="email" required/>
										<label for="email">Contraseña</label>
										<input type="password" class="form-control" name="password" id="password" required/>
										<p><br/></p>
										<input type="submit" class="btn btn-warning" value="Login">
										<a href="customer_registration.php?register=1" style="color:white; text-decoration:none;">Crear Cuenta Nueva</a>
									</form>
								</div>
								<div class="panel-footer" id="e_msg"></div>
							</div>
						</div>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>	

    <head>
    <body style="background-color:#D3D3D3;">
    <link rel="stylesheet" href="styles.css" />
  </head><br><br>
  <img src="product_images/images.png" width="350" height="200">
  <img src="product_images/images.png" width="350" height="200">
  <img src="product_images/images.png" width="360" height="200">
  <img src="product_images/images.png" width="350" height="200">
  <img src="product_images/descarga.png" width="1500" height="10">
  <br><br><br><br><br><br><br><br><br><br><br><br><br>
  <img src="product_images/descarga.png" width="1500" height="10">
  <img src="product_images/images.png" width="350" height="200">
  <img src="product_images/images.png" width="350" height="200">
  <img src="product_images/images.png" width="360" height="200">
  <img src="product_images/images.png" width="350" height="200">
  <img src="product_images/descarga.png" width="1500" height="60">
  <h1>Productos BALU</h1>
  <link rel="stylesheet" href="content.css" />
  <main>
        <section class="contenedor sobre-nosotros">
            <h4 class="titulo">¿Quiénes somos?</h4>
            <div class="contenedor-sobre-nosotros">
                <img src="imagenes/blog.jpg" alt="" class="imagen-about-us">
				
                <div class="contenido-textos">
                    <h3><span>1</span> Objetivos</h3>
                    <p>Brindar productos de calidad para la satisfacción del cliente.</p>
                <h3><span>2</span> UNICOS Y EXCELENTES</h3>
                    
					
    
        </div>  
            </div>
        </section>
		<img src="product_images/descarga.png" width="1500" height="10">
		<section class="clientes contenedor">
            <h2 class="titulo">Conocenos</h2>
            <div class="cards">
                <div class="card">
                    <img src="imagenes/mision.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Misión</h4>
                        <p>Vender productos y accesorios de calidad para la sociedad. </p>
                    </div>
                </div>
                <div class="card">
                    <img src="imagenes/vision.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Visión</h4>
                        <p>Crecimiento de la empresa por la venta de calidad para la satisfacción de los clientes.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-services">
            <div class="contenedor">
                
        </section>
    </main>
	
        
        </section>
    </main>