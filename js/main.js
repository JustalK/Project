String.prototype.replaceAt=function(index, character) {
    return this.substr(0, index) + character + this.substr(index+character.length);
}


$(document).ready(function() {
	load();
	var isClicked = false;
	var isLoad = false;
	var rand = "#FF0000";
	
	function load() {
		$("#l1").animate({height: "100%"},250,function() {
			$("#l2").animate({width: "100%"},200,function() {
				$("#l3").animate({height: "100%"},250,function() {
					$("#l4").animate({width: "100%"},250,function() {
						$("#block7").animate({opacity: "1"},300);
						
						var str = "Welcome";
						afficher(0,str.length,str,$("#block7").children("h5").html());
						
						$(".decor").animate({height: "5%"},200,function() {
							if ($(".decor:animated").length === 0) {
								$(".load-left").animate({height: "100%"},250);
								$(".load-top").animate({width: "100%"},250);
								$(".load-right").animate({height: "100%"},250);
								$(".load-bot").animate({width: "100%"},250);
								$(".block").children(".invisible").animate({"opacity": "1"},200);
								isLoad=true;
							}
						});
					});
				});
			});
		});
	}
	
	function afficher(cpt,nbr,str,tmp) {
		$("#block7").animate({zIndex: "1000"},30,function() {
			$("#block7").html("<h5>"+tmp+"</h5>");
			if(cpt!=nbr) {
				tmp = tmp.substr(0, cpt) + str[cpt] + tmp.substr(cpt + 1);
				afficher(cpt+1,nbr,str,tmp);
			}
		
		});
	}
	
	$(".back").click(function() {
		deload_articles();
	});

	$("#back-about-me").click(function() {
		deload_about_me();
	});	

	$("#back-project").click(function() {
		deload_projects();
	});		
	
	function load_articles() {
		$("#articles").css("display","block");
		$("#decor-articles-box-left").animate({height: "100%"},100,function() {
			$("#decor-articles-box-top").animate({width: "100%"},100,function() {
				$("#decor-articles-box-right").animate({height: "100%"},100,function() {
					$("#decor-articles-box-bot").animate({width: "100%"},100,function() {
						$(".decor-articles-line").animate({height: "100%"},500);
						$(".data-articles").animate({"opacity":"1"},100);
					});
				});
			});
		});
	}
	
	function deload_articles() {
		$(".block").children(".rayon").css( "background", "#00FFFF" );
		$(".block").find("h2").css("color","#00FFFF");
		default_block();
		isClicked = false;
		$(".data-articles").animate({"opacity":"0"},100);
		$("#decor-articles-box-bot").animate({width: "0"},100,function() {
			$("#decor-articles-box-right").animate({height: "0"},100,function() {
				$("#decor-articles-box-top").animate({width: "0"},100,function() {
					$("#decor-articles-box-left").animate({height: "0"},100,function() {
						$(".decor-articles-line").animate({height: "0"},500,function() {
							if ($(".decor-articles-line:animated").length === 0) {
								$("#articles").css("display","none");		
								$("#content2").animate({left:"0"},500);
							}
						});
					});
				});
			});
		});
	}
	
	function load_about_me() {
		$("#about-me").css("display","block");
		$("#decor-about-me-box-left2").animate({height: "100%"},100);
		$("#decor-about-me-box-left").animate({height: "100%"},100,function() {
			$("#decor-about-me-box-top2").animate({width: "100%"},100);
			$("#decor-about-me-box-top").animate({width: "100%"},100,function() {
				$("#decor-about-me-box-right2").animate({height: "100%"},100);
				$("#decor-about-me-box-right").animate({height: "100%"},100,function() {
					$("#decor-about-me-box-bot2").animate({width: "100%"},100);
					$("#decor-about-me-box-bot").animate({width: "100%"},100,function() {
						$(".data-about-me").animate({"opacity":"1"},200);
					});
				});
			});
		});		
	}
	
	function deload_about_me() {
		$(".block").children(".rayon").css( "background", "#00FFFF" );
		$(".block").find("h2").css("color","#00FFFF");
		default_block();
		isClicked = false;
		$(".data-about-me").animate({"opacity":"0"},200);
		$("#decor-about-me-box-bot2").animate({width: "0"},100);
		$("#decor-about-me-box-bot").animate({width: "0"},100,function() {
			$("#decor-about-me-box-right2").animate({height: "0"},100);
			$("#decor-about-me-box-right").animate({height: "0"},100,function() {
				$("#decor-about-me-box-top2").animate({width: "0"},100);
				$("#decor-about-me-box-top").animate({width: "0"},100,function() {
					$("#decor-about-me-box-left2").animate({height: "0"},100);
					$("#decor-about-me-box-left").animate({height: "0"},100,function() {
						$("#about-me").css("display","none");	
						$("#content2").animate({left:"0"},500);
					});
				});
			});
		});
	}	
	
	function load_projects() {
		$("#projects").css("display","block");
		$(".decor-project-left").animate({height: "100%"},300);
		$(".decor-project-top").animate({width: "100%"},300);
		$(".decor-project-right").animate({height: "100%"},300);
		$(".decor-project-bot").animate({width: "100%"},300);
		$(".data-projects").animate({"opacity":"1"},100);
	}
	
	function deload_projects() {
		$(".block").children(".rayon").css( "background", "#00FFFF" );
		$(".block").find("h2").css("color","#00FFFF");
		default_block();
		isClicked = false;
		$(".data-projects").animate({"opacity":"0"},100);
		$(".decor-project-left").animate({height: "0"},300);
		$(".decor-project-top").animate({width: "0"},300);
		$(".decor-project-right").animate({height: "0"},300);
		$(".decor-project-bot").animate({width: "0"},300,function() {
			if ($(".decor-project-bot:animated").length === 0) {
				$("#projects").css("display","none");	
				$("#content2").animate({left:"0"},500);	
			}
		});
	}
	
	$("#block1").click(function() {
		isClicked = true;
		$(this).children(".rayon").css( "background", "#FF0000" );
		$(this).find("h2").css("color","#FF0000");
		$("#content2").delay(300).animate({left:"-200%"},500,function() {
			load_articles();
		});
	});

	$("#block3").click(function() {
		isClicked = true;
		$(this).children(".rayon").css( "background", "#FF0000" );
		$(this).find("h2").css("color","#FF0000");
		$("#content2").delay(300).animate({left:"-200%"},500,function() {
			load_projects();
		});
	});	
	
	$("#block5").click(function() {
		isClicked = true;
		$(this).children(".rayon").css( "background", "#FF0000" );
		$(this).find("h2").css("color","#FF0000");
		$("#content2").delay(300).animate({left:"-200%"},500,function() {
			load_about_me();
		});
	});
	
		$(".block").not("#block7").mouseover(function(){
			if(!isClicked) {
				$(this).stop().clearQueue().animate({height: "100%"},50);
				$(".block").not("#block7").not(this).stop().clearQueue().animate({height: "50%"},50);
				definition_menu($(this));
			}
		});
		
		$(".block").not("#block7").mouseenter(function(){
		    var back = ["#FF0000","#00FF00","#0000FF","#F0F000","#F00F00","#F000F0","#F0000F"];
		    rand = back[Math.floor(Math.random() * back.length)];
			$(this).find("h2").css("color",rand);
		});
		
		var currentSentance = "";
		var sentance1 = ["Do you wanna read something useful ?","Some articles that I have written.","My words, my thoughts !","Maybe some useful words...I hope :)"];
		var sentance2 = ["Some tricky things.","When I have some free time, I'm codding.","When I'm playing with the technologies."];
		var sentance3 = ["Lemme show you what I'm capable of !","My four favorites projects <3","Just some results of my work."];
		var sentance4 = ["A presentation ? Ok, click here !","If I told you to click here, just do it !"];
		var sentance5 = ["Do you wanna know who I am ?","Hey, I'm Latsuj !","When a geek, tell you who he is."];
		var sentance6 = ["Do you wanna see my source code ?","my inner self = my code"];
		function definition_menu(block) {
			if(isLoad) {		
				if($(block).is($("#block1"))) {
					if(sentance1.indexOf(currentSentance)==-1) {
						var rng = Math.floor((Math.random() * sentance1.length) + 0);
						currentSentance=sentance1[rng];
						afficher_write_first(sentance1[rng]);
					}
				} else if($(block).is($("#block3"))) {
					if(sentance3.indexOf(currentSentance)==-1) {
						var rng = Math.floor((Math.random() * sentance3.length) + 0);
						currentSentance=sentance3[rng];
						afficher_write_first(sentance3[rng]);
					}
				} else if($(block).is($("#block2"))) {
					if(sentance2.indexOf(currentSentance)==-1) {
						var rng = Math.floor((Math.random() * sentance2.length) + 0);
						currentSentance=sentance2[rng];
						afficher_write_first(sentance2[rng]);
					}
				} else if($(block).is($("#block4"))) {
					if(sentance4.indexOf(currentSentance)==-1) {
						var rng = Math.floor((Math.random() * sentance4.length) + 0);
						currentSentance=sentance4[rng];
						afficher_write_first(sentance4[rng]);
					}
				} else if($(block).is($("#block6"))) {
					if(sentance6.indexOf(currentSentance)==-1) {
						var rng = Math.floor((Math.random() * sentance6.length) + 0);
						currentSentance=sentance6[rng];
						afficher_write_first(sentance6[rng]);
					}
				} else if($(block).is($("#block5"))) {
					if(sentance5.indexOf(currentSentance)==-1) {
						var rng = Math.floor((Math.random() * sentance5.length) + 0);
						currentSentance=sentance5[rng];
						afficher_write_first(sentance5[rng]);
					}
				}
			}
		}
	
		function afficher_write_first(rsl) {
			afficher_write(rsl,"");
		}
		
		function afficher_write(rsl,tmp) {
			$("#block7").stop().dequeue().animate({zIndex: "1000"},25,function() {
				$("#block7").html("<h5>"+tmp+"</h5>");
			    $("#block7").children("h5").css("color",rand);
				if(rsl.length!=tmp.length) {
					afficher_write(rsl,tmp+rsl[tmp.length]);
				}
			
			});
		}
		
		$(".selected").mouseenter(function(){	
			$(this).css("background","#00FFFF");
			$(this).children("h5").css("color","#000000");
		});

		$(".selected").mouseleave(function(){	
			$(this).css("background","none");
			$(this).children("h5").css("color","#00FFFF");
		});		
		
		$(".block").not("#block7").mouseleave(function(){
			if(!isClicked) {
				setTimeout(function(){ 
					if ($('.block:hover').length == 0) {
						$(".block").not("#block3").not("#block6").animate({height: "80%"},200);
						$("#block3").animate({height: "100%"},200);
						$("#block6").animate({height: "100%"},200);
						afficher_write_first("what do you wanna do ?");
						currentSentance="";
					}
				}, 300);
			}
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