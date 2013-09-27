$(document).ready(function (){	
	/* ******************** */
	/*		navigation		*/
	/* ******************** */
	// get ini section place
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
	
	//nav links
	$(".link").click(function() {
		var index = $(this).index();
		$('html, body').animate({
			scrollTop: (sections[index])
		}, 1000);
	});
	
	// vertical window scroll
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
	$("#kode_email").html("kode@kodestudios.com");
	
	
	
	
	
	/* **************** */
	/*		work		*/
	/* **************** */
	// position project pages off screen
	var projectCount = 0,
		currentProject = 0;
	$(".project").each(function(){
		var l = (_width * projectCount);
		$(this).css("left", l + "px");
		projectCount++;
	});
	
	//resize project widths with new screen size
	var doit;
	$(window).resize(function () {
		clearTimeout(doit);
		doit = setTimeout(windowResize, 100);
	});
	windowResize();
	
	// click horizontal scroll
	$(".preview").click(function(){
		previewScroll($(this).attr("data-id"));
	});
	$(document).on('click', '.allProjects', function() {
		previewScroll(0);
	});
	$(document).on('click', '.nextProject', function() {
		previewScroll(parseInt(currentProject) + 1);
	});
	$(document).on('click', '.lastProject', function() {
		previewScroll(parseInt(currentProject) - 1);
	});
	function previewScroll(position) {
		$(".project").show();
		var w = $(window).width();
		var posLeft = w*(position);
		$('#workSectionContent').animate({
			scrollLeft: posLeft
		}, 1000, function(){
			var c = 0;
			$(".project").each(function(){
				$(this).css("left", (c*w) + "px");
				if($(this).attr("id") != "proj"+position) {
					$(this).hide();
				}
				c++;
			});
		});
		currentProject = position;
		
		if(!$("#proj"+position).hasClass("loaded")) {
			$.ajax({
				complete: function() { $('.spinner').hide(); },
				type: "POST",
				url: "workProject.php",
				data: {id: position},
				success: function(data)
				{
					$('#proj'+position+' > .projData').html(data);
				}
			});
		}
		
	}
	
	// image gallery in project pages
	$(".selectors_img").click(function(){
		
		var id = $(this).attr("data-id");
		var it = $(this).attr("data-it");
		
		$("#gallery" + id + " .active").removeClass("active").fadeOut("fast", function(){
			$("#gallery_image_" + id + "_" + it).addClass("active").fadeIn("fast").css("display","block");
		});
		
		
		$("#selectors" + id + " .active").removeClass("active");
		$("#selectors_img_" + id + "_" + it).addClass("active");
	});
	
	
	
	
	
	/* **************** */
	/*		work		*/
	/* **************** */
	$("#sendEmail").click(function(){
		var url = "emailForm.php"; // the script where you handle the form input.

	    $.ajax({
	           type: "POST",
	           url: url,
	           data: $("#emailForm").serialize(), // serializes the form's elements.
	           success: function(data)
	           {
	        	   if($('#emailTarget').hasClass("shown"))
	        		   $('#emailTarget').slideToggle(function(){
	        			   $(this).html(data).slideToggle();
	        		   });
	        	   else
	        		   $('#emailTarget').html(data).slideToggle().addClass("shown");
	           }
	         });

	    return false; // avoid to execute the actual submit of the form.
		
	});
	
});




function sectionHeight() {
	var height = window.innerHeight;
	$(".section").css("min-height", height);
}

function windowResize() {
	
	// set projects to width of screen
	var w = window.innerWidth;
	$(".project").css("width", w+"px");
	
}