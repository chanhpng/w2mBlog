<!DOCTYPE html>
<html lang="en">
<head>	
	<?php $this->load->view('core/head');?>
	<title><?php echo $topics["title"]?></title>
</head>
<body>
	<?php $this->load->view('core/navbar');?>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<article>
						<h1><a href="<?php echo base_url().'detail/'.base64_encode($topics["tid"].'|'.$page)?>"><?php echo $topics["title"]?></a></h1>

				        <div class="row">
				          	<div class="col-sm-6 col-md-6">
				          		<span class="glyphicon glyphicon-folder-open"></span> &nbsp;<a href="#"><?php echo $topics["catename"]?></a>
								<?php
								$arrTag = explode('|',$topics["tags"]);
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
								?>
				          	</div>
				          	<div class="col-sm-6 col-md-6">
				          		<span class="glyphicon glyphicon-pencil"></span> <a href="singlepost.html#comments"><?php echo $topics["cmt_nums"]?> Comments</a>			          		
				          		&nbsp;&nbsp;<span class="glyphicon glyphicon-time"></span> <?php echo $topics["dateadd"]?>			          		
				          	</div>
				          </div>
				          <hr>
						  <?php
						  if($topics["main_img"]!='')
						  {
							echo '<img src="'.base_url().'images/topics/'.$topics["main_img"].'" class="img-responsive">';  
						  }
						  else
						  {
							  echo '<img src="'.$topics["extenal_img"].'" class="img-responsive">';
						  }
						  ?>
				          <br />
				          <p class="lead"><?php echo $topics["description"]?></p>
						  <p><?php echo $topics["fullcontent"]?></p>

				          <hr>
					</article>				

					<ul class="pager">
						<li class="previous"><a href="<?php echo base_url().$page?>">&larr; Back to posts</a></li>
					</ul>	

					<!-- Comment form -->
					<div class="well">
						<h4>Leave a comment</h4>
						<form role="form" class="clearfix" id="frmCmt">
						  <div class="col-md-6 form-group">
						    <label class="sr-only" for="name">Name</label>
						    <input type="text" class="form-control" id="name" placeholder="Name">
						  </div>
						  <div class="col-md-6 form-group">
						    <label class="sr-only" for="email">Email</label>
						    <input type="email" class="form-control" id="email" placeholder="Email">
						  </div>
						  <div class="col-md-12 form-group">
						    <label class="sr-only" for="email">Comment</label>
						    <textarea class="form-control" id="comment" placeholder="Comment"></textarea>
						  </div>
						  <div class="col-md-12 form-group text-right">
						  	<button type="button" onclick="javascript:submitCmt()" class="btn btn-primary">Submit</button>
						  </div>
						</form>					
					</div>

					<hr />

					<ul id="comments" class="comments">
						<!-- <li class="comment">
							<div class="clearfix">
								<h4 class="pull-left">John</h4>
								<p class="pull-right">9:41 PM on August 24, 2013</p>
							</div>
							<p>
								<em>I don't believe in astrology but still your writing style is really great!</em>
							</p>
						</li>

						<li class="comment clearfix">
							<div class="clearfix">
								<h4 class="pull-left">John</h4>
								<p class="pull-right">9:41 PM on August 24, 2013</p>
							</div>
							<p>
								<em>I don't believe in astrology but still your writing style is really great!</em>
							</p>
						</li>-->
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
						<li class="list-group-item"><a href="#">I'm a cancer woman been in love with Leo. Will this work? - <em>Mary</em></a></li>-->
					</ul>
				</div>
			</div>
		</div>
	</div>
	<?php $this->load->view('core/footer');?>
	<script>
		function submitCmt()
		{
			alert("Thanks!");
			$('#frmCmt')[0].reset();
		}
		function submitSub()
		{
			alert("Thanks for subscription!");
		}
	</script>
</body>
</html>