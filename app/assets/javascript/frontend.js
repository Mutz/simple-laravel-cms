/*==========  Smooth scrolling  ==========*/
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});


/*=================================================
=            Resizing header on scroll            =
=================================================*/



function getHeaderShrinkBreakpoint() {
  if ("headerShrinkBreakpoint" in window) {
    return headerShrinkBreakpoint;
  } else {
    return 320;
  }
}

var breakpoint = getHeaderShrinkBreakpoint();

var cbpAnimatedHeader = (function() {

    var docElem = document.documentElement,
            header = document.querySelector( '.navbar-default' ),
            didScroll = false,
            changeHeaderOn = breakpoint;

    function init() {
            window.addEventListener( 'scroll', function( event ) {
                    if( !didScroll ) {
                            didScroll = true;
                            setTimeout( scrollPage, 250 );
                    }
            }, false );
    }

    function scrollPage() {
            var sy = scrollY();
            if ( sy >= changeHeaderOn ) {
                    classie.add( header, 'navbar-shrink' );
            }
            else {
                    classie.remove( header, 'navbar-shrink' );
            }
            didScroll = false;
    }

    function scrollY() {
            return window.pageYOffset || docElem.scrollTop;
    }

    init();

})();

var cbpAnimatedHeaderLogo=(function(){
  var b=document.documentElement,
      g=document.querySelector(".navbar-header"),
      e=false,
      a=breakpoint;

  function f(){
    window.addEventListener("scroll",function(h){
      if(!e){
        e=true;
        setTimeout(d,250)
      }
    },false)
  }
  function d(){
    var h=c();
    if(h>=a){
      classie.add(g,"shrink-logo")
    }else{
      classie.remove(g,"shrink-logo")}
      e=false
  }
  function c(){
    return window.pageYOffset||b.scrollTop
  }
  f();
})();
/*-----  End of Resizing header on scroll  ------*/


/*===============================================
=    Attach "img-responsive" class to images            =
===============================================*/

$(document).ready(function($){
  $('img').addClass('img-responsive mg-b-sm img-thumbnail');
})

/*-----  End of Attach "img-responsive" class to images  ------*/

