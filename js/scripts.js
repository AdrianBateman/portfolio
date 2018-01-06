/**
*  Set the minimum height of all classes to that of the window.
*/

function setMinHeight() {
	var cols = document.getElementsByClassName("newPageSection");
	for(var i=0; i<cols.length; i++) {
		cols[i].style.minHeight = ( window.innerHeight - 100 ) + "px" ;
	};
};



/**
 *  Lets type the header text out.
 *  First removes any existing text from inside the tags #headderTxt1 & headderTxt2
 *  Then creates two new instances for running the TyoeIt function on. 
 *  Runs second instance after first to create the headder and sub headder text.
 **/

function headderTxt() {
	
	//  Destry the inner html first
	$('#headerTxt1').contents().remove();
	$('#headerTxt2').contents().remove();

	
	//  create the first text for "Adrian Bateman"
	
	var headder1 = new TypeIt('#headerTxt1', {
	
				     speed: 250,
				     autoStart: true,
				     lifeLike: true,
				     startDelay: 1000,
				     callback: function() {
				    
							headder1.destroy();  // Stop the blinking cursor
							
							//  create the second text for "web developer"
							
							var headder2 = new TypeIt('#headerTxt2', {
								
									     			speed: 250,
									     			autoStart: true,
									     			lifeLike: true,
									     			startDelay: 1000,
									     			callback: function() {
									     				
									     				headder2.destroy(); // stop the blinking cursor
									     				
									     			}
							}).type('Junior Web').pause(300).delete(10).pause(500).type('Web Debel').pause(500).delete(3).type('veloper');
							
				  		}
}).type('Adrian Bateman');
	
}

/**
 *  This resets all the starts to empty
 */
function fiveStarReset(){
	$("#css i, #html5 i, #javascript i, #cms i, #bootstrap i, #php i, #mysql i, #gimp i, #inkscape i, #mypait i, #photoshop i, #dreamweaver i, #illustator i, #autocad i, #linux i, #windows i, #android i, #macos i, #ios i, #wiserver i, #winmob i").removeClass('fa-star');
		
	$("#css i, #html5 i, #javascript i, #cms i, #bootstrap i, #php i, #mysql i, #gimp i, #inkscape i, #mypait i, #photoshop i, #dreamweaver i, #illustator i, #autocad i, #linux i, #windows i, #android i, #macos i, #ios i, #wiserver i, #winmob i").addClass('fa-star-o');
}


/**
 *  Created the flashing of the stars based on the var given for id and number of stars.
 */
function fiveStarFlash(idName, numFlash){
	
	setTimeout(function(){
		$(idName+" i:nth-child(1)").removeClass('fa-star-o');
		$(idName+" i:nth-child(1)").addClass('fa-star');

	}, 100 );
	

	setTimeout(function(){
		$(idName+" i:nth-child(2)").removeClass('fa-star-o');
		$(idName+" i:nth-child(2)").addClass('fa-star');

	}, 200 );

		
	setTimeout(function(){
		$(idName+" i:nth-child(3)").removeClass('fa-star-o');
		$(idName+" i:nth-child(3)").addClass('fa-star');

	}, 300 );

		
	setTimeout(function(){
		$(idName+" i:nth-child(4)").removeClass('fa-star-o');
		$(idName+" i:nth-child(4)").addClass('fa-star');

	}, 400 );


	setTimeout(function(){
		$(idName+" i:nth-child(5)").removeClass('fa-star-o');
		$(idName+" i:nth-child(5)").addClass('fa-star');

	}, 500 );

	
	if (numFlash <= 4){	
		setTimeout(function(){
			$(idName+" i:nth-child(5)").removeClass('fa-star');
			$(idName+" i:nth-child(5)").addClass('fa-star-o');

		}, 600 );
	};
	
	if (numFlash <= 3){	
		setTimeout(function(){
			$(idName+" i:nth-child(4)").removeClass('fa-star');
			$(idName+" i:nth-child(4)").addClass('fa-star-o');
		}, 700 );
	};
	
	if (numFlash <= 2){	
		setTimeout(function(){
			$(idName+" i:nth-child(3)").removeClass('fa-star');
			$(idName+" i:nth-child(3)").addClass('fa-star-o');
		}, 800 );
	};
	
};


