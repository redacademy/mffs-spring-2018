(function($) {
  $('.main-carousel').flickity({
    cellAlign: 'center',
    wrapAround: true,
    contain: true,
    lazyLoad: 1,
    pauseAutoPlayOnHover: false
  });

  var $menuToggle = $('.menu-toggle');
  var $mainNavigation = $('.main-navigation');
  var $hamburgerMenu = $('.hamburger');

  $menuToggle.on('click', function(e) {
    e.preventDefault();
    $mainNavigation.toggleClass('toggled');
    $hamburgerMenu.toggleClass('is-active');
  });
})(jQuery);
