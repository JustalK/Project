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
		<div id="content1" style="background:#000000;">
			<div id="content2" >
				<div id="content-top" style="width:100%;height:35%;position:relative;">
					<div id="block-top-left" style="width:30%;height:100%;position:absolute;left:0;">
						<div id="block1" style="position:absolute;right:0;bottom:0;width:80%;height:80%;background:#E6E6E6"></div>
					</div>
					<div id="block-top-right" style="width:30%;height:100%;position:absolute;right:0;">
						<div id="block2" style="position:absolute;left:0;bottom:0;width:80%;height:80%;background:#E6E6E6"></div>
					</div>
					<div id="block-top-center" style="width:30%;height:100%;position:absolute;left:0;right:0;margin:auto;">
						<div id="block3" style="position:absolute;width:100%;height:100%;background:#E6E6E6"></div>
					</div>
				</div>
				<div id="content-center" style="position:absolute;bottom:0;top:0;margin:auto;width:100%;height:20%;background:#E6E6E6;">
				</div>
				<div id="content-bot" style="position:absolute;width:100%;height:35%;bottom:0px;">
					<div id="block-top-left" style="width:30%;height:100%;position:absolute;left:0;">
						<div id="block1" style="position:absolute;right:0;top:0;width:80%;height:80%;background:#E6E6E6"></div>
					</div>	
					<div id="block-top-right" style="width:30%;height:100%;position:absolute;right:0;">
						<div id="block2" style="position:absolute;left:0;top:0;width:80%;height:80%;background:#E6E6E6"></div>
					</div>
					<div id="block-top-center" style="width:30%;height:100%;position:absolute;left:0;right:0;margin:auto;background: #00FFFF;">
						<div id="block3" style="position:absolute;width:100%;height:100%;background:#E6E6E6"></div>
					</div>			
				</div>
			</div>
		</div>
	</body>

</html>