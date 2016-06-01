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
	        			<li><a href="<?php echo "oranggila"; ?>"></a></li>
		        	</ul>  
				</div>
			</div>
			</nav>
			<div class="panel panel-default">
				<div class="panel-body" id="songlist-custom">
					<ul class="container-fluid">

					<?php if (empty($data)){ echo "<span>You not have a song. <a href=". base_url('user/upload') .">Upload now!</a></span>"; } ?>

					<?php $count = 0 ?>
					<?php foreach ($data as $item): ?>

					<span class="song-title" id="<?php echo "song". $count += 1 ?>">
					<?php echo "<strong>" .$item->title. "</strong> by <strong>" .$item->singer. "</strong>";?>
					</span><br/>
					<br/>
					<audio controls>
		  			<source src="<?php echo base_url('musicdata') . "/" . $item->filename ?>" type="audio/mpeg">
					</audio><br/><br/>
					<a href="<?php echo base_url('user/delete'). "/" .$item->filename ?>"><button class="btn btn-info">Delete</button></a>
					<!--
					<button class="btn btn-primary"><?php //echo anchor("user/delete/$item->filename", "Delete") ?></button>
					-->
					<hr/>
					<?php endforeach; ?>
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