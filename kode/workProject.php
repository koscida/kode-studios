<?php
$id = $_POST['id'];
//echo $id; die();

include 'projects.php';
$project = $projects[$id];
?>

	<div class="container12">

		<div class="row">
			<div class="column10">
				<h3><?php echo $project['preview_name']; ?></h3>
			</div>
			<div class="column2">
				<div class="allProjects sprite"></div>
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
			<div class="column6">
				<div class="images">
					<?php 
						$imageSelectors = null;
						$images = null;
						$it = 1;
						foreach($project['project_images'] as $image) { 
							$images[] = '<img src="' . $image . '" id="gallery_image_' . $id . '_' . $it . '" class="gallery_image ' . ($it==1?'active':'') . '" />';
							$imageSelectors[] = '<div id="selectors_img_' . $id . '_' . $it . '" class="selectors_img ' . ($it==1?'active':'') . '" data-id="' . $id . '" data-it="' . $it . '">' . $it . '</div>';
							$it++;
						} 
						echo '<div class="gallery" id="gallery' . $id . '">' . implode($images) . '</div>';
						echo '<div class="selectors" id="selectors' . $id . '"><div class="selectorsInner">' . implode($imageSelectors) . '</div></div>';
					?>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="column2">
				<div class="lastProject sprite"></div>
			</div>
			<div class="column8">&nbsp;</div>
			<div class="column2">
				<div class="nextProject sprite"></div>
			</div>
		</div>
		
	</div>

<?php die(); ?>