jQuery(function ($) {
  'use strict';

  $(window).scroll(function (event) {
     Scroll();
   });


  $('.navbar-collapse ul li a').on('click', function () {
    $('html, body').animate({
      scrollTop: $(this.hash).offset().top - 5
    }, 1000);
    return false;
  });

  function Scroll() {
    var contentTop = [];
    var contentBottom = [];
    var winTop = $(window).scrollTop();
    var rangeTop = 200;
    var rangeBottom = 500;
    $('.navbar-collapse').find('.scroll a').each(function () {
      contentTop.push($($(this).attr('href')).offset().top);
      contentBottom.push($($(this).attr('href')).offset().top + $($(this).attr('href')).height());
    })
    $.each(contentTop, function (i) {
      if (winTop > contentTop[i] - rangeTop) {
        $('.navbar-collapse li.scroll')
          .removeClass('active')
          .eq(i).addClass('active');
      }
    })
  };



  $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').focus()
  })


  var slideIndex = 0;
  showSlides();

  function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex> slides.length) {slideIndex = 1}
      slides[slideIndex-1].style.display = "block";
      setTimeout(showSlides, 4000); // Change image every 4 seconds
  }


  $('#tohash').on('click', function () {
    $('html, body').animate({
      scrollTop: $(this.hash).offset().top - 5
    }, 1000);
    return false;
  });


  new WOW().init();

  smoothScroll.init();


  $(window).load(function () {
    'use strict';
    var $portfolio_selectors = $('.portfolio-filter >li>a');
    var $portfolio = $('.portfolio-items');
    $portfolio.isotope({
      itemSelector: '.portfolio-item',
      layoutMode: 'fitRows'
    });

    $portfolio_selectors.on('click', function () {
      $portfolio_selectors.removeClass('active');
      $(this).addClass('active');
      var selector = $(this).attr('data-filter');
      $portfolio.isotope({
        filter: selector
      });
      return false;
    });
  });

  $(document).ready(function () {

    $.fn.animateNumbers = function (stop, commas, duration, ease) {
      return this.each(function () {
        var $this = $(this);
        var start = parseInt($this.text().replace(/,/g, ""));
        commas = (commas === undefined) ? true : commas;
        $({
          value: start
        }).animate({
          value: stop
        }, {
          duration: duration == undefined ? 1000 : duration,
          easing: ease == undefined ? "swing" : ease,
          step: function () {
            $this.text(Math.floor(this.value));
            if (commas) {
              $this.text($this.text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
            }
          },
          complete: function () {
            if (parseInt($this.text()) !== stop) {
              $this.text(stop);
              if (commas) {
                $this.text($this.text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
              }
            }
          }
        });
      });
    };

    $('.business-stats').bind('inview', function (event, visible, visiblePartX, visiblePartY) {
      var $this = $(this);
      if (visible) {
        $this.animateNumbers($this.data('digit'), false, $this.data('duration'));
        $this.unbind('inview');
      }
    });
  });


  $("a[rel^='prettyPhoto']").prettyPhoto({
    social_tools: false
  });


});

function initialize()
{
    var latlng = new google.maps.LatLng(42.770943,-86.072392);
    var latlng2 = new google.maps.LatLng(42.804221,-86.100384);
    var myOptions =
    {
        zoom: 15,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var myOptions2 =
    {
        zoom: 15,
        center: latlng2,
        mapTypeId: google.maps.MapTypeId.ROAPMAP
    };

    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

    var map2 = new google.maps.Map(document.getElementById("map_canvas_2"), myOptions2);



    var myMarker = new google.maps.Marker(
    {
        position: latlng,
        map: map,
        fontWeight: 'bold',
        label: 'WCP Location 1',
   });

    var myMarker2 = new google.maps.Marker(
    {
        position: latlng2,
        map: map2,
        fontWeight: 'bold',
        label: 'WCP Location 2',

    });


}
