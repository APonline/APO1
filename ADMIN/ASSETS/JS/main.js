var EasingList = ['linear','swing','easeInQuad','easeOutQuad','easeInOutQuad','easeInCubic','easeOutCubic','easeInOutCubic','easeInQuart','easeOutQuart','easeInOutQuart','easeInQuint','easeOutQuint','easeInOutQuint','easeInExpo','easeOutExpo','easeInOutExpo','easeInSine','easeOutSine','easeInOutSine','easeInCirc','easeOutCirc','easeInOutCirc','easeInElastic','easeOutElastic','easeInOutElastic','easeInBack','easeOutBack','easeInOutBack','easeInBounce','easeOutBounce','easeInOutBounce'];
var Ease = EasingList[2];

$(document).ready(function(){	
	$('.pageTab').bind('click', navPages);
	
	$('.pageTab').first().trigger('click');
});

function navPages(){
	var page = $(this).attr('data-id');
	
	if(page == 'gotoMainNav'){
		$('#nav_main').addClass('active');
		$('#nav_secondary').removeClass('active');
		
		$('.pageTab').removeClass('active');	
		$('.pageTab[data-id="membersites.php"]').addClass('active');
		$('#container').load('membersites.php');
	}else{
		$('.pageTab').removeClass('active');	
		$(this).addClass('active');
		$('#container').load(page);
	}
}

 