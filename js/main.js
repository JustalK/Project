$(document).ready(function() {
	load();
	
	
	function load() {
		$("#l1").animate({height: "100%"},300,function() {
			$("#l2").animate({width: "100%"},300,function() {
				$("#l3").animate({height: "100%"},300,function() {
					$("#l4").animate({width: "100%"},300,function() {
						$("#block7").animate({opacity: "1"},300);
						

						var str = "Welcome";
						afficher(0,str.length,str,"");
						
							$(".load-left").animate({height: "100%"},100,function() {
								$(".load-top").animate({width: "100%"},100,function() {
									$(".load-right").animate({height: "100%"},100,function() {
										$(".load-bot").animate({width: "100%"},100);
									});
								});
							});
					});
				});
			});
		});
	}
	
	function afficher(cpt,nbr,str,tmp) {
		$("#block7").animate({zIndex: "1000"},100,function() {
			$("#block7").html("<h1>"+tmp+"</h1>");
			if(cpt!=nbr) {
				afficher(cpt+1,nbr,str,tmp+str[cpt]);
			}
		
		});
	}
	
	var isClicked = false;
	
	$(".block").mouseenter(function(){

	});
	
	$(".block").not("#block7").mouseenter(function(){	
		$(".block").each(function() {
			$(this).dequeue().stop();
		});	
		$(this).animate({height: "100%"},100,function() {
			$(".block").not("#block7").not(this).filter(':not(:animated)').each(function() {
				$(this).animate({height: "50%"},50);
			});			
		});
	});
	
	$(".block").not("#block7").mouseleave(function(){
		default_block();
	});	
	
	function effect_opacity() {
		$(this).animate({opacity: '0.5'},50, function() {
			$(this).animate({opacity: '1'});
		});			
	}
	
	function default_block() {
		$("#block1").delay(50).animate({height: "80%"},200);
		$("#block2").delay(50).animate({height: "80%"},200);
		$("#block3").delay(50).animate({height: "100%"},200);

		$("#block4").delay(50).animate({height: "80%"},200);
		$("#block5").delay(50).animate({height: "80%"},200);
		$("#block6").delay(50).animate({height: "100%"},200);
	}
	
});