<!-- Header -->
<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">			
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="<?php echo base_url();?>" class="navbar-brand">Blog</a>
		</div>
		<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
			<form class="navbar-form navbar-right" role="search">
			  <div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			  </div>
			  <button type="submit" class="btn btn-default">Submit</button>
			</form>
			<ul class="nav navbar-nav">
				<li <?php if($pactive=='home'){ echo 'class="active"';}?>><a href="<?php echo base_url();?>">Home</a></li>
				<li <?php if($pactive=='contact'){ echo 'class="active"';}?>><a href="<?php echo base_url();?>contact">Contact</a></li>
				<li <?php if($pactive=='about'){ echo 'class="active"';}?>><a href="<?php echo base_url();?>about">About</a></li>
			</ul>
		</nav>
	</div>
</header>
