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
	<!--<script src="//connect.soundcloud.com/sdk.js"></script>-->
	<script src="<?php echo base_url('assets/js/sounday.js')?>"></script>
	  <!--[if lt IE 9]>
	     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/
	        html5shiv.js"></script>
	     <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/
	        respond.min.js"></script>
	  <![endif]-->
</head>
<style type="text/css">
	#footer {
		text-align: center;
	}
	body {
		background-color: #DCE2D2;
	}
</style>
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
				      	<a class="navbar-brand" href="<?php echo base_url('home/index');?>">Sounday</a>
			    	</div> 
			    	<form class="navbar-form navbar-left" name="mysearch" onclick="searchSong()">
			        	<div class="form-group">
			        		<input name="search" type="text" class="form-control" placeholder="Search">
			        	</div>
			        	<button type="submit" class="btn btn-default" onclick="searchSong()">Search</button>
			    	</form>
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				    <!--
					    <ul class="nav navbar-nav navbar-left">
					    	<li><a href="<?php echo base_url('home/index')?>">Home</a></li>
					    	<li><a href="<?php echo base_url('home/about')?>">About</a></li>
					    </ul>
					-->
					    <ul class="nav navbar-nav navbar-right">
					    	<?php 
					    	if (!$this->ion_auth->logged_in()){
					    		echo "<li><a href=". base_url('home/signup') .">Sign Up</a></li>";
					    		echo "<li><a href=". base_url('home/login') .">Login</a></li>";
		        			} else {
		        				$user = $this->ion_auth->user()->row();
		        				echo "<li><a>Welcome {$user->username}</a></li>";
		        				echo "<li><a href=". base_url('home/logout') .">Logout</a></li>";
		        			}
		        			?>
		        		</ul>    			
				  	</div><!-- /.collapse navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav><!-- /.navbar navbar-default -->
		</div>
	</div>
<!-- /.header -->

	<div class="row">
		<div class="col-md-8 col">
			<div class="jumbotron">
				<span id="searchResult">I'M BODY</span>
				
				<!-- YOUR CODE HERE -->
				<!-- Login -->
				<!--
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
				
				<!-- Sign Up -->
				<!--
				<form role="form" method="POST" action="<?php echo base_url('home/user_signup')?>">
					<div class="form-group">
					    <label for="username">Username:</label>
					    <input type="username" name="username" class="form-control" id="username">
					</div>
					<div class="form-group">
					    <label for="email">Email:</label>
					    <input type="email" name="email" class="form-control" id="email">
					</div>
					<div class="form-group">
					    <label for="pwd">Password:</label>
					    <input type="password" name="password" class="form-control" id="pwd">
					</div>
						<button type="submit" class="btn btn-default">Sign Up</button>
				</form>

				-->

			</div>
		</div>
		<div class="col-md-4 col">
			<div class="panel panel-default">
  				<div class="panel-heading">
				<span class="glyphicon glyphicon-music"></span>
  				 Playlist</div>
  				<div class="panel-body">
  					<span>
  						Playlist content!
					</span>
  				</div>
			</div>
			<div class="panel panel-default">
  				<div class="panel-heading">
				<span class="glyphicon glyphicon-globe"></span>
  				 Public Chat</div>
  				<div class="panel-body">
  					
  					<!-- Chat Content -->
  					<span id="chat-result"></span>
  					<form>
  						<div class="input-group">
  							<input name="msage" type="text" class="form-control" placeholder="What's on your mind?">
  							<span class="input-group-btn">
  								<button class="btn btn-default" type="button" onclick="sendChat()">Enter</button>
  							</span> 
  						</div>
  					</form>
  					<!--
  					<form method="POST" action="<?php base_url('home/send_chat');?>">
			        	<div class="form-group">
			        		<input name="msage" type="text" class="form-control" placeholder="What's on your mind?">
			        	</div>
			        	<button type="submit" class="btn btn-default">Enter</button>
			    	</form>
			    	-->
  				</div>
			</div>
		</div>
	</div>
<!-- /.body -->

	<div class="row" id="footer">
		<div class="col-md-12 col">
			<div class="jumbotron">
				<span>
					<small>Copyright 2015 - Sounday. Powered by SoundCloud API</small>
				</span>
			</div>
		</div>
	</div>

</div><!-- /.container -->
<!-- /.footer-->
	<script src="<?php echo base_url('assets/js/jquery-2.1.3.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
</body>
</html>