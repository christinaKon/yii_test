$(document).ready(function() {
  slider = {
    attach: function (context, settings) {
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
    initialize: function (slider, options, context) {
      $(slider, context).slick(options);
    }
  };

  slider.attach();
});
