<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-push-2">
			<div class="panel panel-default">
				<div class="panel-body" id="header-custom">
					<h1>Sounday</h1><br/>
					<h2><small>Music Player Online</small></h2>
				</div>
			</div>
			<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="<?php echo base_url('home/index');?>">Sounday</a>
				</div>
				<div>
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
				</div>
			</div>
			</nav>
			<div class="panel panel-default">
				<div class="panel-body">
					<form role="form" method="POST" action="<?php echo base_url('home/login_validation');?>">
					<div class="form-group">
					    <input type="text" name="username" class="form-control" id="username" placeholder="Username">
					</div>
					<div class="form-group">
					    <input type="password" name="password" class="form-control" id="pwd" placeholder="Password">
					</div>
					<!--
					<div class="checkbox">
					    <label><input type="checkbox"> Remember me</label>
					</div>
					-->
						<button type="submit" class="btn btn-default">Login</button>
				</form>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					<small>Copyright 2015 | Sounday - Music Player Online</small>
					<hr/>
					<small><strong>Project UAS Pemrograman Web</strong></small>
					<small><em>oleh Muhammad Sholeh, Rizky Julianto dan Muharrom Abdillah</em></small>
				</div>
			</div>
		</div> <!-- /.col-md-8 col-md-push-2 -->
	</div>
</div>