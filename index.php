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
			<div style="position:absolute;width:100%;height:10%;">
				<div class="vcenter" style="position:absolute;left:0;height:100%;">
	    			<h3>Current streak : <?php print(get_string_between($contrib, '<span class="contrib-number">', '</span>')); ?></h3>
	    		</div>
			</div>
			
			<div style="position:absolute;bottom:0;width:100%;height:10%;">
				<div class="vcenter" style="position:absolute;right:0;height:100%;">
	    			<h3>Justal "Latsuj" K. - 2014</h3>
	    		</div>
			</div>
			
			
			
			<div class="rayon load-top" style="position:absolute;left:0;top:10%;right:0;margin:auto;width:0%;height:1px;background: #00FFFF"></div>
			<div class="rayon load-bot" style="position:absolute;bottom:10%;left:0;right:0;margin:auto;width:0%;height:1px;background: #00FFFF"></div>
			
			<div id="projects">
				<?php include('projects.html');?>
			</div>
			
			<div id="about-me">
				<?php include('aboutMe.html');?>			
			</div>
			
			<div id="articles">
				<?php include('articles.html');?>		
			</div>

			<div id="content2">
				<?php include('menu.html');?>
			</div>
		</div>
	</body>

</html>