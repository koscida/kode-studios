<!DOCTYPE html>
<html>
<head>
    <title>Kode Studios</title>
	
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">

    <link href="css/1140.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/main.css" rel="stylesheet" type="text/css" media="all" />
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400|Voltaire' rel='stylesheet' type='text/css'> -->
    
    <link href='http://fonts.googleapis.com/css?family=Aldrich|Abel' rel='stylesheet' type='text/css'>
    
    <script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="js/common.js" type="text/javascript"></script>
    <script src="js/tracking.js" type="text/javascript"></script>
    
    <?php 
    	include "projects.php"; 
    ?>
    
</head>
<body>
	
	<header>
		<div class="container12">
			
			<div class="row prefix4">
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
	
	<section id="page">
	
		<section id="body">
			
			
			<div id="homeSection" class="section">
			
				<div id="title" class="head">
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
								<img src="images/documents.png" />
								<h4>Design</h4>
								<p>Design begins with the client's needs and desires, where the scope of the project 
								begins to be refined</p>
							</div>
							
							<div class="column4 process">
								<img src="images/arrows_rotated.png" />
								<h4>Develop</h4>
								<p>Development is a cyclical process, we continually touch base with 
								our clients to make sure the project is on track</p>
							</div>
							
							<div class="column4 process">
								<img src="images/monitor.png" />
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
				
					<div id="works" class="project">
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
					</div><!-- end of <div id="works"> -->
					
					
						
					<?php 
					foreach($projects as $id => $project) {
						?>
						<div id="proj1" class="project">
							<div class="container12">
						
								<div class="row">
									<div class="column10">
										<h3><?php echo $project['preview_name']; ?></h3>
									</div>
									<div class="column2">
										<img  class="allProjects" src="images/redirect.png" height="40" width="40" />
									</div>
								</div>
							
								<div class="row">
									<div class="column6 description">
										<p><?php echo $project['project_description']; ?></p>
										<p><a href="<?php echo $project['project_link_url']; ?>"><?php echo $project['project_link_text']; ?></a></p>
										<ul class="skills">
											<?php 
											foreach($project['project_skills'] as $skill) { 
												echo "<li>$skill</li>";
											} ?>
										</ul>
									</div>
									<div class="column6 images">
										<?php 
											foreach($project['project_images'] as $image) { 
												echo "<img src='$image' />";
											} ?>
									</div>
								</div>
								
								<div class="row">
									<div class="column2">
										<img class="lastProject" src="images/left.png" height="40" width="40" />
									</div>
									<div class="column2 prefix8">
										<img class="nextProject" src="images/right.png" height="40" width="40" />
									</div>
								</div>
								
							</div>
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
								<a href="http://www.linkedin.com/pub/brittany-kos/4a/983/638" class="social"><img src="images/linkedin.png" /></a>
								<a href="http://www.twitter.com/koscida" class="social"><img src="images/twitter.png" /></a>
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
								
								<p>Or email us directly at kode@kodestudios.com
								</p>
							</div>
							
							<div class="column6 prefix1">
								<form>
									<div class="inputWrapper">
										<label>Name</label>
										<input type="text" class="name" />
									</div>
									<div class="inputWrapper">
										<label>Email</label>
										<input type="text" class="email" />
									</div>
									<div class="inputWrapper">
										<label>Message</label>
										<textarea class="name"></textarea>
									</div>
									<div class="honeypotWrapper">
										<input type="text" class="honeypotInput" autocomplete="off" placeholder="Leave this blank if you are human" />
									</div>
									<div class="inputWrapper">
										<input type="submit" class="smBtn" value="Send" />
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
		
	</section>

</body>
</html>