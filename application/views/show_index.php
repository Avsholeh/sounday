<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-push-2">
			<div class="panel panel-default">
				<div class="panel-body" id="header-custom">
					<h1>Sounday</h1><br/>
					<h2><small>Music Player Online</small></h2>
				</div>
			</div>
			<div class="alert alert-dismissible alert-info">
				<button type="button" class="close" data-dismiss="alert">×</button>
				Welcome <strong><?php 
				if ($this->ion_auth->logged_in()) { 
					$user = $this->ion_auth->user()->row(); 
					echo $user->username. "!"; 
				} else {
					echo "Guest!";
				}
				?></strong> Have a nice day :-)
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
							echo "<li><a href=". base_url('user/my_song') .">My Song List</a></li>";
	        				echo "<li><a href=". base_url('user/upload') .">Upload</a></li>";
	        				echo "<li><a href=". base_url('home/logout') .">Logout</a></li>";
						}
						?>
		        	</ul>  
				</div>
			</div>
			</nav>
			<form method="GET" action="<?php echo base_url('home/search') ?>">
			    <div class="input-group">
			    	<input name="query" type="text" class="form-control" placeholder="Type your favorite song">
			        <span class="input-group-btn">
	  				<button class="btn btn-info" type="button">Search</button>
	  				</span> 
			    </div>
			</form>
			<div class="panel panel-default">
				<div class="panel-body">
					
					<ul class="container-fluid">
					<?php $count = 0 ?>

					<?php if (!empty($data)) : ?> 

					<?php foreach ($data as $item): ?>

					<span class="song-title" id="<?php echo "result". $count += 1 ?>">
					<?php echo "<strong>" .$item->title. "</strong> by <strong>" .$item->singer. "</strong>";?>
					</span><br/>
					<small>Uploader : <?php echo $item->username ?></small><br/>
					<br/>
					<audio controls>
		  			<source src="<?php echo base_url('musicdata') . "/" . $item->filename ?>" type="audio/mpeg">
					</audio><br/><br/>
					<a href="<?php echo base_url('user/add_song'). "/" .$item->username. "/" .$item->filename ?>"><button class="btn btn-info">Add to song list</button></a>
					<!--
					<button class="btn btn-primary"><?php //echo anchor("user/delete/$item->filename", "Delete") ?></button>
					-->
					<hr/>
					<?php endforeach; ?>
					<?php endif; ?>
					</ul>

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