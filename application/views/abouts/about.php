<!DOCTYPE html>
<html lang="en">
<head>	
	<?php $this->load->view('core/head');?>
	<title>Contact Me</title>
</head>
<body>
	<?php $this->load->view('core/navbar');?>
	<div class="container">
		<h1>About Me</h1>				

		<div class="row">
			<div class="col-md-3 col-sm-3">
				<img class="img-thumbnail img-responsive photo" src="http://placehold.it/300x350" />
			</div>
			<div class="col-md-9 col-sm-9">
				<p>
					 Hi my real name is John Rumour. I've been learning astrology for last 20 years. Yeah, that's true. Sometimes I used to think this is all bullshit. But still I love doing more research on this. Do you know why? I don't know. May be I don't know how to pass time other ways. I've predicted the future for Bill Clinton, George Bush and Osama Binladen. Everything happened as I said. I've even predicted the future for me and unfortunately it's not going like that way.. he hee.
				</p>

				<p>
					I don't know how to fill this paragraph more, so, Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.
				</p>
			</div>
		</div>	

		<p class="social-buttons text-center">
		  <button type="button" class="btn btn-primary btn-lg">Visit my Facebook page</button> &nbsp;
		  <button type="button" class="btn btn-default btn-lg">Follow me on Twitter</button>
		</p>

		<br />

		<p class="lead text-center">
			For my sin, I've written the following interesting books. 
		</p>

		
		
	</div>
	<?php $this->load->view('core/footer');?>
	<script>
	function submitContact()
	{
		alert('Thanks for contact me!');
		$('#frmContact')[0].reset();
	}
	</script>
</body>
</html>