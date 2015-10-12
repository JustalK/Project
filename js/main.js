$(document).ready(function() {
	var speed = 100;
	
	$("#block1hide").hide();
	$("#block1").click(function() {
		$(".block").each(function() {
			$(this).clearQueue().stop();
			$(this).css("cursor","auto");
		});
		$("#block1").animate({opacity: '0.5'},150, function() {
			$("#block1").animate({opacity: '1'},150, function() {
				$("#block6").css("border","none");
				$("#block6").css("margin","0px");
				$("#block6").animate({height: "0%"},speed,function() {
					$("#block5").css("border","none");
					$("#block5").css("margin","0px");
					$("#block5").animate({height: "0%"},speed,function(){
						$("#block4").css("border","none");
						$("#block4").css("margin","0px");
						$("#block4").animate({height: "0%"},speed,function() {
							$("#block3").css("border","none");
							$("#block3").css("margin","0px");
							$("#block3").animate({height: "0%"},speed,function() {
								$("#block2").css("border","none");
								$("#block2").css("margin","0px");
								$("#block2").animate({height: "0%"},speed,function() {
									$(".block").not("#block1").hide();
									$("#block1").animate( {width: "100%"},speed,function(){
									});
									$("#block1").animate( {height: "100%"},speed,function(){
		
										$("#block1hide").show();
									});
								});
							});
						});
					});
				});
			});
		});
	});
	
	$("#block1").mouseleave(function() {
		$(".block").each(function() {
			$(this).clearQueue().stop();
			$(this).css("cursor","pointer");
		});
		$("#block1").css("opacity","1");
		$("#block1hide").hide();
		$("#block1").animate({height: "50%"},speed);
		$("#block1").animate({width: "30%"},speed,function(){
			$(".block").show();
			$("#block2").css("border","1px solid #000000");
			$("#block2").css("margin","-1px");
			$("#block2").animate({height: "25%"},speed,function() {
				$("#block3").css("border","1px solid #000000");
				$("#block3").css("margin","-1px");
				$("#block3").animate({height: "25%"},speed,function(){
					$("#block4").css("border","1px solid #000000");
					$("#block4").css("margin","-1px");
					$("#block4").animate({height: "50%"},speed,function() {
						$("#block5").css("border","1px solid #000000");
						$("#block5").css("margin","-1px");
						$("#block5").animate({height: "25%"},speed,function() {
							$("#block6").css("border","1px solid #000000");
							$("#block6").css("margin","-1px");
							$("#block6").animate({height: "25%"},speed);
						});
					});
				});
			});			
		});

		
	});
});