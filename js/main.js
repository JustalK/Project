$(document).ready(function() {
	var speed = 100;
	var click = null;
	var isClicked = false;
	
	$(".block").mouseenter(function(){
		if(!isClicked) {
			$(this).animate({opacity: '0.5'},50, function() {
				$(this).animate({opacity: '1'});
			});			
		}
	});
	
/* ===================================================================================================================>
BLOCK1
/* ===================================================================================================================>	*/
	$("#block1hide").hide();
	$("#block1").click(function() {
		isClicked=!isClicked;
		click = 1;
		$(".block").each(function() {
			$(this).clearQueue().stop();
			$(this).css("cursor","auto");
		});
		$("#block1").animate({opacity: '0.5'},150, function() {
			$("#block1").animate({opacity: '1'},150, function() {
				$("#block6").animate({height: "0%"},speed,function() {
					$("#block6").css("border","none");
					$("#block6").css("margin","0px");
					$("#block5").animate({height: "0%"},speed,function(){
						$("#block5").css("border","none");
						$("#block5").css("margin","0px");
						$("#block4").animate({height: "0%"},speed,function() {
							$("#block4").css("border","none");
							$("#block4").css("margin","0px");
							$("#block3").animate({height: "0%"},speed,function() {
								$("#block3").css("border","none");
								$("#block3").css("margin","0px");
								$("#block2").animate({height: "0%"},speed,function() {
									$("#block2").css("border","none");
									$("#block2").css("margin","0px");
									$(".block").not("#block1").hide();
									$("#block1").delay(speed).animate( {width: "100%"},speed);
									$("#block1").delay(speed).animate( {height: "100%"},speed,function(){
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
		if(click==1) {
			click=null;
			isClicked=!isClicked;
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
		}
	});
	
/* ===================================================================================================================>
BLOCK2
/* ===================================================================================================================>	*/	
	$("#block2").click(function() {
		isClicked=!isClicked;
		click = 2;
		$(".block").each(function() {
			$(this).clearQueue().stop();
			$(this).css("cursor","auto");
		});
		$("#block2").animate({opacity: '0.5'},150, function() {
			$("#block2").animate({opacity: '1'},150, function() {
				$("#block6").animate({height: "0%"},speed,function() {
					$("#block6").css("border","none");
					$("#block6").css("margin","0px");
					$("#block5").animate({height: "0%"},speed,function(){
						$("#block5").css("border","none");
						$("#block5").css("margin","0px");
						$("#block4").animate({height: "0%"},speed,function() {
							$("#block4").css("border","none");
							$("#block4").css("margin","0px");
							$("#block3").animate({height: "0%"},speed,function() {
								$("#block3").css("border","none");
								$("#block3").css("margin","0px");
								$("#block1").animate({height: "0%"},speed,function() {
									$(".block").not("#block2").hide();
									$("#block2").animate( {width: "100%"},speed,function(){
									});
									$("#block2").animate({left: "0%"},speed);
									$("#block2").animate( {height: "100%"},speed,function(){
										$("#block2hide").show();
									});
								});
							});
						});
					});
				});
			});
		});
	});
	
	$("#block2").mouseleave(function() {
		if(click==2) {
			isClicked=!isClicked;
			click=null;
			$(".block").each(function() {
				$(this).clearQueue().stop();
				$(this).css("cursor","pointer");
			});
			$("#block2").css("opacity","1");
			$("#block2hide").hide();
			$("#block2").animate({height: "25%"},speed);
			$("#block2").animate({width: "70%"},speed,function(){
				$("#block2").css("left","auto");
				$(".block").show();
				$("#block1").css("border","1px solid #000000");
				$("#block1").css("margin","-1px");
				$("#block1").animate({height: "50%"},speed,function() {
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
		}
	});
	
/* ===================================================================================================================>
BLOCK3
/* ===================================================================================================================> */
	
	//TODO Error about the block 6, I have to cut the block and fix his position.
	$("#block3").click(function() {
		isClicked=!isClicked;
		$(".block").each(function() {
			$(this).clearQueue().stop();
			$(this).css("cursor","auto");
		});
		$("#block3").animate({opacity: '0.5'},150, function() {
			$("#block3").animate({opacity: '1'},150, function() {
				$("#block6").animate({height: "0%"},speed,function() {
					$("#block6").css("border","none");
					$("#block6").css("margin","0px");
					$("#block5").animate({height: "0%"},speed,function(){
						$("#block5").css("border","none");
						$("#block5").css("margin","0px");
						$("#block4").animate({height: "0%"},speed,function() {
							$("#block4").css("border","none");
							$("#block4").css("margin","0px");
							$("#block3").animate({top:"25%"},speed);
							$("#block2").animate({height: "0%"},speed,function() {
								$("#block2").css("border","none");
								$("#block2").css("margin","0px");
								$("#block1").animate({height: "0%"},speed,function() {
									$(".block").not("#block3").hide();
									$("#block3").css("left","30%");
									$("#block3").animate( {left: "0%"},speed);
									$("#block3").animate( {width: "100%"},speed);
									$("#block3").css("top","0%");
									$("#block3").animate( {height: "100%"},speed,function(){
										$("#block3hide").show();
										click = 3;
									});
									/**
									$("#block1").css("border","none");
									$("#block1").css("margin","0px");
									$("#block3").animate( {top: "0%"},speed);
									**/
								});
							});
						});
					});
				});
			});
		});
	});
	
	$("#block3").mouseleave(function() {
		if(click==3) {
			isClicked=!isClicked;
			click=null;
			$(".block").each(function() {
				$(this).clearQueue().stop();
				$(this).css("cursor","pointer");
			});
			$("#block3hide").hide();
			$("#block3").animate( {top: "25%"},speed);
			$("#block3").animate( {height: "25%"},speed);
			$("#block3").animate( {left: "30%"},speed);
			$("#block3").animate( {width: "50%"},0,function(){
				$(".block").not("#block3").each(function() {
					$(this).css("opacity","0");
					$(this).show();
				});
				$("#block3").css("top","auto");
				$("#block3").css("left","auto");
				$("#block3").css("border","1px solid #000000");
				$("#block3").css("margin","-1px");
				$("#block1").css("height","50%");
				$("#block1").css("border","1px solid #000000");
				$("#block1").css("margin","-1px");
				$("#block2").css("height","25%");
				$("#block2").css("border","1px solid #000000");
				$("#block2").css("margin","-1px");
				$("#block4").css("height","50%");
				$("#block4").css("border","1px solid #000000");
				$("#block4").css("margin","-1px");
				$("#block5").css("height","25%");
				$("#block5").css("border","1px solid #000000");
				$("#block5").css("margin","-1px");
				$("#block6").css("height","25%");
				$("#block6").css("border","1px solid #000000");
				$("#block6").css("margin","-1px");
				$("#block1").animate({"opacity": "1"},speed);
				$("#block2").animate({"opacity": "1"},speed);
				$("#block4").animate({"opacity": "1"},speed);
				$("#block5").animate({"opacity": "1"},speed);
				$("#block6").animate({"opacity": "1"},speed);
			});
		}
	});
	
/* ===================================================================================================================>
BLOCK4
/* ===================================================================================================================> */
	$("#block4").click(function() {
		isClicked=!isClicked;
		$(".block").each(function() {
			$(this).clearQueue().stop();
			$(this).css("cursor","auto");
		});
		$("#block4").animate({opacity: '0.5'},150, function() {
			$("#block4").animate({opacity: '1'},150, function() {
				$("#block6").animate({width: "20%"},speed,function() {
					$("#block6").css("border","none");
					$("#block6").css("margin","0px");
					$("#block6").hide();
					$("#block5").animate({width: "0%"},speed,function(){
						$("#block5").css("border","none");
						$("#block5").css("margin","0px");
						$("#block4").animate({"left":"50%"},speed);
						$("#block3").animate({width: "0%"},speed,function() {
							$("#block4").css("left","50%");
							$("#block3").css("border","none");
							$("#block3").css("margin","0px");
							$("#block2").css("float","left");
							$("#block2").animate({width: "50%"},speed,function(){
								$("#block4").css("top","25%");
								$("#block4").css("left","0");
								$("#block4").animate({left: "50%"},speed);
								$("#block2").animate({width: "0%"},speed,function(){
									$("#block4").animate({left: "80%"},speed);
									$("#block1").animate({width: "0%"},speed,function(){
										$(".block").not("#block4").hide();
										$("#block4").animate({left: "0%"},speed);
										$("#block4").animate({width: "100%"},speed);
										$("#block4").animate({top: "0%"},speed);
										$("#block4").animate({height: "100%"},speed,function() {
											click=4;
										});
									});
								});
							});
						});
					});
				});
			});
		});
	});
	
	$("#block4").mouseleave(function() {
		if(click==4) {
			isClicked=!isClicked;
			click=null;
			$(".block").each(function() {
				$(this).clearQueue().stop();
				$(this).css("cursor","pointer");
			});

			$("#block4hide").hide();
			$("#block4").animate( {top: "25%"},speed);
			$("#block4").animate( {height: "50%"},speed);
			$("#block4").animate( {left: "80%"},speed);
			$("#block4").animate( {width: "20%"},0,function(){
				$(".block").not("#block4").each(function() {
					$(this).css("opacity","0");
					$(this).show();
				});
				$("#block4").css("top","auto");
				$("#block4").css("left","auto");
				$("#block3").css("top","auto");
				$("#block3").css("left","auto");
				$("#block3").css("border","1px solid #000000");
				$("#block3").css("margin","-1px");
				$("#block1").css("width","30%");
				$("#block1").css("border","1px solid #000000");
				$("#block1").css("margin","-1px");
				$("#block2").css("width","70%");
				$("#block2").css("border","1px solid #000000");
				$("#block2").css("margin","-1px");
				$("#block2").css("float","right");
				$("#block3").css("width","50%");
				$("#block3").css("border","1px solid #000000");
				$("#block3").css("margin","-1px");
				$("#block5").css("width","80%");
				$("#block5").css("border","1px solid #000000");
				$("#block5").css("margin","-1px");
				$("#block6").css("width","100%");
				$("#block6").css("border","1px solid #000000");
				$("#block6").css("margin","-1px");
				$("#block1").animate({"opacity": "1"},speed);
				$("#block2").animate({"opacity": "1"},speed);
				$("#block3").animate({"opacity": "1"},speed);
				$("#block5").animate({"opacity": "1"},speed);
				$("#block6").animate({"opacity": "1"},speed);				
			});
		}
	});	
/* ===================================================================================================================>
BLOCK5
/* ===================================================================================================================> */
	$("#block5").click(function() {
		$(".block").each(function() {
			$(this).clearQueue().stop();
			$(this).css("cursor","auto");
		});
		$("#block5").animate({opacity: '0.5'},150, function() {
			$("#block5").animate({opacity: '1'},150, function() {
				$("#block6").animate({width: "20%"},speed,function() {
					$("#block6").css("width","0%");
					$("#block6").css("border","none");
					$("#block6").css("margin","0px");

					$("#block6").hide();
					$("#block4").animate({width: "0%"},speed);
					$("#block4").hide();
					$("#block5").css("top","0%");
					$("#block3").animate({width: "0%"},speed,function(){
						$("#block3").hide();	
					});
					$("#block2").animate({width: "0%"},speed,function(){
						$("#block2").hide();
					});
					$("#block1").animate({width: "20%"},speed,function(){
						$("#block1").hide();
						$("#block5").css("top","50%");
						$("#block5").css("width","100%");
						$("#block5").animate({top: "0"},speed);
						$("#block5").animate({height: "100%"},speed);
					});
					
					/**
					$("#block4").animate({width: "0%"},speed,function() {
						$("#block5").css("top","0%");
						$("#block3").animate({width: "0%"},speed,function() {
							$("#block2").animate({width: "0%"},speed,function() {
								$("#block1").animate({width: "20%"},speed,function() {
									$("#block5").css("left","-20%");
									$("#block5").css("top","50%");	
									$("#block5").animate({"left":"0%"},speed);
									$("#block1").animate({width: "0%"},speed,function() {
										$("#block1").hide();
										$("#block5").css("top","50%");	
										$("#block5").animate( {width: "100%"},speed);
										$("#block5").animate( {top: "0%"},speed);
										$("#block5").animate( {height: "100%",},speed,function() {
											click = 5;
										});
									});
								});
							});
						});
					});
					**/
				});
			});
		});
	});
	
	$("#block5").mouseleave(function() {
		if(click==5) {
			click=null;
			$(".block").each(function() {
				$(this).clearQueue().stop();
				$(this).css("cursor","pointer");
			});
		}
	});
});