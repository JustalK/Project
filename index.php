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
	
		<!-- load -->
	
		<div id="content1">
			<div id="content2" >
				<div id="content-top">
					<div class="big-block left">
						<div class="block block-side right bottom" id="block1">
							<div class="load-left" style="position:absolute;left:0;bottom:0;width:1px;height:0%;background: #00FFFF"></div>
							<div class="load-top" style="position:absolute;left:0;top:0;left:0;width:0%;height:1px;background: #00FFFF"></div>
							<div class="load-right" style="position:absolute;right:0;top:0;width:1px;height:0%;background: #00FFFF"></div>
							<div class="load-bot" style="position:absolute;bottom:0;right:0;width:0%;height:1px;background: #00FFFF"></div>
						</div>
					</div>
					<div class="big-block right">
						<div class="block block-side left bottom" id="block2">
							<div class="load-left" style="position:absolute;left:0;bottom:0;width:1px;height:0%;background: #00FFFF"></div>
							<div class="load-top" style="position:absolute;left:0;top:0;left:0;width:0%;height:1px;background: #00FFFF"></div>
							<div class="load-right" style="position:absolute;right:0;top:0;width:1px;height:0%;background: #00FFFF"></div>
							<div class="load-bot" style="position:absolute;bottom:0;right:0;width:0%;height:1px;background: #00FFFF"></div>
						</div>
					</div>
					<div class="big-block center">
						<div class="block block-center bottom" id="block3">
							<div class="load-right" style="position:absolute;left:0;bottom:0;width:1px;height:0%;background: #00FFFF"></div>
							<div class="load-bot" style="position:absolute;left:0;top:0;left:0;width:0%;height:1px;background: #00FFFF"></div>
							<div class="load-left" style="position:absolute;right:0;top:0;width:1px;height:0%;background: #00FFFF"></div>
							<div class="load-top" style="position:absolute;bottom:0;right:0;width:0%;height:1px;background: #00FFFF"></div>
						</div>
					</div>
				</div>
				<div id="content-center">
						<div id="l1" style="position:absolute;left:0;bottom:0;width:1px;height:0%;background: #00FFFF"></div>
						<div id="l2" style="position:absolute;left:0;top:0;left:0;width:0%;height:1px;background: #00FFFF"></div>
						<div id="l3" style="position:absolute;right:0;top:0;width:1px;height:0%;background: #00FFFF"></div>
						<div id="l4" style="position:absolute;bottom:0;right:0;width:0%;height:1px;background: #00FFFF"></div>
						<div class=" block-center vcenter invisible" id="block7"><h1></h1></div>
				</div>
				<div id="content-bot">
					<div class="big-block left">
						<div class="block block-side right top" id="block4">
							<div class="load-left" style="position:absolute;left:0;bottom:0;width:1px;height:0%;background: #00FFFF"></div>
							<div class="load-top" style="position:absolute;left:0;top:0;left:0;width:0%;height:1px;background: #00FFFF"></div>
							<div class="load-right" style="position:absolute;right:0;top:0;width:1px;height:0%;background: #00FFFF"></div>
							<div class="load-bot" style="position:absolute;bottom:0;right:0;width:0%;height:1px;background: #00FFFF"></div>		
						</div>
					</div>	
					<div class="big-block right">
						<div class="block block-side left top" id="block5">
							<div class="load-left" style="position:absolute;left:0;bottom:0;width:1px;height:0%;background: #00FFFF"></div>
							<div class="load-top" style="position:absolute;left:0;top:0;left:0;width:0%;height:1px;background: #00FFFF"></div>
							<div class="load-right" style="position:absolute;right:0;top:0;width:1px;height:0%;background: #00FFFF"></div>
							<div class="load-bot" style="position:absolute;bottom:0;right:0;width:0%;height:1px;background: #00FFFF"></div>					
						</div>
					</div>
					<div class="big-block center">
						<div class="block block-center" id="block6">
							<div class="load-right" style="position:absolute;left:0;bottom:0;width:1px;height:0%;background: #00FFFF"></div>
							<div class="load-bot" style="position:absolute;left:0;top:0;left:0;width:0%;height:1px;background: #00FFFF"></div>
							<div class="load-left" style="position:absolute;right:0;top:0;width:1px;height:0%;background: #00FFFF"></div>
							<div class="load-top" style="position:absolute;bottom:0;right:0;width:0%;height:1px;background: #00FFFF"></div>
						</div>
					</div>			
				</div>
			</div>
		</div>
	</body>

</html>