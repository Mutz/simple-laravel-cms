/*===============================================
=    Attach "img-responsive" class to images            =
===============================================*/

$(document).ready(function($){
  $('img').addClass('img-responsive mg-b-sm img-thumbnail');
})

/*-----  End of Attach "img-responsive" class to images  ------*/


/*==========================================
=            jquery.scrollto.js            =
==========================================*/
/*!
 * jquery.scrollto.js 0.0.1 - https://github.com/yckart/jquery.scrollto.js
 * Scroll smooth to any element in your DOM.
 *
 * Copyright (c) 2012 Yannick Albert (http://yckart.com)
 * Licensed under the MIT license (http://www.opensource.org/licenses/mit-license.php).
 * 2013/02/17
 **/
$.scrollTo = $.fn.scrollTo = function(x, y, options){
    if (!(this instanceof $)) return $.fn.scrollTo.apply($('html, body'), arguments);

    options = $.extend({}, {
        gap: {
            x: 0,
            y: 0
        },
        animation: {
            easing: 'swing',
            duration: 800,
            complete: $.noop,
            step: $.noop
        }
    }, options);

    return this.each(function(){
        var elem = $(this);
        elem.stop().animate({
            scrollLeft: !isNaN(Number(x)) ? x : $(y).offset().left + options.gap.x,
            scrollTop: !isNaN(Number(y)) ? y : $(y).offset().top + options.gap.y
        }, options.animation);
    });
};


/*-----  End of jquery.scrollto.js  ------*/


  /*============================================
  News - Masonry
  ==============================================*/
  $(window).load(function(){
    $news = $('#news');

    $news.css({visibility:'visible'});

    $news.masonry({
      itemSelector: '.news',
      columnWidth:350,
      isFitWidth: true,
      isResizable: true,
      isAnimated: !Modernizr.csstransitions,
      gutterWidth: 0
    });

    scrollSpyRefresh();
    waypointsRefresh();
  });




$(document).ready(function() {

  /*============================================
  Navigation Functions
  ==============================================*/
  if ($(window).scrollTop()===0){
    $('#main-nav').removeClass('scrolled');
  }
  else{
    $('#main-nav').addClass('scrolled');    
  }

  $(window).scroll(function(){
    if ($(window).scrollTop()===0){
      $('#main-nav').removeClass('scrolled');
    }
    else{
      $('#main-nav').addClass('scrolled');    
    }
  });

  /*============================================
  ScrollTo Links
  ==============================================*/
  $('a.scrollto').click(function(e){
    $('html,body').scrollTo(this.hash, this.hash, {gap:{y:-80}});
    e.preventDefault();

    if ($('.navbar-collapse').hasClass('in')){
      $('.navbar-collapse').removeClass('in').addClass('collapse');
    }
  });

  /*============================================
  Header Functions
  ==============================================*/
  $('.jumbotron').height($(window).height()+50);
  $('.message-box').css({'marginTop':$(window).height()*0.4});
 

  /*============================================
  Project Preview
  ==============================================*/
  // $('.project-item').click(function(e){
  //   e.preventDefault();

  //   var elem = $(this),
  //     title = elem.find('.project-title').text(),
  //     link = elem.attr('href'),
  //     descr = elem.find('.project-description').html(),
  //     slidesHtml = '<ul class="slides">',

  //     slides = elem.data('images').split(',');

  //   for (var i = 0; i < slides.length; ++i) {
  //     slidesHtml = slidesHtml + '<li><img src='+slides[i]+' alt=""></li>';
  //   }
    
  //   slidesHtml = slidesHtml + '</ul>';
    

  //   $('#project-modal').on('show.bs.modal', function () {
  //     $(this).find('h1').text(title);
  //     $(this).find('.btn').attr('href',link);
  //     $(this).find('.project-descr').html(descr);
  //     $(this).find('.image-wrapper').addClass('flexslider').html(slidesHtml);
      
  //     setTimeout(function(){
  //       $('.image-wrapper.flexslider').flexslider({
  //         slideshowSpeed: 3000,
  //         animation: 'slide',
  //         controlNav: false,
  //         start: function(){
  //           $('#project-modal .image-wrapper')
  //           .addClass('done')
  //           .prev('.loader').fadeOut();
  //         }
  //       });
  //     },1000);
  //   }).modal();
    
  // });

  // $('#project-modal').on('hidden.bs.modal', function () {
  //   $(this).find('.loader').show();
  //   $(this).find('.image-wrapper')
  //     .removeClass('flexslider')
  //     .removeClass('done')
  //     .html('')
  //     .flexslider('destroy');
  // });
  
  /*============================================
  Resize Functions
  ==============================================*/
  $(window).resize(function(){
    $('.jumbotron').height($(window).height());
    $('.message-box').css({'marginTop':$(window).height()*0.4});
    scrollSpyRefresh();
    waypointsRefresh();
  });
  
  /*============================================
  Project Hover mask on IE
  ==============================================*/
  $('.no-csstransitions .hover-mask').hover(
    function() {
      $( this ).stop(true,true).animate({opacity: 1});
    }, function() {
      $( this ).stop(true,true).animate({opacity: 0});
    }
  );
  
  /*============================================
  Placeholder Detection
  ==============================================*/
  if (!Modernizr.input.placeholder) {
    $('#contact-form').addClass('no-placeholder');
  }

  /*============================================
  Scrolling Animations
  ==============================================*/
  $('.scrollimation').waypoint(function(){
    $(this).toggleClass('in');
  },{offset:'90%'});

  /*============================================
  Refresh scrollSpy function
  ==============================================*/
  function scrollSpyRefresh(){
    setTimeout(function(){
      $('body').scrollspy('refresh');
    },1000);
  }

  /*============================================
  Refresh waypoints function
  ==============================================*/
  function waypointsRefresh(){
    setTimeout(function(){
      $.waypoints('refresh');
    },1000);
  }

}); 