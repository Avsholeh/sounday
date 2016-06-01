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
				    		echo "<li><a href=". base_url('user/my_song') .">My Song List</a></li>";
	        				echo "<li><a href=". base_url('user/upload') .">Upload</a></li>";
	        				echo "<li><a href=". base_url('home/logout') .">Logout</a></li>";
	        			?>
		        	</ul>  
				</div>
			</div>
			</nav>
			<form method="<?php echo base_url('home/search') ?>">
			    <div class="input-group">
			    	<input name="search" type="text" class="form-control" placeholder="Type your favorite song">
			        <span class="input-group-btn">
	  				<button class="btn btn-info" type="button">Search</button>
	  				</span> 
			    </div>
			</form>
			<div class="panel panel-default">
				<div class="panel-body">
					This is my body
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