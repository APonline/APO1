$(document).ready(function(){
  $(document).on("scroll mousedown DOMMouseScroll mousewheel keydown", function (e) {if (e.which > 0 || e.type === "mousedown" || e.type === "mousewheel") {$('html, body').stop();}});


  $('#home-title h1, #home-title h2, #home-title h3').okshadow({
    color: 'rgba(0,0,0,0.5)',
    textShadow: true,
    xMax: 50,
    yMax: 50,
    yOffset: 3,
    fuzzMin: 1,
    fuzzMax: 20,
  });

  var $w = $(window).scroll(function(){
    var docH = $(document).height();
    var currTop = $(window).scrollTop();

    if(currTop < (docH / 2)){
      //$('body').addClass('dt-above').removeClass('dt-below');
      $('#darkness').css('display','block');
    }else{
      //$('body').addClass('dt-below').removeClass('dt-above');
      $('#darkness').css('display','none');
    }
  });

parallaxIt();

});

if (window.addEventListener) window.addEventListener('DOMMouseScroll', wheel, false);
window.onmousewheel = document.onmousewheel = wheel;

var time = 3;
var distance = 50;

function wheel(event) {
    if (event.wheelDelta) delta = event.wheelDelta / 120;
    else if (event.detail) delta = -event.detail / 3;

    handle();
    if (event.preventDefault) event.preventDefault();
    event.returnValue = false;
}

function handle() {
    $('html, body').stop().animate({
        scrollTop: $(window).scrollTop() - (distance * delta)
    }, time);
}


$(document).keydown(function (e) {

    switch (e.which) {
        //up
        case 38:
            $('html, body').stop().animate({
                scrollTop: $(window).scrollTop() - distance
            }, time);
            break;

            //down
        case 40:
            $('html, body').stop().animate({
                scrollTop: $(window).scrollTop() + distance
            }, time);
            break;
    }
});





/*parallax*/
// makes the parallax elements
function parallaxIt() {
  // create variables
  var $fwindow = $(window);
  var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

  var $contents = [];
  var $backgrounds = [];

  // for each of content parallax element
  $('[data-type="content"]').each(function(index, e) {
    var $contentObj = $(this);

    $contentObj.__speed = ($contentObj.data('speed') || 1);
    $contentObj.__fgOffset = $contentObj.offset().top;
    $contents.push($contentObj);
  });

  // for each of background parallax element
  $('[data-type="background"]').each(function() {
    var $backgroundObj = $(this);

    $backgroundObj.__speed = ($backgroundObj.data('speed') || 1);
    $backgroundObj.__style = ($backgroundObj.data('style'));
    $backgroundObj.__default = ($backgroundObj.data('default') || 1);
    $backgroundObj.__fgOffset = $backgroundObj.offset().top;
    $backgrounds.push($backgroundObj);
  });

  // update positions
  $fwindow.on('scroll resize', function() {
    scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    $contents.forEach(function($contentObj) {
      var yPos = $contentObj.__fgOffset - scrollTop / $contentObj.__speed;

      $contentObj.css('top', yPos);
    })

    $backgrounds.forEach(function($backgroundObj) {
      var obb = $backgroundObj.__style;

      switch(obb){
        case 'fadeIn':
          var yPos = (scrollTop / $backgroundObj.__speed);
          yPos = (yPos/100).toFixed( 2 );

          $backgroundObj.css({
            opacity: yPos
          });
        break;

        case 'fadeOut':
          var scrollTopReverse = (scrollTop/100).toFixed( 2 );
          var yPos = ((2 - scrollTopReverse) / $backgroundObj.__speed);

          $backgroundObj.css({
            opacity: yPos
          });
        break;

        case 'lineHeight':
          var yPos = (scrollTop * $backgroundObj.__speed);
          yPos = $backgroundObj.__default + yPos;

          $backgroundObj.css({
            lineHeight: yPos + "px"
          });
        break;

        default:
          var yPos = ((scrollTop - $backgroundObj.__fgOffset) / $backgroundObj.__speed);
          yPos = (yPos/100).toFixed( 2 );

          $backgroundObj.css({
            opacity: yPos
          });
        break;
      }

    });
  });

  // triggers winodw scroll for refresh
  $fwindow.trigger('scroll');
};
