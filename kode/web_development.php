<!DOCTYPE html>
<html>
<head>
    <title>Kode Studios</title>
	
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">

    <link href="css/1140.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/layout.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/main.css" rel="stylesheet" type="text/css" media="all" />
    
    <?php 
    	include "projects.php"; 
    ?>
    
</head>
<body>
	
	<header>
		<div class="container12">
			
			<div class="row">
				<div class="prefix4"></div>
				<div id="homeLink" class="link column1 active">
					<div>Home</div>
					<span></span>
				</div>
				<div id="workLink" class="link column1">
					<div>Work</div>
					<span></span>
				</div>
				<div id="aboutLink" class="link column1">
					<div>About</div>
					<span></span>
				</div>
				<div id="contactLink" class="link column1">
					<div>Contact</div>
					<span></span>
				</div>
			</div>
			
		</div>
	</header>
	
	<article id="page">
	
		<section id="body">
			
			
			<div id="homeSection" class="section">
			
				<div class="head title">
					<div class="container12">
						<div class="column12">
							<h1>Kode Studios</h1>
							<p>web design and development</p>
						</div>
					</div>
				</div>
			
				<div class="content">
					<div class="container12">
					
						<div class="row">
							<div class="column12">
								<h3>From <span class="bold">Concept</span> to <span class="bold">Completion</span>, we'll take care of everything</h3>
							</div>
						</div>
						
						<div class="row">
							<div class="column4 process">
								<div id="sprite_design" class="sprite"></div>
								<h4>Design</h4>
								<p>Design begins with the client's needs and desires, where the scope of the project 
								begins to be refined</p>
							</div>
							
							<div class="column4 process">
								<div id="sprite_develop" class="sprite"></div>
								<h4>Develop</h4>
								<p>Development is a cyclical process, we continually touch base with 
								our clients to make sure the project is on track</p>
							</div>
							
							<div class="column4 process">
								<div id="sprite_deliver" class="sprite"></div>
								<h4>Deliver</h4>
								<p>Projects are deployed and work is delivered to the client in a timely manner</p>
							</div>
						</div>
					
					</div>
				</div>
				
			</div>
			
			
			<div id="workSection" class="section">
			
				<div class="head">
					<div class="container12">
						<h2 class="column12">Portfolio of Work</h2>
					</div>
				</div>
				
				<div class="content" id="workSectionContent">
				
					<div id="proj0" class="project loaded">
						<div class="container12">
						
							<?php 
							foreach($projects as $id => $project) {
								if( ($id % 3) == 1)
									echo '<div class="row">';
								?>
								<div class="column4 work">
									<div class="preview" data-id="<?php echo $id; ?>">
										<img src="<?php echo $project['preview_image']; ?>" />
										<span class="overlay overlayFade"></span>
										<span class="overlay overlayName">
											<span><?php echo $project['preview_name']; ?></span>
										</span>
										
									</div>
								</div>
								<?php 
								if( ($id % 3) == 0)
									echo '</div>';
							}
							?>
							
							
							
						</div>
					</div>
						
					<?php 
					foreach($projects as $id => $project) {
						?>
						<div id="proj<?php echo $id; ?>" class="project">
							<img src="images/ajaxSpinner.gif" class="spinner"/>
							<div class="projData"></div>
						</div>
							
						<?php								
					}
					?>
						
				</div><!-- end of <div class="content"> -->
			</div>
			
			
			<div id="aboutSection" class="section">
				
				<div class="head">
					<div class="container12">
						<h2 class="column12">About Kode Studios</h2>
					</div>
				</div>
				
				<div class="content">
					<div class="container16">
					
						<div class="row">
							<div class="column16">
								<p>Kode Studios is a web design and development firm, founded by Brittany Kos in 2013 
								in Boulder, Colorado. Since then Kode has been working on building their web presence by 
								assisting in local web projects around the comminuty.</p>
								<p>We strive to build beautiful websites, while maintaining a strong focus on our clients's 
								needs and desires.  We can help you build an online presence, update an existing website, or 
								start your online brand from scratch.</p>
							</div>
						</div>
						
						<div class="row">
							<div class="column2">
								<img src="images/brit_1.jpg" class="self" />
							</div>
							<div class="column10">
								<p>Brittany has been developing websites professionally since 2010. She worked in industry 
								before branching out on her own and founding Kode.  She has a background in Computer Science 
								and User Experience as well as an eye for design, which puts her in a unique position as an 
								all-inclusive web developer and designer. She focuses in PHP, MySQL, Javascript, HTML5, and 
								CSS3, and also does work with WordPress and Drupal to round out her portfolio. </p>
							</div>
							<div class="column4">
								<h4>Contact</h4>
								<p id="brit_phone_number" class="contact_info"></p>
								<p id="brit_email" class="contact_info"></p>
								<a href="http://www.twitter.com/koscida" class="social"><span id="sprite_twitter" class="sprite"></span></a>
								<a href="http://www.linkedin.com/pub/brittany-kos/4a/983/638" class="social"><span id="sprite_linkedin" class="sprite"></span></a>
							</div>
						</div>
						
					</div>
				</div>
				
			</div>
			
			
			<div id="contactSection" class="section">
				
				<div class="head">
					<div class="container12">
						<h2 class="column12">Contact Us</h2>
					</div>
				</div>
				
				<div class="content">
					<div class="container12">
					
						<div class="row">
						
							
							
							<div class="column5">
								<p>Interested in working with us or getting a quote? Drop us a line.  We're currently open for contract 
								work and are always interested in hearing from you.</p>
								
								<p>Or you can email us directly at <span id="kode_email"></span>
								</p>
							</div>
							
							<div class="column6 prefix1">
								<div id="emailTarget"></div>
								<form id="emailForm">
									<div class="inputWrapper">
										<label>Name*</label>
										<input type="text" name="name" />
									</div>
									<div class="inputWrapper">
										<label>Email*</label>
										<input type="text" name="email" />
									</div>
									<div class="inputWrapper">
										<label>Message*</label>
										<textarea name="message"></textarea>
									</div>
									<div class="honeypotWrapper">
										<input type="text" class="honeypotInput" name="honeypot" autocomplete="off" placeholder="Leave this blank if you are human" />
									</div>
									<div class="inputWrapper">
										<input type="submit" class="smBtn" value="Send" id="sendEmail" />
									</div>
								</form>
							</div>
							
						</div>
						
					</div>
				</div>
			
			</div>
			
			
		</section>
		
		<footer>
			
		</footer>
		
	</article>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
	<script src="js/jquery.form.min.js" type="text/javascript"></script>
	<script src="js/ajaxSubmit.js" type="text/javascript"></script>
    <script src="js/common.js" type="text/javascript"></script>
    <script src="js/tracking1.js" type="text/javascript"></script>

</body>
</html>