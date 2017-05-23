var EasingList = ['linear','swing','easeInQuad','easeOutQuad','easeInOutQuad','easeInCubic','easeOutCubic','easeInOutCubic','easeInQuart','easeOutQuart','easeInOutQuart','easeInQuint','easeOutQuint','easeInOutQuint','easeInExpo','easeOutExpo','easeInOutExpo','easeInSine','easeOutSine','easeInOutSine','easeInCirc','easeOutCirc','easeInOutCirc','easeInElastic','easeOutElastic','easeInOutElastic','easeInBack','easeOutBack','easeInOutBack','easeInBounce','easeOutBounce','easeInOutBounce'];
var Ease = EasingList[2];

$(document).ready(function(){
	$('.page.active .ani-U').removeClass('ani-U-in').addClass('ani-U-out');
	$('.page.active .ani-R').removeClass('ani-R-in').addClass('ani-R-out');
	$('.page.active .ani-D').removeClass('ani-D-in').addClass('ani-D-out');
	$('.page.active .ani-L').removeClass('ani-L-in').addClass('ani-L-out');
	
	$('.page.inactive .ani-U').removeClass('ani-U-in').addClass('ani-U-out');
	$('.page.inactive .ani-R').removeClass('ani-R-in').addClass('ani-R-out');
	$('.page.inactive .ani-D').removeClass('ani-D-in').addClass('ani-D-out');
	$('.page.inactive .ani-L').removeClass('ani-L-in').addClass('ani-L-out');
	
	init();
});

//init styles, call functions, set binds
function init(){
	runBindSet();	
	$('html, body').delay(200).animate({opacity:1},500, Ease, function(){
		aniIn();
	});
}

//bind controls
function runBindSet(){
	$('.action-btn').bind('click', actionBtn);
}

//actions
function actionBtn(){
	var command = $(this).attr('data-action');
	
	switch(command){
		case 'leave landing':
			aniOut('changePage', '2');
		break;		
		case 'landing':
			var id = $(this).attr('data-id');
			aniOut('changePage', id);
		break;		
		case 'change page':
			var id = $(this).attr('data-id');
			aniOut('changePage', id);
		break;
		case 'change subpage':
			var id = $(this).attr('data-id');
			aniOut('changeSubPage', id);
		break;		
		default:
		break;
	}
}

//animate out objects
function aniOut(action, actionData){
	//hide edges
	$('body').addClass('hideEdge');
	
	//active page up
	var up = $('.page.active').find('.ani-U');
	if(up){
		if(up.length>0){	
			$.each(up, function(i, item){
				setTimeout(function(){
					$(item).removeClass('ani-U-in').addClass('ani-U-out');
				}, i * 100);
			});
		}
	}
	
	//active page right
	var right = $('.page.active').find('.ani-R');
	if(right){
		if(right.length>0){
			$.each(right, function(i, item){
				setTimeout(function(){
					$(item).removeClass('ani-R-in').addClass('ani-R-out');
				}, i * 100);
			});
		}
	}
	
	//active page down
	var down = $('.page.active').find('.ani-D');
	if(down){
		if(down.length>0){
			down = down.toArray().reverse();
			$.each(down, function(i, item){
				setTimeout(function(){
					$(item).removeClass('ani-D-in').addClass('ani-D-out');
				}, i * 100);
			});
		
		}
	}
	
	//active page left
	var left = $('.page.active').find('.ani-L');
	if(left){
		if(left.length>0){
			$.each(left, function(i, item){
				setTimeout(function(){
					$(item).removeClass('ani-L-in').addClass('ani-L-out');
				}, i * 100);
			});
		}
	}
	
	var delay=500;
	setTimeout(function() {
		switch(action){
			case 'changePage':
				changePage(actionData);
			break;
			case 'changeSubPage':
				changeSubPage(actionData);
			break;	
			default:
				setTimeout(aniIn, 500);
			break;
		}
	}, delay);

}

//animate in objects
function aniIn(){

	//active page up
	var up = $('.page.active').find('.ani-U');
	if(up){
		if(up.length>0){	
			up = up.toArray().reverse();
			$.each(up, function(i, item){
				setTimeout(function(){
					$(item).addClass('ani-U-in').removeClass('ani-U-out');
				}, i * 100);
			});
		}
	}
	
	//active page right
	var right = $('.page.active').find('.ani-R');
	if(right){
		if(right.length>0){
			$.each(right, function(i, item){
				setTimeout(function(){
					$(item).addClass('ani-R-in').removeClass('ani-R-out');
				}, i * 100);
			});
		}
	}
	
	//active page down
	var down = $('.page.active').find('.ani-D');
	if(down){
		if(down.length>0){
			$.each(down, function(i, item){
				setTimeout(function(){
					$(item).addClass('ani-D-in').removeClass('ani-D-out');
				}, i * 100);
			});
		}
	}
	
	//active page left
	var left = $('.page.active').find('.ani-L');
	if(left){
		if(left.length>0){
			$.each(left, function(i, item){
				setTimeout(function(){
					$(item).addClass('ani-L-in').removeClass('ani-L-out');
				}, i * 100);
			});
		}
	}	
	
	//show edges
	setTimeout(
	function(){
		$('body').removeClass('hideEdge');
	}, 1000);
}


//change pages
function changePage(actionData){
	$('.page').animate({opacity:0},150, function(){	
		setTimeout(
			function(){
			$('nav ul li').removeClass('activeNav');
			$('.page.active').removeClass('active');
			$('.page').addClass('inactive');
			$('subnav').removeClass('active');
	
			$('.page[data-id="'+actionData+'"]').addClass('active');
			$('nav ul li.mainNav[data-id="'+actionData+'"]').addClass('activeNav');
			$('.page.active').removeClass('inactive');
			$('.page.active').animate({opacity:1},150);
			
			//subnav
			$('subnav[data-id="'+actionData+'"]').addClass('active');
		},160);
	});
	//navigation
	if(actionData != 1){
		$('nav').animate({top:'0px'},150,Ease);
	}else{
		$('nav').animate({top: '-200px'},150,Ease);
	}
	
	var delay=400;
	setTimeout(function() {
		if($('subnav[data-id="'+actionData+'"]').hasClass('active')){
			$('subnav[data-id="'+actionData+'"]').find('.action-btn').first().trigger('click');
		}else{
			aniIn();
		}
	}, delay);
}

//change sub pages
function changeSubPage(actionData){
	$('.portSection').animate({opacity:0},50, function(){	
		setTimeout(
			function(){
			$('subnav ul li').removeClass('activeNav');
			$('.portSection.active').removeClass('active');
			$('.portSection').addClass('inactive');
	
			$('.portSection[data-id="'+actionData+'"]').addClass('active');
			$('subnav ul li[data-id="'+actionData+'"]').addClass('activeNav');
			$('.portSection.active').removeClass('inactive');
			$('.portSection.active').animate({opacity:1},50);
		},60);
	});
	
	var delay=160;
	setTimeout(function() {
		aniIn();
	}, delay);
}
