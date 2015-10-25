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
	
	    <?php  
	    
	    function get_web_page( $url )
	    {
	    	$options = array(
	    			CURLOPT_RETURNTRANSFER => true,     // return web page
	    			CURLOPT_HEADER         => false,    // don't return headers
	    			CURLOPT_ENCODING       => "",       // handle all encodings
	    			CURLOPT_USERAGENT      => "spider", // who am i
	    			CURLOPT_AUTOREFERER    => true,     // set referer on redirect
	    			CURLOPT_CONNECTTIMEOUT => 120,      // timeout on connect
	    			CURLOPT_TIMEOUT        => 120,      // timeout on response
	    			CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
	    			CURLOPT_SSL_VERIFYPEER => false     // Disabled SSL Cert checks
	    	);
	    
	    	$ch      = curl_init( $url );
	    	curl_setopt_array( $ch, $options );
	    	$content = curl_exec( $ch );
	    	$err     = curl_errno( $ch );
	    	$errmsg  = curl_error( $ch );
	    	$header  = curl_getinfo( $ch );
	    	curl_close( $ch );
	    
	    	$header['errno']   = $err;
	    	$header['errmsg']  = $errmsg;
	    	$header['content'] = $content;
	    	return $header;
	    }
	   
	    function get_string_between($string, $start, $end){
	    	$string = ' ' . $string;
	    	$ini = strpos($string, $start);
	    	if ($ini == 0) return '';
	    	$ini += strlen($start);
	    	$len = strpos($string, $end, $ini) - $ini;
	    	return substr($string, $ini, $len);
	    }
	    
	    
	    
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
			
			<div id="about-me">
				<div style="position:absolute;left:5%;top:10%;width:25%;height:50%;">
					<img class="data-about-me invisible" style="width:100%;" alt="" src="img/MySign.png" />
				</div>	

				<div style="position:absolute;left:35%;top:10%;width:60%;height:80%;">
					<div id="decor-about-me-box-left" style="position:absolute;left:0;bottom:0;width:1px;height:0;background: #00FFFF"></div>
					<div id="decor-about-me-box-top" style="position:absolute;left:0;top:0;width:0;height:1px;background: #00FFFF"></div>
					<div id="decor-about-me-box-right" style="position:absolute;right:0;top:0;width:1px;height:0;background: #00FFFF"></div>	
					<div id="decor-about-me-box-bot" style="position:absolute;right:0;bottom:0;width:0;height:1px;background: #00FFFF"></div>	
					<h6 class="data-about-me invisible" style="text-transform: none;text-align: left;"><br />
						Pseudo: Latsuj<br />
						Name: Justal K.<br />
						From : France<br />
						Hobby : Codding :p<br /><br />
						If you wanna know something about me, feel free to ask me. You can easily contact me by email or any other ways that I have listed
						below. Be sure I will answer back within the two or three days, I'm still a geek so I'm always connected.
					</h6>
				</div>	
				
				<div id="back-about-me" class="vcenter pointer" style="position:absolute;left:5%;top:70%;width:25%;height:20%;">
					<div id="decor-about-me-box-left2" style="position:absolute;left:0;bottom:0;width:1px;height:0;background: #00FFFF"></div>
					<div id="decor-about-me-box-top2" style="position:absolute;left:0;top:0;width:0;height:1px;background: #00FFFF"></div>
					<div id="decor-about-me-box-right2" style="position:absolute;right:0;top:0;width:1px;height:0;background: #00FFFF"></div>	
					<div id="decor-about-me-box-bot2" style="position:absolute;right:0;bottom:0;width:0;height:1px;background: #00FFFF"></div>
					<h2 class="data-about-me invisible">Back</h2>			
				</div>				
			</div>
			
			<div id="articles">
				
				<div style="position:absolute;left:25%;bottom:0;width:70%;height:100%;">
					<div class="decor-articles-line" style="position:absolute;left:0;bottom:0;width:1px;height:0;background: #00FFFF"></div>
					<div class="decor-articles-line" style="position:absolute;right:0;bottom:0;width:1px;height:0;background: #00FFFF"></div>
					
					<div class="data-articles invisible">
						<div class="selected vcenter pointer" style="width:100%;"><h5>Fichier article de PDF</h5></div>
						<div class="selected vcenter pointer" style="width:100%;"><h5>Fichier article de PDF</h5></div>
					</div>
					
				</div>
				
				<div class="back vcenter" style="position:absolute;left:5%;top:10%;width:15%;height:50%;">
					<div id="decor-articles-box-left" style="position:absolute;left:0;bottom:0;width:1px;height:0;background: #00FFFF"></div>
					<div id="decor-articles-box-top" style="position:absolute;left:0;top:0;width:0;height:1px;background: #00FFFF"></div>
					<div id="decor-articles-box-right" style="position:absolute;right:0;top:0;width:1px;height:0;background: #00FFFF"></div>	
					<div id="decor-articles-box-bot" style="position:absolute;right:0;bottom:0;width:0;height:1px;background: #00FFFF"></div>
					<h4 class="data-articles invisible">Back</h4>
				</div>			
			</div>

			<div id="content2">
					<div class="decor" style="position:absolute;left:25%;bottom:60%;width:1px;height:0%;background: #00FFFF"></div>
					<div class="decor" style="position:absolute;left:20%;bottom:60%;width:1px;height:0%;background: #00FFFF"></div>
					<div class="decor" style="position:absolute;left:22%;bottom:60%;width:1px;height:0%;background: #00FFFF"></div>
					<div class="decor" style="position:absolute;left:38%;bottom:60%;width:1px;height:0%;background: #00FFFF"></div>
					<div class="decor" style="position:absolute;left:42%;bottom:60%;width:1px;height:0%;background: #00FFFF"></div>
					<div class="decor" style="position:absolute;left:45%;bottom:60%;width:1px;height:0%;background: #00FFFF"></div>
					<div class="decor" style="position:absolute;left:60%;bottom:60%;width:1px;height:0%;background: #00FFFF"></div>
					<div class="decor" style="position:absolute;left:78%;bottom:60%;width:1px;height:0%;background: #00FFFF"></div>
					<div class="decor" style="position:absolute;left:75%;bottom:60%;width:1px;height:0%;background: #00FFFF"></div>
					
					<div class="decor" style="position:absolute;left:88%;top:60%;width:1px;height:0%;background: #00FFFF"></div>
					<div class="decor" style="position:absolute;left:90%;top:60%;width:1px;height:0%;background: #00FFFF"></div>
					<div class="decor" style="position:absolute;left:93%;top:60%;width:1px;height:0%;background: #00FFFF"></div>
					
					<div class="decor" style="position:absolute;left:63%;top:60%;width:1px;height:0%;background: #00FFFF"></div>
					<div class="decor" style="position:absolute;left:56%;top:60%;width:1px;height:0%;background: #00FFFF"></div>
					<div class="decor" style="position:absolute;left:52%;top:60%;width:1px;height:0%;background: #00FFFF"></div>
					<div class="decor" style="position:absolute;left:40%;top:60%;width:1px;height:0%;background: #00FFFF"></div>
					
					<div class="decor" style="position:absolute;left:27%;top:60%;width:1px;height:0%;background: #00FFFF"></div>
					<div class="decor" style="position:absolute;left:17%;top:60%;width:1px;height:0%;background: #00FFFF"></div>
					<div class="decor" style="position:absolute;left:12%;top:60%;width:1px;height:0%;background: #00FFFF"></div>
			
				<div id="content-top">
					<div class="big-block left">
						<div class="block block-side right bottom vcenter" id="block1">
							<div class="rayon load-left" style="position:absolute;left:0;bottom:0;width:1px;height:0%;background: #00FFFF"></div>
							<div class="rayon load-top" style="position:absolute;left:0;top:0;left:0;width:0%;height:1px;background: #00FFFF"></div>
							<div class="rayon load-right" style="position:absolute;right:0;top:0;width:1px;height:0%;background: #00FFFF"></div>
							<div class="rayon load-bot" style="position:absolute;bottom:0;right:0;width:0%;height:1px;background: #00FFFF"></div>
							<div class="invisible"><h2>Articles</h2></div>
						</div>
					</div>
					<div class="big-block right">
						<div class="block block-side left bottom vcenter" id="block2">
							<div class="rayon load-left" style="position:absolute;left:0;bottom:0;width:1px;height:0%;background: #00FFFF"></div>
							<div class="rayon load-top" style="position:absolute;left:0;top:0;left:0;width:0%;height:1px;background: #00FFFF"></div>
							<div class="rayon load-right" style="position:absolute;right:0;top:0;width:1px;height:0%;background: #00FFFF"></div>
							<div class="rayon load-bot" style="position:absolute;bottom:0;right:0;width:0%;height:1px;background: #00FFFF"></div>
							<div class="invisible"><h2>Portefolio</h2></div>
						</div>
					</div>
					<div class="big-block center">
						<div class="block block-center bottom vcenter" id="block3">
							<div class="rayon load-right" style="position:absolute;left:0;bottom:0;width:1px;height:0%;background: #00FFFF"></div>
							<div class="rayon load-bot" style="position:absolute;left:0;top:0;left:0;width:0%;height:1px;background: #00FFFF"></div>
							<div class="rayon load-left" style="position:absolute;right:0;top:0;width:1px;height:0%;background: #00FFFF"></div>
							<div class="rayon load-top" style="position:absolute;bottom:0;right:0;width:0%;height:1px;background: #00FFFF"></div>
							<div class="invisible"><h2>Projects</h2></div>
						</div>
					</div>
					
				</div>
				<div id="content-center">
						<div class="block-main">
						<div id="l1" style="position:absolute;left:0;bottom:0;width:1px;height:0%;background: #00FFFF"></div>
						<div id="l2" style="position:absolute;left:0;top:0;left:0;width:0%;height:1px;background: #00FFFF"></div>
						<div id="l3" style="position:absolute;right:0;top:0;width:1px;height:0%;background: #00FFFF"></div>
						<div id="l4" style="position:absolute;bottom:0;right:0;width:0%;height:1px;background: #00FFFF"></div>
						<div class="block-center vcenter invisible" id="block7"><h1>#######</h1></div></div>
						
				</div>
				<div id="content-bot">
					<div class="big-block left">
						<div class="block block-side right top vcenter" id="block4">
							<div class="rayon load-left" style="position:absolute;left:0;bottom:0;width:1px;height:0%;background: #00FFFF"></div>
							<div class="rayon load-top" style="position:absolute;left:0;top:0;left:0;width:0%;height:1px;background: #00FFFF"></div>
							<div class="rayon load-right" style="position:absolute;right:0;top:0;width:1px;height:0%;background: #00FFFF"></div>
							<div class="rayon load-bot" style="position:absolute;bottom:0;right:0;width:0%;height:1px;background: #00FFFF"></div>
							<div class="invisible"><h2>?</h2></div>		
						</div>
					</div>	
					<div class="big-block right">
						<div class="block block-side left top vcenter" id="block5">
							<div class="rayon load-left" style="position:absolute;left:0;bottom:0;width:1px;height:0%;background: #00FFFF"></div>
							<div class="rayon load-top" style="position:absolute;left:0;top:0;left:0;width:0%;height:1px;background: #00FFFF"></div>
							<div class="rayon load-right" style="position:absolute;right:0;top:0;width:1px;height:0%;background: #00FFFF"></div>
							<div class="rayon load-bot" style="position:absolute;bottom:0;right:0;width:0%;height:1px;background: #00FFFF"></div>
							<div class="invisible"><h2>About Me</h2></div>					
						</div>
					</div>
					<div class="big-block center">
						<div class="block block-center vcenter" id="block6">
							<div class="rayon load-right" style="position:absolute;left:0;bottom:0;width:1px;height:0%;background: #00FFFF"></div>
							<div class="rayon load-bot" style="position:absolute;left:0;top:0;left:0;width:0%;height:1px;background: #00FFFF"></div>
							<div class="rayon load-left" style="position:absolute;right:0;top:0;width:1px;height:0%;background: #00FFFF"></div>
							<div class="rayon load-top" style="position:absolute;bottom:0;right:0;width:0%;height:1px;background: #00FFFF"></div>
							<div class="invisible"><h2>GitHub</h2></div>
						</div>
					</div>			
				</div>
			</div>
		</div>
	</body>

</html>