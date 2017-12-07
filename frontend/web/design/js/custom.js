$(document).ready(function() {
  slider = {
    attach: function (settings) {
      var opt = [
        {
          slider: '.how-it-works .slider',
          options: {
            arrows: false,
            dots: true
          }
        },
        {
          slider: '.brands .slider',
          options: {
            autoplay: true,
            arrows: false,
            slidesToShow: 5
          }
        },
        {
          slider: '.clients-reviews .slider',
          options: {
            arrows: false,
            dots: true
          }
        }
      ];

      // Place your code here.
      for (var i = 0; i < opt.length; i++) {
        this.initialize(opt[i].slider, opt[i].options);
      }
    },
    initialize: function (slider, options) {
      $(slider).slick(options);
    }
  };

  select = {
    attach: function (settings) {
      $("select").select2({
        allowClear:true
       // placeholder: 'Search for a disease'
      });
    }
  };

  addButton = {
    attach: function(settings) {
      this.button('.people .people__add a', '.people__actions', '.shown');
    },
    button: function(el, parent, shown) {
      $(el).click(function(e) {
        if ($(parent).find(shown).length && !$(this).hasClass('shown')) {
          $(parent).find(shown).removeClass('shown').next().hide(400);
          $(this).addClass('shown').next().show(400);
        } else if($(this).hasClass('shown')) {
          $(this).removeClass('shown').next().hide(400);
        } else {
          $(this).addClass('shown').next().show(400);
        }
      })
    }
  };

  helpScroll = {
    attach: function(settings) {
      $(window).scroll(function(){
        var $winTop       = $(window).scrollTop();
        var $questionsTop = $('.questions-bar').offset().top;
        if($winTop >= $questionsTop){
          $('.questions-bar').addClass('affix');
        } else {
          $('.questions-bar').removeClass('affix');
        }
      });
    }
  };

  // headerScroll = {
  //   attach: function (context, settings) {
  //     var $thisObj = this;
  //     $thisObj.sticker('.header', '.header-wrapper', context);
  //   },
  //   getElementHeight: function(el, context) {
  //     var $elHeight = $(el, context).innerHeight();
  //     return $elHeight;
  //   },
  //   sticker: function(el, setHeight, context) {
  //     var $thisObj      = this;
  //     var $headerHeight = $thisObj.getElementHeight(el, context);
  //     $(setHeight).css('height', $headerHeight);

  //     $(window).resize(function(){
  //       $headerHeight = $thisObj.getElementHeight(el, context);
  //       $(setHeight).css('height', $headerHeight);
  //     });

  //     $(window).scroll(function(){
  //       var $winTop = $(window).scrollTop();
  //       if($winTop >= 1){
  //         $("body").addClass("sticky-header");
  //       } else {
  //         $("body").removeClass("sticky-header");
  //       }
  //     });
  //   }
  // };

  slider.attach();
  select.attach();
  addButton.attach();
  helpScroll.attach();
  // headerScroll.attach();
});




