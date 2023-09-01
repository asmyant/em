$(document).ready(function () {
  $('.no-transition').removeClass('no-transition');

  let {ajaxurl} = window.post_ajax_data;

  $('.js-news-slider').slick({
    slidesToShow: 3,
    infinite: false,
    arrows: true,
    swipeToSlide: true,
    nextArrow: `
      <button class="slick-next slick-arrow">
         <svg xmlns="http://www.w3.org/2000/svg" width="40" height="74" viewBox="0 0 40 74" fill="none">
            <path d="M0.899941 0.901552C1.42097 0.380404 2.11172 0.0635408 2.84659 0.00857572C3.58147 -0.0463894 4.31167 0.164194 4.90443 0.602037L5.24907 0.901552L39.0984 34.7509C39.6196 35.2719 39.9365 35.9627 39.9914 36.6976C40.0464 37.4324 39.8358 38.1626 39.398 38.7554L39.0984 39.1001L5.24907 72.9494C4.69928 73.4949 3.96399 73.8131 3.18996 73.8403C2.41593 73.8676 1.66009 73.602 1.07329 73.0965C0.48648 72.591 0.111869 71.8828 0.0242188 71.1133C-0.063431 70.3437 0.142326 69.5695 0.600426 68.9449L0.899941 68.6003L32.5747 36.9255L0.899941 5.25068C0.32368 4.6737 0 3.89158 0 3.07612C0 2.26065 0.32368 1.47853 0.899941 0.901552Z" fill="#C7C7C7"/>
         </svg>
      </button>
    `,
    prevArrow: `
      <button class="slick-prev slick-arrow">
         <svg width="40" height="74" viewBox="0 0 40 74" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M39.1001 0.901552C38.579 0.380404 37.8883 0.0635408 37.1534 0.00857572C36.4185 -0.0463894 35.6883 0.164194 35.0956 0.602037L34.7509 0.901552L0.901554 34.7509C0.380405 35.2719 0.0635414 35.9627 0.00857544 36.6976C-0.0463905 37.4324 0.164196 38.1626 0.602039 38.7554L0.901554 39.1001L34.7509 72.9494C35.3007 73.4949 36.036 73.8131 36.81 73.8403C37.5841 73.8676 38.3399 73.602 38.9267 73.0965C39.5135 72.591 39.8881 71.8828 39.9758 71.1133C40.0634 70.3437 39.8577 69.5695 39.3996 68.9449L39.1001 68.6003L7.42525 36.9255L39.1001 5.25068C39.6763 4.6737 40 3.89158 40 3.07612C40 2.26065 39.6763 1.47853 39.1001 0.901552Z" fill="#C7C7C7"/>
        </svg>
      </button>
    `,
    responsive: [
      {
        breakpoint: 1500,
        settings: {
          arrows: false,
          dots: true,
        }
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          dots: true,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
        }
      }
    ]
  });

  $('.js-one-slider').slick({
    arrows: false,
    dots: true,
  });

  $('select').niceSelect({});


  const $button = $('.js-ajax-load-more');
  const $container = $('.js-load-more-container');
  let currentPage = 1;

  $button.click(function () {
    $.ajax({
      url: ajaxurl,
      data: {
        action: $button.data('action'),
        page: currentPage,
        type: $button.data('post-type'),
      },
      type: 'POST',
      beforeSend: function () {
        $button.attr('disabled', 'disabled');
        $button.html('Загрузка...');
      },
      success: function (data) {
        currentPage++;

        if (Number(currentPage) === Number($button.data('max'))) {
          $button.remove();
        }

        $button.removeAttr('disabled');
        $container.append(data);
      }
    });
  });

  let loop = 0;
  $('.js-mobile-menu li a').click(function (e) {
    loop++;

    if ($(this).parent().hasClass('menu-item-has-children')) {
      e.preventDefault();

      $('.js-mobile-menu ul').removeClass('active');

      $(this).next('ul').addClass('active-' + loop).css({
        'transform': 'translateX(0)',
        'z-index': '90',
      });

      $('.js-mobile-menu__active').show().html($(this).html()).attr('href', $(this).attr('href'));

      $('.js-mobile-menu__back').show();
    }
  });

  $('.js-mobile-menu__back').click(function () {
    let activeLink = $('.active-' + (loop - 1)).prev();
    let activeUl = $('.active-' + loop);

    activeUl.removeClass('active-' + loop).css({
      'transform': 'translateX(100%)',
      'z-index': '0',
    });

    $('.js-mobile-menu__active').show().html(activeLink.html()).attr('href', activeLink.attr('href'));

    if (loop === 1) {
      $(this).hide();
      $('.js-mobile-menu__active').hide();
    }

    loop--;
  });

  $('.js-mobile-menu__toggle').click(function () {
    $('.js-mobile-menu').toggleClass('active');
    $('body').toggleClass('fixed');
  });

  $('[href="#feedback"]').click(function () {
    $('.modal__header .h3').html($(this).data('title'))
  });

  $('.mask-input').on('keyup', function () {
    if ($(this).val()[4] == '8') {
      $(this).val('');
    }
  });

  [].forEach.call(document.querySelectorAll('.mask-input'), function (input) {
    let keyCode;
    function mask(event) {
      event.keyCode && (keyCode = event.keyCode);
      let pos = this.selectionStart;
      if (pos < 3) event.preventDefault()
      let matrix = "+7 (___) ___-__-__",
        i = 0,
        def = matrix.replace(/\D/g, ""),
        val = this.value.replace(/\D/g, ""),
        newValue = matrix.replace(/[_\d]/g, function (a) {
          return i < val.length ? val.charAt(i++) || def.charAt(i) : a;
        });
      i = newValue.indexOf("_");
      if (i != -1) {
        i < 5 && (i = 3);
        newValue = newValue.slice(0, i);
      }
      let reg = matrix.substr(0, this.value.length).replace(/_+/g,
        function (a) {
          return "\\d{1," + a.length + "}";
        }).replace(/[+()]/g, "\\$&");
      reg = new RegExp("^" + reg + "$");
      if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = newValue;
      if (event.type == "blur" && this.value.length < 5) this.value = "";
    }

    input.addEventListener("input", mask, false);
    input.addEventListener("focus", mask, false);
    input.addEventListener("blur", mask, false);
    input.addEventListener("keydown", mask, false);
    input.addEventListener('mouseup', event => {
      event.preventDefault()
      if (input.value.length < 4) {
        input.setSelectionRange(4, 4)
      } else {
        input.setSelectionRange(input.value.length, input.value.length)
      }
    })
  });

  $('input[type="file"]').change(function () {
    $('.js-file-name').html($(this).val().replace(/C:\\fakepath\\/i, ''));
  })
});
