var galleryImageItems = [];
var visibleItems = [];
var currGALpick = null;
var EasingList = ['linear','swing','easeInQuad','easeOutQuad','easeInOutQuad','easeInCubic','easeOutCubic','easeInOutCubic','easeInQuart','easeOutQuart','easeInOutQuart','easeInQuint','easeOutQuint','easeInOutQuint','easeInExpo','easeOutExpo','easeInOutExpo','easeInSine','easeOutSine','easeInOutSine','easeInCirc','easeOutCirc','easeInOutCirc','easeInElastic','easeOutElastic','easeInOutElastic','easeInBack','easeOutBack','easeInOutBack','easeInBounce','easeOutBounce','easeInOutBounce'];
var Ease = EasingList[4];

$(document).ready(function(){
$(document).on("scroll mousedown DOMMouseScroll mousewheel keydown", function (e) {if (e.which > 0 || e.type === "mousedown" || e.type === "mousewheel") {$('html, body').stop();}});	
	
	//intial animation	
	scroll();
	$('html, body').delay(200).animate({opacity:1},500, Ease);
	$('.fade-in-video').delay(200).addClass('is-playing');

	
	//binds
	$(window).bind('resize', resize);
	$(window).bind('scroll', scroll);
	$('.navBTN').bind('click', goPage);
	$('.navBTN').first().trigger('mouseover').trigger('click');
	
	//video
	$('.videoListing').bind('click', video);
 
	//start animation
	$('.pg2').animate({opacity:1},500, function(){
		$('.pg2 .cont').delay(200).animate({opacity:1},500, Ease, function(){
			$('.nav').animate({top:'0px'},300, Ease);
		});
	});
	
	
	resize();
	$('.listingItem').bind('click', showGalItem);
	
	
	
	
	
	$(".slider").divSlider();
});


//Resize Configure: Mobile | Tablet | Desktop
function resize(){
    var h = $('.videoContainer').height();
    //$('videoheader').height(h - 5);
    $('videoheader').height('100vh');
    $('.pg1').height(h - 5);
    $('.videoContainer video').trigger('click');
}
function scroll(){
	var H = $('videoheader').height();
	
	if ($('body').scrollTop() > H * 2) {
       $('.pg5').css('z-index','2');
    } else {
       $('.pg5').css('z-index','-1');
    }
}

//Page nav
function goPage(){
	var id = $(this).attr('data-id');
	var name = $(this).attr('data-name');

	$('.navBTN').removeClass('active');
	$(this).addClass('active');
	
	if(name =='contact'){
		$('html,body').animate({
			scrollTop: $(document).height()
		}, 1000);
	}else{
		$('html,body').animate({
			scrollTop: $('.'+id).offset().top - 70
		}, 1000);
	}
}

//Videos
function video(){
	var id = $(this).attr('data-album');
	var item = $(this).attr('data-content');

	var newAlbumId = $(this).attr('data-id');
	var newName = id;
				

		//create filter
		var galReel = document.createElement("div");
		galReel.setAttribute("id", "galReel");
		document.querySelector('body').appendChild(galReel);
		
		var galReelClose = document.createElement("div");
		galReelClose.setAttribute("id", "galReelClose");
		galReelClose.innerHTML = "[x] Close";
		document.querySelector('#galReel').appendChild(galReelClose);
		
		$('#galReelClose').bind('click', closeGalItem); 
		//create gal item
		
		var video = $('.videoContainer').html();
		var galReelItem = document.createElement("div");
		galReelItem.className += "myPlaylist";
		galReelItem.setAttribute("id", "galReelItemVideo");
		galReelItem.innerHTML = video;
		$('#galReelItemVideo video').attr('autoplay',false);
		document.querySelector('#galReel').appendChild(galReelItem);

	$('#galReelItemVideo video').attr('src',item);
	$('#galReelItemVideo video').attr('loop',false);
	$('#galReelItemVideo video').attr('controls',true);
		
		
		
		 
		$('#galReel').animate({opacity:1}, 300, function(){
			$('#galReelItemVideo').animate({opacity:1}, 300, function(){
				$('#galReelItemVideo video').css('width','100%');
				$('#galReelItemVideo video').attr('autoplay',true);
			});
			$('#galReel').bind('click', closeGalItem);
			
			//CTA
			document.querySelector('#galReelItemVideo video').addEventListener('ended', closeGalItem, false);
		});
}



