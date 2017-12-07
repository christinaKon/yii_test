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
      this.button('.people__add a', '.people__actions', '.shown');
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
      this.stickyElement('.questions-bar');
      this.animatedScroll('.questions-bar');
      this.activeBar('.questions-bar a');
    },
    stickyElement: function(el) {
      if ($(el).length) {
        $(document).on("scroll", onScroll);
        var questionsTop = $(el).offset().top;

        function onScroll(event) {
          var winTop = $(window).scrollTop();
          if(winTop >= questionsTop){
            $(el).addClass('affix');
          } else {
            $(el).removeClass('affix');
          }
        };
      }
    },
    animatedScroll: function(el) {
      $(el).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
      });
    },
    activeBar: function(el) {
      if ($(el).length) {
        var elLength = $(el).length;
        $(document).on("scroll", onScroll);

        function onScroll(event) {
          var scrollPos = $(document).scrollTop();
          for (var i = 0; i < elLength; i++) {
            var $this       = $(el).eq(i);
            var $refElement = $($this.attr("href"));
            if ($refElement.offset().top <= scrollPos && $refElement.offset().top + $refElement.height() - 20 > scrollPos) {
              $(el).removeClass("active");
              $this.addClass("active");
            }
            else {
              $this.removeClass("active");
            }
          }
        }
      }
    }
  };

  addTheme = {
    attach: function(el) {
      var newTheme  = ('<div class="my-theme"><input type="text"><i class="material-icons">remove_circle</i></div>');
      var $addTheme = $('.my-themes .add-theme');

      $(document).on('click', '.my-themes .add-theme', function(e) {
        $addTheme.before(newTheme);
        $('.my-theme').last().find('input').focus();
      });

      $(document).on('blur', '.my-theme input', function(event) {
        if (!$(this).val().length || $(this).val() == 'undefined') {
          $(this).closest('div').remove();
        }
      });
    }
  }

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
  addTheme.attach();
  // headerScroll.attach();
});




