<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
  @import url('https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&subset=latin-ext');


#playground-container {
    height: 500px;
    overflow: hidden !important;
    
}
.main{margin-top:70px;
-webkit-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
-moz-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
padding:0px;
}
.fb:focus, .fb:hover{color:FFF !important;}
body{
font-family: 'Raleway', sans-serif;
background-image:url(vistas/img/plantilla/fondo.jpg);
}

.left-sid{
	padding:0px 0px 60px;
	background:#ffff;
	background-size:cover;
	text-align: center;
}
.left-sid h1{
	font-size: 36px;
    font-weight: 700;
	color:#FF33B2;
	padding: 8px;
	}
	
	.left-sid p{
    font-weight:600;
	color:#FF33B2;
	padding:8px;
	}

	
	.fb{background: #2d6bb7;
    color: #FFF;
    padding: 10px 15px;
    border-radius: 18px;
    font-size: 12px;
    font-weight: 600;
    margin-right: 15px;
	margin-left:26px;-webkit-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
-moz-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);}
	.tw{background: #20c1ed;
    color: #FFF;
    padding: 10px 15px;
    border-radius: 18px;
    font-size: 12px;
    font-weight: 600;
    margin-right: 15px;-webkit-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
-moz-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);}
	
	.right-sid{
	padding:30px 0px 100px;
	background:#FF33B2 ;
	background-size:cover;
	min-height:514px;
}
	.right-sid h1{
	font-size: 30px;
    font-weight: 700;
	text-align: center;
	color:#fff;
	padding: 50px 10px 00px 50px;
	}
	.right-sid p{
    font-weight:800;
	color:#fff;
	padding:10px 50px 10px 50px;
	}
	.form{padding:10px 50px 10px 50px;color:#ffff;}
    .form-control{box-shadow: none !important;
    border-radius: 10px !important;
    border-bottom: 1px solid #9100ff !important;
    border-top: none !important;
    border-left: none !important;
    border-right: none !important;}
	.btn-deep-purple {
    background: #FE99EE;
    border-radius: 18px;
    padding: 5px 19px;
    color: #FFF;
    font-weight: 600;
    float: right;
	-webkit-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
-moz-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
}
.center-container {
      display: flex;
      justify-content: center;
      align-items: center;
	  padding:8px;
	  
    }
</style>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="es">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- Website CSS style -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Pacifico&subset=latin-ext,vietnamese" rel="stylesheet">
		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="form1.css">
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&subset=latin-ext" rel="stylesheet">

		<title>MegaMenu Design</title>
	</head>
	<body>
		<div class="container">
	    
		<div class="col-sm-8 col-sm-offset-2 main">
		<div class="col-sm-6 left-sid">
		<div class="center-container">
			<img src="vistas/img/plantilla/log.gif" style="width: 57%; height: 57%;" alt="Mi Imagen">
		</div>
		<h1>Dulceria<br>"La Flakita".</h1>
		<p>Cada día es una fiesta cuando visitas nuestra tienda de dulces. ¡Ven y celebra con nosotros!El lugar donde los momentos más dulces comienzan: ¡nuestra tienda de dulces!</p>
		
		</div><!--col-sm-6-->
		
		<div class="col-sm-6 right-sid">
		<h1>Iniciar Sesión</h1>
		
<!--Form with header-->
<div id="back"></div>
<form method="post">
<div class="form">
        <div class="form-group">
		    <label for="form2">Usuario</label>
            <input type="text" id="form2" class="form-control" placeholder="Usuario" name="ingUsuario" required>
			
            
        </div>

        <div class="form-group">
		    <label for="form4">Contraseña</label>
            <input type="password" id="form4"  class="form-control" placeholder="Contraseña" name="ingPassword" required>
           
        </div>

        <div class="text-xs-center">
		<button type="submit" class="btn btn-deep-purple">Ingresar</button>
		
        </div><br>
<?php

		$login = new ControladorUsuarios();
		$login -> ctrIngresoUsuario();

		?>

        </div>
        <!--/Form with header-->

		  </div><!--col-sm-6-->
		
		
        </div><!--col-sm-8-->
        
        </div><!--container-->

		
		</form>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="form1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>