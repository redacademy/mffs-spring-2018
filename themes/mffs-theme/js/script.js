(function($) {
  // carousel init, config
  $('.main-carousel').flickity({
    cellAlign: 'center',
    wrapAround: true,
    contain: true,
    lazyLoad: 0,
    pauseAutoPlayOnHover: false
  });

  // hamberger nav menu
  var $menuToggle = $('.menu-toggle');
  var $mainNavigation = $('.main-navigation');
  var $hamburgerMenu = $('.hamburger');

  $menuToggle.on('click', function(e) {
    e.preventDefault();
    $mainNavigation.toggleClass('toggled');
    $hamburgerMenu.toggleClass('is-active');
  });

  // var popupTemplate =
  //   '<div class="popup-inner"><i class="fas fa-heart"></i><p>Thank you very much for your support!</p><p>You will be redirected to canada helps.org page now.</p><img src="../../assets/gifs/loadingdots.gif" alt=""><a href="https://www.canadahelps.org/en/charities/Moving-Forward-Family-Services-Society/" target="_blank">Click here if the browser does not refresh</a></div>';

  var popupTemplate = $('.popup-inner');
  var donateTemplate = $('.donate-popup');

  $('.popup-inner').hide();
  $('.donate-popup').hide();

  // donate embed popup
  $('.donate-embed').on('click', function(e) {
    e.preventDefault();

    $('html, body').animate(
      {
        scrollTop: 180
      },
      300
    );

    $('.donate-popup').show();
    $('.site-content').append(donateTemplate);
    $('#main').css('filter', 'blur(10px)');
  });

  $('.donate-close-popup').on('click', function(e) {
    e.preventDefault();
    $('.donate-popup').hide();
    $('#main').css('filter', 'none');
  });

  // donate leave page popup
  $('#donate-redirect').on('click', function(e) {
    e.preventDefault();

    $('html, body').animate(
      {
        scrollTop: 100
      },
      300
    );

    var url = $(this).attr('href');

    setTimeout(function() {
      // console.log(url);
      window.location.href = url;
    }, 2000);

    // console.log('click');
    $('body').addClass('popup-active');
    $('.popup-inner').show();
    $('.site-content').append(popupTemplate);
    $('#main').css('filter', 'blur(10px)');
  });
})(jQuery);
