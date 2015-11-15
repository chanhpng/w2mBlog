<!DOCTYPE html>
<html lang="en">
<head>	
	<?php $this->load->view('core/head');?>
	<title>Blog Bài viết</title>
</head>
<body>
	<?php $this->load->view('core/navbar');?>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<?php
				foreach($topics as $t)
				{
					echo '
						<article>
							<h2><a href="'.base_url().'detail/'.base64_encode($t->tid.'|'.$page).'">'.$t->title.'</a></h2>
							<div class="row">
								<div class="col-sm-6 col-md-6">
									<span class="glyphicon glyphicon-folder-open"></span> &nbsp;<a href="#">'.$t->catename.'</a>';
					$arrTag = explode('|',$t->tags);
					echo '&nbsp;&nbsp;<span class="glyphicon glyphicon-bookmark"></span> ';
					if(count($arrTag)>0)
					{
						$itag = 0;
						foreach($arrTag as $tag)
						{
							if($itag>0)
								echo ', ';
							echo '<a href="#">'.$tag.'</a>';
							$itag++;
						}
					}					
					echo '		</div>
								<div class="col-sm-6 col-md-6">
									<span class="glyphicon glyphicon-pencil"></span> <a href="'.base_url().'detail/'.base64_encode($t->tid).'#comments">'.$t->cmt_nums.' Comments</a>			          		
									&nbsp;&nbsp;<span class="glyphicon glyphicon-time"></span> '.$t->dateadd.'			          		
								</div>
							  </div>
							  <hr>
							  <img src="'.base_url().'images/topics/'.$t->main_img.'" class="img-responsive">
							  <br />
							  <p class="lead">'.$t->description.'</p>

							  <p>'.$t->showreadmore.'</p>

							  <p class="text-right">
								  <a href="'.base_url().'detail/'.base64_encode($t->tid.'|'.$page).'">
									continue reading...
								  </a>
							  </p>			          
							  <hr>
						</article>
					';
				}
				?>
				
					
				<ul class="pager">
					<li class="previous"><a href="#">&larr; Previous</a></li>
					<li class="next"><a href="#">Next &rarr;</a></li>
				</ul>
			</div>
			<div class="col-md-4">
				<div class="well text-center">
					<p class="lead">
						Don't want to miss updates? Please click the below button!
					</p>
					<button class="btn btn-primary btn-lg" onclick="submitSub()">Subscribe to my feed</button>
				</div>

				<!-- Latest Posts -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Latest Posts</h4>
					</div>
					<ul class="list-group">
						<?php
						foreach($topics_lasted as $tl)
						{
							echo '<li class="list-group-item"><a href="'.base_url().'detail/'.base64_encode($tl->tid.'|'.$page).'">'.$tl->title.'</a></li>';
						}
						?>
					</ul>
				</div>

				<!-- Categories -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Categories</h4>
					</div>
					<ul class="list-group">
						<?php
						foreach($categories as $cate)
						{
							echo '<li class="list-group-item"><a href="#">'.$cate->catename.'</a></li>';
						}
						?>
					</ul>
				</div>

				<!-- Tags -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Tags</h4>
					</div>
					<div class="panel-body">
						<ul class="list-inline">
							<li><a href="#">Aries</a></li>
							<li><a href="#">Fire</a></li>
							<li><a href="#">Mars</a></li>
							<li><a href="#">Taurus</a></li>
							<li><a href="#">Earth</a></li>
							<li><a href="#">Moon</a></li>
							<li><a href="#">Gemini</a></li>
							<li><a href="#">Air</a></li>
							<li><a href="#">Mercury</a></li>
							<li><a href="#">Cancer</a></li>
						</ul>
					</div>
				</div>

				<!-- Recent Comments -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Recent Comments</h4>
					</div>
					<ul class="list-group">
						<li class="list-group-item">No comment!</li>
						<!--<li class="list-group-item"><a href="#">I don't believe in astrology but still your writing style is really great! - <em>john</em></a></li>
						<li class="list-group-item"><a href="#">Wow.. what you said is really true! I'm an aries though - <em>Anto</em></a></li>
						<li class="list-group-item"><a href="#">Does capricorn and aries is compatibile? - <em>Sarah</em></a></li>
						<li class="list-group-item"><a href="#">I'm a cancer woman been in love with Leo. Will this work? - <em>Mary</em></a></li> -->
					</ul>
				</div>
			</div>
		</div>
	</div>
	<?php $this->load->view('core/footer');?>
	<script>
	function submitSub()
	{
		alert("Thanks for subscription!");
	}
	</script>
</body>
</html>