function startFlashing() {
	
  fiveStarFlash("#html5", 5) ; 
  setTimeout(function(){ fiveStarFlash("#css", 5); }, 			300 );	
  setTimeout(function(){ fiveStarFlash("#javascript", 5);  }, 	600 );	 
  setTimeout(function(){ fiveStarFlash("#cms", 4);  }, 			900 );	 
  setTimeout(function(){ fiveStarFlash("#bootstrap", 5);  }, 	1200 );	 
  setTimeout(function(){ fiveStarFlash("#php", 4);  }, 			1500 );	 
  setTimeout(function(){ fiveStarFlash("#mysql", 3);  }, 		1800 );	
  
  setTimeout(function(){ fiveStarFlash("#gimp", 5); }, 			1800 ); 
  setTimeout(function(){ fiveStarFlash("#inkscape", 5); }, 		1500 ); 
  setTimeout(function(){ fiveStarFlash("#mypait", 5); }, 		1200 ); 
  setTimeout(function(){ fiveStarFlash("#photoshop", 4); }, 	900 ); 
  setTimeout(function(){ fiveStarFlash("#dreamweaver", 4); }, 	600 ); 
  setTimeout(function(){ fiveStarFlash("#illustator", 3); }, 	300 ); 
  fiveStarFlash("#autocad", 3) ;
  
  fiveStarFlash("#linux", 5) ; 
  setTimeout(function(){ fiveStarFlash("#windows", 5); },	300 ); 
  setTimeout(function(){ fiveStarFlash("#android", 5); },	600 ); 
  setTimeout(function(){ fiveStarFlash("#macos", 4); },		900 ); 
  setTimeout(function(){ fiveStarFlash("#ios", 4); },			1200 ); 
  setTimeout(function(){ fiveStarFlash("#wiserver", 3); },	1500 ); 
  setTimeout(function(){ fiveStarFlash("#winmob", 3); },		1800 );
			  
};


/**
*  When the page has finished loading, run...
*/
 
$(document).ready(function () {
	headderTxt();
	/*
	*  Call the window function
	*/
	 
	setMinHeight();



	/**
	*  Change navbar to fixed position depending on the position
	*  of the scroll bar.  If it is at top, nav is not fixed.
	*
	*  Adds class to #nav
	*/
	 
	$(window).scroll(function() {
	
		var scrollValue = $(document).scrollTop();
	  
		if (scrollValue >= 150) {
	
			$('#nav').addClass("affix");
		
		} else 
		
		{
			$('#nav').removeClass("affix");
	    
		}
		
	});



	/**
	*  When window scrolls, change background colour.
	*/
	var runNumber = 1;	
		
	
	
	$(window).scroll(function() {	
	
		if (runNumber == 1) {
	
			if ($(document).scrollTop() >= ($("#html5").position().top + 700 )) {
				
				startFlashing();				
			
				runNumber = 2;
			};
		
		};
		
		
	});
		
	
	
	/**
	*  Change the text of view source based on hidden content
	*/
	 
	$('#classWelcome').on('show.bs.collapse', function () {
		$('button#viewCode').text("Hide Source");
	})
	
	$('#classWelcome').on('hide.bs.collapse', function () {
		$('button#viewCode').text("View Source");
	})
	
	
	
	/**
	*  Start the carousel scrolling
	*/
	 
	$('#carousel').carousel({
		interval: 1000,
		pause: null	
	});
	
	
	/**
	 *
	 
	 */
	$("#topLink").click(function(){
		headderTxt();
		
	}); 
	
	
	$("#aboutLink,#portfolioLink,#artworkLink,#appsLink,#contactLink").click(function(){
		$('#collapsibleNavbar').removeClass('show');
	});
	
	/**
	 *  When you click the skills link on navigation, lest re-run the animation
	 */
	
	$("#skillsLink").click(function(){
		
    	$('#collapsibleNavbar').removeClass('show');
    	
    	fiveStarReset();
    	
    	setTimeout(function(){ 
	
    		startFlashing();
    		
    	},	1000 ); 
    	
	}); 	
	
});
