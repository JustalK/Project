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
		<script src="js/three.min.js"></script>
		
		<!-- Tetris - CSS/JAVASCRIPT/JQUERY -->
		<script src="js/main.js"></script>
		
		
		<style>
		html,body {
			margin: 0;
			height: 100%; 
			background: #000000;
			overflow: hidden;
			color: #333333;
			font-family: ‘Palatino Linotype’, ‘Book Antiqua’, Palatino, serif;
		}
		</style>
	</head>

	<body>
		<div id="content1">
			<?php 
				$html = file_get_contents('http://stackoverflow.com/questions/ask');
				$c = curl_init('http://stackoverflow.com/questions/ask');
				curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
				//curl_setopt(... other options you want...)
				
				$html = curl_exec($c);
				
				if (curl_error($c))
					die(curl_error($c));
				
				// Get the status code
				$status = curl_getinfo($c, CURLINFO_HTTP_CODE);
				$output = curl_exec($ch);
				echo $output;
				curl_close($c);
			?>
			<div id="content2" >
				<div id="content-top">
					<div class="big-block left">
						<div class="block block-side block-color right bottom" id="block1"></div>
					</div>
					<div class="big-block right">
						<div class="block block-side block-color left bottom" id="block2"></div>
					</div>
					<div class="big-block center">
						<div class="block block-color block-center" id="block3"></div>
					</div>
				</div>
				<div id="content-center">
						<div class="block block-color block-center" id="block7"></div>
				</div>
				<div id="content-bot">
					<div class="big-block left">
						<div class="block block-side block-color right top" id="block4"></div>
					</div>	
					<div class="big-block right">
						<div class="block block-side block-color left top" id="block5"></div>
					</div>
					<div class="big-block center">
						<div class="block block-color block-center" id="block6"></div>
					</div>			
				</div>
			</div>
		</div>
	</body>

</html>