(function () {

    "use strict";

    global.$    = require("jquery");

    var Swiper  = require("swiper");

    function addGrunge (el) {
      var grunge = ["gr-1.jpg","gr-2.jpg","gr-3.jpg","gr-4.jpg","gr-5.jpg","gr-6.png","gr-7.jpg","gr-8.jpg","gr-9.jpg","gr-10.jpg","gr-11.jpg","gr-12.jpg","gr-13.jpg","gr-14.jpg","gr-15.jpg","gr-16.jpg","gr-17.png","gr-18.png","gr-19.png","gr-20.png","gr-21.png","gr-22.png","gr-23.jpg","gr-24.jpg","gr-25.jpg","gr-26.jpg","gr-27.png"];
      $(el).each(function(){
        console.log($(this));
        $(this).css({
          "background-image" : "url(img/" + grunge[ Math.floor( Math.random() * grunge.length ) ] + ")"
        });
      });
    }

    $(function () {

    $('#close').on('click', function() {
      $('.global').hide();
    });

    $('.post').on('mouseover', function(){
      $(this).addClass('active');
      $(this).find('.inspiration, .result').addClass('active');
    });
    $('.post').on('mouseout', function(){
      $(this).removeClass('active');
      $(this).find('.inspiration, .result').removeClass('active');
    });

    var mySwiper = new Swiper ('.swiper-container', {
      // Optional parameters
      direction: 'horizontal',
      loop:       false,
      speed:      800,

      // If we need pagination
      pagination: '.swiper-pagination',
      paginationType: 'custom',

      scrollbar: '.swiper-scrollbar',
      scrollbarHide: false,

      // Navigation arrows
      nextButton: '.swiper-button-next',
      prevButton: '.swiper-button-prev',

      paginationCustomRender : function(swiper, current, total){
        console.log(current + 'of' + total) ;
      },

      slidesPerView: 1.5,

      spaceBetween: 10


    });

    });

}());
