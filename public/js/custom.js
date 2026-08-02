
  (function ($) {
  
  "use strict";

    // MENU
    $('.navbar-collapse a').on('click',function(){
      $(".navbar-collapse").collapse('hide');
    });
    
    // CUSTOM LINK
    $('.smoothscroll').click(function(){
      var el = $(this).attr('href');
      var elWrapped = $(el);
      var header_height = $('.navbar').height();
  
      scrollToDiv(elWrapped,header_height);
      return false;
  
      function scrollToDiv(element,navheight){
        var offset = element.offset();
        var offsetTop = offset.top;
        var totalScroll = offsetTop-navheight;
  
        $('body,html').animate({
        scrollTop: totalScroll
        }, 300);
      }
    });
  
  })(window.jQuery);

  (function ($) {

  "use strict";

    $(document).ready(function () {
      $('.open-order-modal').on('click', function () {
        var button = $(this);
        var model = button.data('model') || '';
        var price = button.data('price') || '';
        var power = button.data('power') || '';
        var modalTitle = button.data('modal-title') || '';
        var subtitle = [price, power].filter(Boolean).join(' · ');

        $('#installationOrderModalLabel').text(modalTitle);
        $('#modalSelectedModelSubtitle').text(subtitle);
        $('#modalInputModelName').val(model);
        $('#modalInputPrice').val(price);
        $('#modalInputPowerArea').val(power);
      });
    });

  })(window.jQuery);


