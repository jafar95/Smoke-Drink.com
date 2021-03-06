<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !==true)
{
  header("location : login.php");
  exit;
}
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

	<head>
		<div class="container">
			
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Smoke&Drink</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Cart</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class = "nav-item">
        <a class = "nav-link" href= "logout.php">Sign Out</a>
      </li>  
      <li class = "nav-item">
        <a class = "nav-link" href= "reset-password.php"> Reset Password</a>
      </li>  
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

		</div>
		

	</head>


	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="pic/hd.jpg" alt="First slide">

  <div class="carousel-caption d-none d-md-block">
    <h1>Get high to the sky</h1><br>
    <btn class="btn btn-lg btn-danger">Order Now</btn>  
  </div>

</div>
    
    <div class="carousel-item">
      <img class="d-block w-100" src="pic/maal.jpg" alt="Second slide">

      <div class="carousel-caption d-none d-md-block">
    <h1>Get more classy</h1><br>
    <btn class="btn btn-lg btn-danger">Order Now</btn>
    </div>

</div>

    <div class="carousel-item">
      <img class="d-block w-100" src="pic/pph.jpg" alt="
      Third slide">
      <div class="carousel-caption d-none d-md-block">
    <h1>Old is gold</h1><br>
    <btn class="btn btn-lg btn-danger">Order Now</btn>
    </div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	

	   <div class ="container mt-5 pb-5">
		<div class="row">
			<h1>Products</h1>		
		</div>

	<div class="row red-line"></div>

		<div class="row mt-4"> 
			<div class="col-md-6" style="padding: 0">
				<div class="card" style="width: 18rem;">
  					<img class="card-img-top" src="pic/marl.png" alt="Card image cap">
  					<div class="card-body">
    					<h5 class="card-title">MarlBoro</h5>
    					<p class="card-text">Marlboro is an American brand of cigarettes, currently owned and manufactured by Philip Morris</p>
    						<a href="#" class="btn btn-primary">Order</a>
  					</div>
				</div>

			</div>

			<div class="col-md-6">
				<div class="card" style="width: 18rem;">
  					<img class="card-img-top" src="pic/556.jpg" alt="Card image cap">
  					<div class="card-body">
    					<h5 class="card-title">555</h5>
    					<p class="card-text">State Express 555, simply known as 555, is a brand of cigarette originally manufactured in the United Kingdom by the Ardath Tobacco Company.</p>
    			<a href="#" class="btn btn-primary">Order</a>
  					</div>
				</div>
			</div>

		</div>




		<div class="row mt-4"> 
			<div class="col-md-6" style="padding: 0">
				<div class="card" style="width: 18rem;">
  					<img class="card-img-top" src="pic/camel.jpg" alt="Card image cap">
  					<div class="card-body">
    					<h5 class="card-title">Camel</h5>
    					<p class="card-text">Camel is an American brand of cigarettes, currently owned and manufactured by the R. J. Reynolds Tobacco Company in the United States </p>
    						<a href="#" class="btn btn-primary">Order</a>
  					</div>
				</div>

			</div>

			<div class="col-md-6">
				<div class="card" style="width: 18rem;">
  					<img class="card-img-top" src="pic/b&h.jpg" alt="Card image cap">
  					<div class="card-body">
    					<h5 class="card-title">B&H</h5>
    					<p class="card-text">Benson & Hedges is a British brand of cigarettes owned by either Philip Morris International</p>
    			<a href="#" class="btn btn-primary">Order</a>
  					</div>
				</div>
			</div>

		</div>


		<div class="row mt-4"> 
			<div class="col-md-6" style="padding: 0">
				<div class="card" style="width: 18rem;">
  					<img class="card-img-top" src="pic/jd.jpeg" alt="Card image cap">
  					<div class="card-body">
    					<h5 class="card-title">Jack Daniels</h5>
    					<p class="card-text">Jack Daniel's is a brand of Tennessee whiskey and the top-selling American whiskey in the world. It is produced in Lynchburg, Tennessee, by the Jack Daniel </p>
    						<a href="#" class="btn btn-primary">Order</a>
  					</div>
				</div>

			</div>

			<div class="col-md-6">
				<div class="card" style="width: 18rem;">
  					<img class="card-img-top" src="pic/absolute.jpg" alt="Card image cap">
  					<div class="card-body">
    					<h5 class="card-title">Absolute Vodka</h5>
    					<p class="card-text">Absolut Vodka is a brand of vodka, produced near Åhus, in southern Sweden.</p>
    			<a href="#" class="btn btn-primary">Order</a>
  					</div>
				</div>
			</div>

		</div>



		<div class="row mt-4"> 
			<div class="col-md-6" style="padding: 0">
				<div class="card" style="width: 18rem;">
  					<img class="card-img-top" src="pic/hash.jpg" alt="Card image cap">
  					<div class="card-body">
    					<h5 class="card-title">Hash Browines</h5>
    					<p class="card-text"> hash brownie is a brownie laced with hashish and eaten for its psychoactive effects.</p>
    						<a href="#" class="btn btn-primary">Order</a>
  					</div>
				</div>

			</div>

			<div class="col-md-6">
				<div class="card" style="width: 18rem;">
  					<img class="card-img-top" src="pic/weed.jpg" alt="Card image cap">
  					<div class="card-body">
    					<h5 class="card-title">Marijuana</h5>
    					<p class="card-text">cannabis, especially as smoked in cigarettes.</p>
    			        <a href="#" class="btn btn-primary">Order</a>
  					</div>
				</div>
			</div>

		</div>

			</div>



	</div>


	<nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active">
      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>



	<div class="container mt-5 pb-5">
		<div class="row">
			<h1>Services</h1>
		</div>

		<div class="row red-line"></div>
		<div class="row mt-4">
			<div class="col-md-6" style="padding: 0">
				<p class="hero-text">
					
				</p>
				
			</div>
			
		</div>
	</div>
		



	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="">
</body>
</html>