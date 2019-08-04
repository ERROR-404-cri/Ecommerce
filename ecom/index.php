<!DOCTYPE html>
<html>
<head>
	<title>E commerce store</title>
    
    <link rel="stylesheet" type="text/css" href="styles/style2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>

		<div id="top"> <!-- top start-->
		<div class="container">
			<div class="col-md-6 offer">
				<div class="btn btn-success btn-sm text">
					<a href="#">Welcome guest!</a>
					<a href="">Your cart amt is: Rs 100</a>
				</div>
				
			</div>
			<div class="col-md-6">
				<ul class="menu">
					<li >
						<a href="#">Register</a>
						<a href="">My account</a>
						<a href="">Go to cart</a>
						<a href="">Login</a>
					</li>
				</ul>
				
			</div>
			
		</div>
		
	</div>    <!-- top ends-->
	<div class="navbar navbar-default" id="navbar">  <!-- navbar starts-->
			<div class="container">
				<div class="navbar-header">    <!-- navbar-header starts-->
					<a class="navbar-brand" href="index.php">
						<img src="images/logo.jpg" class="hidden-xs">
						<img src="images/logo_sm.jpg" class="visible-xs">
					</a>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation" >
						
						<i class="fa fa-align-justify" aria-hidden="true"></i>
						
					</button>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search" >
						
						<i class="fa fa-search"></i>
						
					</button>

				</div> <!-- navbar-header ends-->
				<div class="navbar-collapse collapse" id="navigation">
                      <div class="padding-nav">
                      	<ul class="nav navbar-nav navbar-left">
                      		<li class="active">
                      			<a href="">Home</a>
                      		</li>
                      		<li>
                      			<a href="">shop</a>
                      		</li>
                      		<li>
                      			<a href="">contact us</a>
                      		</li>
                      		<li>
                      			<a href="">My account</a>
                      		</li>
                      		<li>
                      			<a href="">catagories</a>
                      		</li>
                      	</ul>
                      </div>
                      <a href="" class="btn btn-primary navbar-btn">
                      	<i class="fa fa-shopping-cart"></i>
                      	<span>4 items in your cart</span>
                      </a>
					
				</div>
				
			</div>
			

	</div>  <!-- navbar ends-->
 <div class="container" id="slider"><!-- slider container begins-->
  
  <div class="col-md-12">

    <div id="mycarousel" class="carousel slide" data-ride="carousel"> <!-- carousal indicator-->
      	<ol class="carousel-indicators">
       	 	<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
        	<li data-target="#mycarousel" data-slide-to="1"></li>
        	<li data-target="#mycarousel" data-slide-to="2"></li>
      	</ol>
       <div class="carousel-inner">  <!-- carousal inner starts-->
     		<div class="item active">
      			<img src="admin_area/slider_images/1.png" width="100%" alt="...">
    		</div>

    		<div class="item">
      			<img src="admin_area/slider_images/2.png" width="100%" alt="...">
    		</div>

    		<div class="item">
      			<img src="admin_area/slider_images/3.png" width="100%" alt="...">
    		</div> 
       </div>  <!-- carousal inner ends-->

       <!-- carousal control -- below in anchor tag-->
    	<a href="#mycarousel" class="left carousel-control" data-slide="prev">
    		<span class="glyphicon glyphicon-chevron-left"></span>
    	</a>
    	<a href="#mycarousel" class="right carousel-control" data-slide="next">
    		<span class="glyphicon glyphicon-chevron-right"></span>
    	</a>
  
    </div> <!-- carousal indicator ends-->
  </div>
	
</div><!-- slider container ends-->

<div id ="hotbox"><!-- white hotbox starts-->
   <div class="container">
   	<h3>Latest this week</h3>
   </div>	
</div><!-- white hotbox ends-->

<!--next day-->
<div id="content" class="container"><!--front content page-->
	<div class="row">
		<div class="col-sm-3 single">
			<div class="product">
				<a href="details.php">
					<img src="admin_area\product_images\polo_tshirt.png" class="img-responsive">
				</a>
				<div class="text">
					<h3><a href="details.php">Blue Stylish POLO T-Shirt for children</a></h3>
					<p class="price">Rs. 399</p>
					<p class="buttons"> 
						<a href="details.php" class="btn btn-primary">view details</a>
						<a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart"></i>Add to cart
						</a>
					</p>
					
				</div>
			</div>
		</div>

		<div class="col-sm-3 single">
			<div class="product">
				<a href="details.php">
					<img src="admin_area\product_images\marshmallow_tshirt.png" class="img-responsive">
				</a>
				<div class="text">
					<h3><a href="details.php">Stylish Marshmallow T-Shirt for children</a></h3>
					<p class="price">Rs. 399</p>
					<p class="buttons"> 
						<a href="details.php" class="btn btn-primary">view details</a>
						<a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart"></i>Add to cart
						</a>
					</p>
					
				</div>
			</div>
			
		</div>

		<div class="col-sm-3 single">
			<div class="product">
				<a href="details.php">
					<img src="admin_area\product_images\black_tshirt.png" class="img-responsive">
				</a>
				<div class="text">
					<h3><a href="details.php">Black POLO T-Shirt for children</a></h3>
					<p class="price">Rs. 399</p>
					<p class="buttons"> 
						<a href="details.php" class="btn btn-primary">view details</a>
						<a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart"></i>Add to cart
						</a>
					</p>
					
				</div>
			</div>
			
		</div>

		<div class="col-sm-3 single">
			<div class="product">
				<a href="details.php">
					<img src="admin_area\product_images\polo_tshirt.png" class="img-responsive">
				</a>
				<div class="text">
					<h3><a href="details.php">Blue Stylish POLO T-Shirt for children</a></h3>
					<p class="price">Rs. 399</p>
					<p class="buttons"> 
						<a href="details.php" class="btn btn-primary">view details</a>
						<a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart"></i>Add to cart
						</a>
					</p>
					
				</div>
			</div>
		</div>
		
	</div>
	
</div><!--front content page ends-->

<!--footer-->
<?php

include("include/footer.php");

?>
<!--footer ends-->



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>