<!DOCTYPE html>
<html>

<!--  
           __                                                      
	     <   _       _     /  _             _  _   _ _     
       __ > /_/ /_/ / / (_/ ( /_ (_/  o   /_  /_/ / / /_   
  	       music player online    /           visit us!     
 														  
-->

<head>
	<title>Sounday - Music Player Online</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
	<script src="//connect.soundcloud.com/sdk.js"></script>
	<script src="<?php echo base_url('assets/js/sounday.js')?>"></script>
	  <!--[if lt IE 9]>
	     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/
	        html5shiv.js"></script>
	     <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/
	        respond.min.js"></script>
	  <![endif]-->
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron">
				<span>I'M HEADER</span>
			</div>
		</div>

		<div class="col-md-12">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
					    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					    	<span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					    </button>
				      	<a class="navbar-brand" href="#">Sounday</a>
			    	</div> 
			    	<form class="navbar-form navbar-left" role="search">
			        	<div class="form-group">
			        		<input id="search-form" type="text" class="form-control" placeholder="Search">
			        	</div>
			        	<button type="submit" class="btn btn-default" onclick="audioResults()">Search</button>
			    	</form>
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					    <ul class="nav navbar-nav navbar-left">
					    	<li><a href="<?php echo base_url('home/index')?>">Home</a></li>
					    	<li><a href="<?php echo base_url('home/about')?>">About</a></li>
					    </ul>
					    <ul class="nav navbar-nav navbar-right">
		        			<li><a href="<?php echo base_url('home/signup');?>">Sign Up</a></li>
		        			<li><a href="<?php echo base_url('home/login');?>">Login</a></li>
		      			</ul>
				  	</div><!-- /.collapse navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav><!-- /.navbar navbar-default -->
		</div>
	</div>
<!-- /.header -->

	<div class="row">
		<div class="col-md-12 col">
			<div class="jumbotron">

				<!-- YOUR CODE HERE -->
				<form role="form" method="POST" action="<?php echo base_url('home/login_validation');?>">
					<div class="form-group">
					    <label for="username">Username:</label>
					    <input type="text" name="username" class="form-control" id="email">
					</div>
					<div class="form-group">
					    <label for="pwd">Password:</label>
					    <input type="password" name="password" class="form-control" id="pwd">
					</div>
					<div class="checkbox">
					    <label><input type="checkbox"> Remember me</label>
					</div>
						<button type="submit" class="btn btn-default">Login</button>
				</form>

			</div>
		</div>
	</div>
<!-- /.body -->

	<div class="row">
		<div class="col-md-12 col">
			<div class="jumbotron">
				<span>I'M FOOTER</span>
			</div>
		</div>
	</div>

</div><!-- /.container -->
<!-- /.footer-->
	<script src="<?php echo base_url('assets/js/jquery-2.1.3.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
</body>
</html>