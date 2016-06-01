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
			<div class="panel panel-default">
				<div class="panel-body" id="upload-custom">
				<?php if ( !empty($error) ) : echo $error; endif ?>

				<?php if ( !empty($singer) ) : echo "<span>Upload complete!<br/><strong>{$title}</strong> by <strong>{$singer}</strong></span><hr/>"; 
				endif ?>

					<span class="showerror"><?php echo validation_errors(); ?></span>
					<?php echo form_open_multipart('user/upload_song');?>
						<input type="file" name="userfile" size="10"/><br/>
						<input class="form-control" type="text" name="singer" size="10" placeholder="Singer name"><br/>
						<input class="form-control" type="text" name="title" size="10" placeholder="Song title"><br/>
						<input class="btn btn-info" type="submit" value="upload" />
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