/*view gallery item*/
function showGalItem(){
	var item = $(this).attr('data-url');
	var itemID = $(this).attr('id');
	$('.listingItem').removeClass('active');
	$(this).addClass('active');
	currGALpick = itemID;
	
	if(!$('#galReel').hasClass('galReel')){
		$('body').css('overflow','hidden');
		//create filter
		var galReel = document.createElement("div");
		galReel.setAttribute("id", "galReel");
		document.querySelector('body').appendChild(galReel);
	
		//create gal item
		var galReelItem = document.createElement("img");
		galReelItem.setAttribute("id", "galReelItem");
		galReelItem.setAttribute("src", item);
		document.querySelector('#galReel').appendChild(galReelItem);
		
		var galReelClose = document.createElement("div");
		galReelClose.setAttribute("id", "galReelClose");
		galReelClose.innerHTML = "[x] Close";
		document.querySelector('#galReel').appendChild(galReelClose);
		
		$('#galReelClose').bind('click', closeGalItem); 

		if($(this).attr('data-type')=="gallery"){
			//create gal Next item
			var galReelNext = document.createElement("div");
			galReelNext.setAttribute("id", "galReelNext");
			galReelNext.className += "galController";
			galReelNext.setAttribute("data-direction", 'next');
			document.querySelector('#galReel').appendChild(galReelNext);
	
			//create gal Prev item
			var galReelPrev = document.createElement("div");
			galReelPrev.setAttribute("id", "galReelPrev");
			galReelPrev.className += "galController";
			galReelPrev.setAttribute("data-direction", 'prev');
			document.querySelector('#galReel').appendChild(galReelPrev);
		}
		$('#galReel').animate({opacity:1}, 300, function(){
			$('#galReel').addClass('galReel');
			$('#galReelItem').animate({opacity:0},300, function(){
				$('#galReelItem').css({'top':'0%','left':'0%','margin-top':'0px','margin-left':'0px'});
				var h = $('#galReelItem').height();
				var w = $('#galReelItem').width();
				$('#galReelItem').delay(100).css({'top':'50%','left':'50%','margin-top':'-'+h / 2+'px','margin-left':'-'+w / 2+'px'}).animate({opacity:1},300);
			});
		});
	
		$('#galReel').bind('click', closeGalItem);
	
		if($(this).attr('data-type')=="gallery"){
			$('#galReelPrev, #galReelNext').bind('click', galleryController);
			$('#galReelPrev, #galReelNext').bind('mouseenter', controllerOver);
			$('#galReelPrev, #galReelNext').bind('mouseleave', controllerOut);
			document.addEventListener('keydown', onKeyControl, false);
		}
	}else{
		$('#galReelItem').animate({opacity:0},300, function(){
			$('#galReelItem').attr("src", item);
			
			$('#galReelItem').on('load', function () {
				$('#galReelItem').css({'top':'0%','left':'0%','margin-top':'0px','margin-left':'0px'});
				var h = $('#galReelItem').height();
				var w = $('#galReelItem').width();
				$('#galReelItem').css({'top':'50%','left':'50%','margin-top':'-'+h / 2+'px','margin-left':'-'+w / 2+'px'}).animate({opacity:1},300, function(){
					$('#galReel').unbind('click', closeGalItem);
					$('#galReel').bind('click', closeGalItem);
				});
			});
		});
	}
}
function closeGalItem(){
	$('#galReel').animate({opacity:0}, 300, function(){
		$('body').css('overflow','auto'); 
		document.removeEventListener('keydown', onKeyControl, false);
		
		setTimeout(hideGal, 500);
		function hideGal(){
			$('#galReel').remove();
		}
		
		// promo CTA
		if($('.promo')){
			$('#galReelNext').trigger('click');
		}
		$('.listingItem').removeClass('active');
	});
}
function onKeyControl(event){
	var mySwitch = event.keyCode;
	$('#galReel').unbind('click', closeGalItem);
	switch(mySwitch){
		case 37:
			$('#galReelPrev').trigger('click');
		break;
		case 39:
			$('#galReelNext').trigger('click');
		break;
	}
	$('#galReel').bind('click', closeGalItem);
}
function galleryController(){
	$('#galReel').unbind('click', closeGalItem);
	var nextItem = $.inArray( currGALpick, galleryImageItems );
	var direction = $(this).attr('data-direction');
		
	if(direction=="prev"){
		$('#'+galleryImageItems[nextItem - 1]).trigger('click');
	}else{
		$('#'+galleryImageItems[nextItem + 1]).trigger('click');
	}
}
function controllerOver(){
	$('#galReel, .myPlaylist').unbind('click', closeGalItem);
}
function controllerOut(){
	$('#galReel, .myPlaylist').bind('click', closeGalItem);
}










