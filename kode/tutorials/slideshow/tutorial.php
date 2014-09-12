<!DOCTYPE html>
<html>
<head>

	<title>Kode Tutorials: Slideshow</title>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
	
	<link href="css/1140.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/layout.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/main.css" rel="stylesheet" type="text/css" media="all">
	
	<link href="css/shCoreDefault.css" rel="stylesheet" type="text/css" media="all">

</head>
<body>

	<header>
		<div class="container12">
			<div class="row">
				<div class="column9">&nbsp;</div>
				<div class="column3">
					<span class="link_arrow"></span>
					<a href="http://kodestudios.com" class="link">Back to Kode Studios</a>
				</div>
				
			</div>
		</div>
	</header>
	
	<section id="page">
	
		<section id="body">
			
			<div id="title">
				<div class="container12">
					<div class="column12">
						<h1>Intro to Javascript: <br/>Building an image slideshow</h1>
						<p>Kode Studios Tutorials</p>
					</div>
				</div>
			</div>
				
			<div class="container12">
				
				
				<div class="row">
					<div class="column12">
						<h3>Introduction</h3>
						<p>
							This tutorial is meant for beginners to Javascript who have little to
							no coding experience.
						</p>
					</div>
				</div>
				
				<div class="row">
					<div class="column6">
						<p>
							If you already have experience with Javascript, the tutorial for slideshow starts
							on <a href="#step#">Step 9</a>
						</p>
					</div>
					<div class="column6">
						<p>List of Steps</p>
						<ul>
							<li><a href="#step1">Step 1: Set up your files</a></li>
							<li><a href="#step2">Step 2: Add your first line of Javascript</a></li>
						</ul>
					</div>
				</div>
			
			
				<div id="step1" class="step">
				
					<div class="row">
						<h3 class="column12">Step 1: Set up your files</h3>
					</div>
					
					<div class="row">
						<div class="column9">
							<p>Start with a brand new HTML page, along with blank css and js pages.</p>
							<p>
								I would recommend setting up a file structure similar to the one at the right.  
								Make separate folders for your css, javascript (js), and images.  This will help 
								keep your website more organized, and it will be easier to find files of similar types.
							</p>
							<p>
								<a href="steps/step1.zip" target="_blank" class="smBtn">Download Code</a>
							</p>
						</div>
						<div class="column3">
							<div class="screenshot1">
								<img src="images/s1_c1.png">
							</div>
						</div>
					</div>
					
				</div>
				
				
				<div id="step2" class="step">
				
					<div class="row">
						<h3 class="column12">Step 2: Add your first line of Javascript</h3>
					</div>
					
					<div class="row">
						<div class="column12">
							<p>
								All Javascript will be added in the js folder, in a file called "script.js".
								Add the following line of javascript to your script.js file. This line of 
								code will add the line "Hello World" to our page.  
							</p>
							<p class="code_type">Javascript</p>
							<pre class="brush: js;">
								document.write("Hello World");
							</pre>
							<p>
								"document" is an object that refers to our entire HTML page. The period
								after document is separating the 
								object from other objects and methods (similar to other object-oriented languages).
							</p>
							<p>
								"write" is a method that writes directly to the web page.
							</p>
							<p>
								Now save the Javascript and open index.html in a browser.  Whatch what happens.
								Most likely you will see something similar to the following:
							</p>
							<div class="screenshot">
								<iframe src="steps/step2/index.html" height="70"></iframe>
							</div>
							
							<p>
								Why do you think this is happening?
							</p>
							
							<p>
								The reason "Hello World" does not appear within the white block is because of the location of
								our Javascript.  If you look at the code, we are adding our Javascript file (script.js) inside 
								the head, below our CSS.
							</p>
							<p class="code_type">HTML</p>
							<pre class="brush: xml;" id="s2_c2"></pre>
							<script>
								html =  '&lt;head>\n';
								html += '	<meta charset="UTF-8">\n';
								html += '	<title>Slideshow - Step 2</title>\n';
								html += '	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />\n\n';
								html += '	&lt;src="js/script.js" type="text/javascript">&lt;/script>\n';
								html += '&lt;/head>';
								document.getElementById('s2_c2').innerHTML = html;
							</script>
							<p>
								When a browser runs our HTML code, it goes line by line, starting at the top of the page.  It 
								sees the linking Javascript file within the head, so the Javascript file will be run before anything 
								in the body is run.  This is why the first thing on the webpage is our Javascript line instead of 
								the code we are writting in the body.
							</p>
							<p>
								<a href="steps/step2.zip" target="_blank" class="smBtn">Download Code</a>
							</p>
						</div>
					</div>
					
				</div>
				
				
				<div class="step">
				
					<div class="row">
						<h3 class="column12">Step 3: Change the color of a paragraph</h3>
					</div>
				
					<div class="row">
						<div class="column12">
							<p>
								Now we will be adding a paragraph to our HTML page and changing the text color
								in Javascript.  Add the following lines of code to index.html and script.js.
							</p>
							
							<p class="code_type">HTML</p>
							<pre class="brush: xml;" id="s3_c1"></pre>
							<script>
								html =  '<p id="red_text">This line should be written in red.</p>';
								document.getElementById('s3_c1').innerHTML = html;
							</script>
							
							<p class="code_type">Javascript</p>
							<pre class="brush: js" id="s3_c2"></pre>
							<script>
								html =  'document.getElementById("red_text").style.color = "red";';
								document.getElementById('s3_c2').innerHTML = html;
							</script>
							
							<p>
								In HTML, all we have done is added a paragraph of text with the id "red_text"
							</p>
							<p>
								In Javascript we are looking at the document (our HTML page) for an element with the
								id "red_text".  The method "getElementById" is a great way to access specific parts of our
								HTML page.  Once we have our element with the id "red_text", we look at its styles, 
								then the color atteibute, ans we are going to set the color to red.
							</p>
							
							<p>
								Save your code and view at index.html in a browser window.  You should see something
								similar to the page below
							</p>
							<div class="screenshot">
								<iframe src="steps/step3/index2.html" height="110"></iframe>
							</div>
							
							<p>
								Why do you think this is happening?
							</p>
							<p>
								Again, the problem has to do with where the Javascript is loading within our HTML page.  If we
								read our HTML file line-by-line, the Javascript is running before our HTML body.  This means 
								when we try to change the color of our paragraph, we are changing the color of an element before
								it actually exists.  
							</p>
							<p>
								To solve this problem we need to change where we are loading our Javascript within our HTML page.
							</p>
							
							<p class="code_type">HTML</p>
							<pre class="brush: xml" id="s3_c3"></pre>
							<script>
								html =  '&lt;body>\n\n';
								html += '	<div id="wrapper">\n\n';
								html += '		<h1>Kode Tutorials: Slideshow</h1>\n';
								html += '		<h2>Step 3: Change the color of a paragraph</h2>\n\n';
								html += '		<p id="red_text">This line should be written in red.</p>\n\n';
								html += '	</div>\n\n';
								html += '&lt;script src="js/script.js" type="text/javascript">&lt;/script>\n';
								html += '&lt;/body>\n';
								document.getElementById('s3_c3').innerHTML = html;
							</script>
							
							<p>
								The correct way to add Javascript to an HTML file is at the bottom of the page, after all other HTML 
								markup.
							</p>
							<p>
								This way, the Javascript is the last code that is executed, so if we try to access any elements within
								the HTML page, they will already be created.  Loacing Javascript last also helps with page load time.  
								you have large Javascript files, letting them load last will allow for the rest of the page to load first,
								letting the viewers view content right away instead of waiting for the large files.
							</p>
							
							<p>
								So now our page should look similar to this:
							</p>
							<div class="screenshot">
								<iframe src="steps/step3/index.html" height="110"></iframe>
							</div>
							
							<p>
								<a href="steps/step3.zip" target="_blank" class="smBtn">Download Code</a>
							</p>
						</div>
					</div>
				
				</div>
				
				
				<div class="step">
				
					<div class="row">
						<h3 class="column12">Step 4: Change an image's source</h3>
					</div>
				
					<div class="row">
						<div class="column12">
							
							<p>
								Now add two identical images to your HTML page.  On one image 
								tag add an id called "my_image".
							</p>
							
							<p class="code_type">HTML</p>
							<pre class="brush: xml" id="s4_c1"></pre>
							<script>
								html =  '<img src="images/one.png" />\n';
								html += '<img src="images/one.png" id="my_image"/>';
								document.getElementById('s4_c1').innerHTML = html;
							</script>
							
							<p class="code_type">Javascript</p>
							<pre class="brush: js" id="s4_c2"></pre>
							<script>
								html =  'document.getElementById("my_image").src = "images/two.png";';
								document.getElementById('s4_c2').innerHTML = html;
							</script>
							
							<div class="screenshot">
								<iframe src="steps/step4/index.html" height="240"></iframe>
							</div>
		
		
							
							<p>
								<a href="steps/step4.zip" target="_blank" class="smBtn">Download Code</a>
							</p>
						</div>
					</div>				
				
				</div>
				
				
				<div class="step">
				
					<div class="row">
						<h3 class="column12">Step 5: Add a variable</h3>
					</div>
				
					<div class="row">
						<div class="column12">
							
							<p class="code_type">Javascript</p>
							<pre class="brush: js" id="s5_c1"></pre>
							<script>
								html =  'var image2 = "images/two.png";\n';
								html += 'document.getElementById("my_image").src = image2;';
								document.getElementById('s5_c1').innerHTML = html;
							</script>
							
							<div class="screenshot">
								<iframe src="steps/step5/index.html" height="240"></iframe>
							</div>
		
		
							
							<p>
								<a href="steps/step5.zip" target="_blank" class="smBtn">Download Code</a>
							</p>
						</div>
					</div>				
				
				</div>
				
				
				<div class="step">
				
					<div class="row">
						<h3 class="column12">Step 6: Add an array</h3>
					</div>
				
					<div class="row">
						<div class="column12">
							
							<p class="code_type">Javascript</p>
							<pre class="brush: js" id="s6_c1"></pre>
							<script>
								html =  'var image1 = "images/one.png";\n';
								html += 'var image2 = "images/two.png";\n';
								html += 'var image3 = "images/three.png";\n';
								html += 'var image4 = "images/four.png";\n';
								html += 'var image5 = "images/five.png";\n';
								html += 'document.getElementById("my_image").src = image5;';
								document.getElementById('s6_c1').innerHTML = html;
							</script>
							
							<p class="code_type">Javascript</p>
							<pre class="brush: js" id="s6_c2"></pre>
							<script>
							    html =  'var images = [\n';
							    html += '    "images/one.png",\n';
							    html += '    "images/two.png",\n';
							    html += '    "images/three.png",\n';
							    html += '    "images/four.png",\n';
							    html += '    "images/five.png"\n';
							    html += '];\n\n';
							    html += 'document.getElementById("my_image").src = images[4];';
						    	document.getElementById('s6_c2').innerHTML = html;
							</script>
							
							<div class="screenshot">
								<iframe src="steps/step6/index.html" height="240"></iframe>
							</div>
							
							<p>
								<a href="steps/step6.zip" target="_blank" class="smBtn">Download Code</a>
							</p>
						</div>
					</div>				
				
				</div>
				
				
				<div class="step">
				
					<div class="row">
						<h3 class="column12">Step 7: Add a function</h3>
					</div>
				
					<div class="row">
						<div class="column12">
							
							<p class="code_type">Javascript</p>
							<pre class="brush: js" id="s7_c1"></pre>
							<script>
							    html =  'function change_my_image(){\n';
							    html += '    document.getElementById("my_image").src = images[3];\n';
							    html += '}\n\n';
							    html += 'change_my_image();';
						    	document.getElementById('s7_c1').innerHTML = html;
							</script>
							
							
							<p class="code_type">Javascript</p>
							<pre class="brush: js" id="s7_c2"></pre>
							<script>
							    html =  'var img = 3;\n\n';
							    html += 'function change_my_image(img){\n';
							    html += '    document.getElementById("my_image").src = images[img];\n';
							    html += '}\n\n';
							    html += 'change_my_image();';
						    	document.getElementById('s7_c2').innerHTML = html;
							</script>
							
							
							<p>
								<a href="steps/step7.zip" target="_blank" class="smBtn">Download Code</a>
							</p>
						</div>
					</div>				
				
				</div>
				
				
				<div class="step">
				
					<div class="row">
						<h3 class="column12">Step 8: Add an if/else statement</h3>
					</div>
				
					<div class="row">
						<div class="column12">
							
							<p class="code_type">Javascript</p>
							<pre class="brush: js" id="s8_c1"></pre>
							<script>
							    html =  'var total = images.length;';
						    	document.getElementById('s8_c1').innerHTML = html;
							</script>
							
							<p class="code_type">Javascript</p>
							<pre class="brush: js" id="s8_c2"></pre>
							<script>
							    html =  'var total = images.length;\n\n';
							    html += 'function change_my_image(){\n';
							    html += '    if (total == 5) {\n';
							    html += '        document.getElementById("my_image").src = images[4];\n';
							    html += '    }\n';
							    html += '    else {\n';
							    html += '        document.getElementById("my_image").src = images[0];\n';
							    html += '    }\n';
							    html += '}\n\n';
							    html += 'change_my_image();';
						    	document.getElementById('s8_c2').innerHTML = html;
							</script>
							
							
							<p>
								<a href="steps/step8.zip" target="_blank" class="smBtn">Download Code</a>
							</p>
						</div>
					</div>				
				
				</div>
				
				
				
				
				
				
			
			
			</div>
			
			
			
		
		</section>
		
		<footer></footer>
		
	</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/script.js" type="text/javascript"></script>
<script src="js/shCore.js"></script>
<script src="js/shBrushPlain.js"></script>
<script src="js/shBrushPhp.js"></script>
<script src="js/shBrushJScript.js"></script>
<script src="js/shBrushXml.js"></script>
<script type="text/javascript">SyntaxHighlighter.all();</script>

</body>
</html>