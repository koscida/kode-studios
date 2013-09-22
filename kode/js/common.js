$(document).ready(function (){	
	/* navigation */
	var sections = {},
		sectionsHeight = {},
		it = 0,
		_height = $(window).height(),
		_width = $(window).width(),
		currentSection = 0;
	$('.section').each(function(){
		sections[it] = $(this).offset().top - 40;
		sectionsHeight[it] = $(this).height();
		it++;
	});
		
	$(".link").click(function() {
		var index = $(this).index();
		$('html, body').animate({
			scrollTop: (sections[index])
		}, 1000);
	});
	
	
	$(document).scroll(function() {
		var pos = $(this).scrollTop();
		
		if(pos >= sections[currentSection] && pos < (sections[currentSection] + sectionsHeight[currentSection])) {}
		else {
			for(i in sections){
				if(pos >= sections[i] && pos < (sections[i] + sectionsHeight[i])){
					//alert("pos: " + pos + "\npos + height: " + pos+_height + "\ni: " + i + "\ncurrsec: "+ currentSection);
					var j = parseInt(i) + 1;
					$(".link.active").removeClass("active");
					$(".link:nth-of-type("+j+")").addClass("active");
					currentSection = i;
				}  
			}
		}
			
	});
	
	
	/* replace info */
	$("#brit_phone_number").html("720-270-5003");
	$("#brit_email").html("brittany@kodestudios.com");
	
	
	
	/* **************** */
	/*		work		*/
	/* **************** */
	// position projects
	var projectCount = 0,
		startPos = {},
		currentProject = 0;
	$(".project").each(function(){
		var l = (_width * projectCount);
		$(this).css("left", l + "px");
		startPos[projectCount] = l;
		projectCount++;
	});
	
	// click scroll
	$(".preview").click(function(){
		previewScroll($(this).attr("data-id"));
	});
	$(".allProjects").click(function(){
		previewScroll(0);
	});
	$(".nextProject").click(function(){
		previewScroll(parseInt(currentProject) + 1);
	});
	$(".lastProject").click(function(){
		previewScroll(parseInt(currentProject) - 1);
	});
	function previewScroll(position) {
		$('#workSectionContent').animate({
			scrollLeft: (startPos[position])
		}, 1000);
		currentProject = position;
	}
	
	
	$(".selectors_img").click(function(){
		
		var id = $(this).attr("data-id");
		var it = $(this).attr("data-it");
		
		$("#gallery" + id + " .active").removeClass("active").fadeOut("fast", function(){
			$("#gallery_image_" + id + "_" + it).addClass("active").fadeIn("fast").css("display","block");;
		});
		
		
		$("#selectors" + id + " .active").removeClass("active");
		$("#selectors_img_" + id + "_" + it).addClass("active");
	});
	
});




function sectionHeight() {
	var height = window.innerHeight;
	$(".section").css("min-height", height);
}