//CUSTOM MF PLUGINS
(function ( $ ) {
 
 	 var divSliderCount = 0;
 
 	//MAKE DIV SLIDER
    $.fn.divSlider = function( options ) {
    	
    	//Runs for each instance of .slider
 		return this.each(function(options){
			divSliderCount++;
			
			// Establish our default settings
			var settings = $.extend({
				text         : 'Hello, World!',
				color        : null,
				fontStyle    : null
			}, options);
 
			var obj = $(this);
			var item = $(this).children('.slide');
			var divSlides = 1;
			
			obj.addClass("slider-"+divSliderCount+"");
		
			//create components
			var Next = document.createElement("div");
				Next.setAttribute("id", "Next-"+divSliderCount+"");
				Next.className += "divSliderController";
				Next.className += " next";
				Next.setAttribute("data-direction", 'next');
				obj.append(Next);
	
				var Prev = document.createElement("div");
				Prev.setAttribute("id", "Prev-"+divSliderCount+"");
				Prev.className += "divSliderController";
				Prev.className += " prev";
				Prev.setAttribute("data-direction", 'prev');
				obj.append(Prev);
			
				//binds
				$("#Prev-"+divSliderCount+", #Next-"+divSliderCount+"").bind('click', sliderController);
		
			//activates each slider div
			var slides = item.length;
			item.each( function( i, el ) {
				var elem = $( el );
			
				elem.addClass('sliderItem');
				if(divSlides==1){
				console.log('turned on', el);
					elem.addClass('activeSlide');
				}
				elem.attr('data-id',divSlides);  
				divSlides++;
			
			});
		
			//Initial Setup
			obj.children('.sliderItem').css({'opacity':'0','z-index':'4','display':'none'});
			obj.children('.sliderItem.activeSlide').css('transform','translateX(0px)');
			obj.children('.sliderItem.activeSlide').css({'opacity':'1','display':'block','z-index':'5'});
		
			//Slide
			function sliderController(){
				var slider = $(this).parent('.slider');
				var direction = $(this).attr('data-direction');
		
				var slideCount = $(this).parent('.slider').children('.sliderItem').length;
				var activeSlide = $(this).parent('.slider').find('.activeSlide').attr('data-id');
	
				var slideDir = '';
	
				if(direction=="prev"){
					if(activeSlide > 1){
						activeSlide = parseInt(activeSlide) - 1;
					}else{
						activeSlide = slideCount;
					}
					slideDir = '';
				}else{
					if(activeSlide == slideCount){
						activeSlide = 1;
					}else{
						activeSlide = parseInt(activeSlide) + 1;
					}
					slideDir = '-';
				}
				slider.children('.sliderItem.activeSlide').css({'transform': 'translateX('+slideDir+'300px)', 'opacity':'0'});
				slider.children('.sliderItem').removeClass('activeSlide');
		
				setTimeout(function (){hideLastSlide(slider, activeSlide);}, 300);	
			}
		
			//Hide and Show
			function hideLastSlide(slider, activeSlide){
				slider.children('.sliderItem').css({'opacity':'0','z-index':'4','display':'none'});
				slider.children('.sliderItem[data-id="'+ activeSlide +'"]').addClass('activeSlide');
				slider.children('.sliderItem.activeSlide').css('transform','translateX(0px)');
				slider.children('.sliderItem.activeSlide').css({'opacity':'0','display':'block','z-index':'5'});
				slider.children('.sliderItem.activeSlide').animate({opacity:1},300);
			}
		});
    };
 
}( jQuery ));








