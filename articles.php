<?php
	$tab = scandir("./pdf", 1);
?>

<div style="position:absolute;left:25%;bottom:0;width:70%;height:100%;">
	<div class="decor-articles-line" style="position:absolute;left:0;bottom:0;width:1px;height:0;background: #00FFFF"></div>
	<div class="decor-articles-line" style="position:absolute;right:0;bottom:0;width:1px;height:0;background: #00FFFF"></div>
	
	<div class="data-articles invisible">
		<?php
			for ($i = 0; $i < count($tab)-2; $i++) {
				echo '<a href="./pdf/'.$tab[$i].'"><div class="selected vcenter pointer full"><h5>'.str_replace('_',' ',pathinfo($tab[$i], PATHINFO_FILENAME)).'</h5></div></a>';
			}
		?>
	</div>
</div>

<div class="back vcenter" style="position:absolute;left:5%;top:10%;width:15%;height:50%;">
	<div id="decor-articles-box-left" class="rayon-left"></div>
	<div id="decor-articles-box-top" class="rayon-top" ></div>
	<div id="decor-articles-box-right" class="rayon-right"></div>	
	<div id="decor-articles-box-bot" class="rayon-bottom"></div>
	<h4 class="data-articles invisible">Back</h4>
</div>	