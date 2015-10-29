<!DOCTYPE html PUBLIC "- //W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

	<head>
		<!-- Encoding of the file -->
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		
		<!-- Design of the tab for the browser -->
		<title>Kevin "Latsuj" Justal</title>
		<link rel="The icon for the tab" href="images/logo.png" type="image/x-icon" />
		
		<!-- Metadata -->
		<link rel="the rdf's metadata" type="application/rdf+xml" href="metadata/rdf.xml"/>
		
		<!-- CSS -->
		<link rel="stylesheet" href="css/main.css">
		
		<!-- Latest compiled and minified CSS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		
		<!-- WEBGL -->
		<script src="js/jquery-1.11.3.min.js"></script>
		
		<!-- Tetris - CSS/JAVASCRIPT/JQUERY -->
		<script src="js/main.js"></script>

		<?php include 'php/functions.php'; ?>
	</head>
	<body>
	
	    <?php  
	    	$content = get_web_page("https://github.com/Latsuj");
	    	$contrib = get_string_between($content['content'], '<div class="contrib-column table-column">', '</div>');
    	?>  
	
		<!-- load -->
	
		<div id="content1">
			<?php include('header.html');?>
			
			<div id="projects">
				<?php include('projects.html');?>
			</div>
			
			<div id="about-me">
				<?php include('aboutMe.html');?>			
			</div>
			
			<div id="articles">
				<?php include('articles.php');?>		
			</div>

			<div id="content2">
				<?php include('menu.html');?>
			</div>
		</div>
	</body>

</html>