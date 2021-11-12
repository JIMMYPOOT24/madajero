/* funcon del contador */

(function ($) {
    'use strict';

function counter() {
    if ($('.counter').length !== 0) {
      var oTop = $('.counter').offset().top - window.innerHeight;
    }
    if ($(window).scrollTop() > oTop) {
      $('.counter').each(function () {
        var $this = $(this),
          countTo = $this.attr('data-count');
        $({
          countNum: $this.text()
        }).animate({
          countNum: countTo
        }, {
          duration: 1000,
          easing: 'swing',
          step: function () {
            $this.text(Math.floor(this.countNum));
          },
          complete: function () {
            $this.text(this.countNum);
          }
        });
      });
    }
  }
  $(window).scroll(function () {
    counter();
  });
})(jQuery);


/* Validacion de formulario */

$('#contact-form').validate({
  rules: {
    name: {
      required: true,
      minlength: 4
    },
    email: {
      required: true,
      email: true
    },
    subject: {
      required: false
    },
    message: {
      required: true
    }
  },
  messages: {
    user_name: {
      required: 'Se que tienes un nombre'
    },
    email: {
      required: 'Por favor escribe tu correo electronico'
    },
    message: {
      required: '¿Nos escribiras algo?'
    }
  },
  submitHandler: function (form) {
    $(form).ajaxSubmit({
      type: 'POST',
      data: $(form).serialize(),
      url: 'sendmail.php',
      success: function () {
        $('#contact-form #success').fadeIn();
      },
      error: function () {
        $('#contact-form #error').fadeIn();
      }
    });
  }
}

);
