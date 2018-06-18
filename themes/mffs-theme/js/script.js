(function($) {
  var $menuToggle = $('.menu-toggle');
  var $mainNavigation = $('.main-navigation');
  var $hamburgerMenu = $('.hamburger');

  $menuToggle.on('click', function(e) {
    e.preventDefault();
    $mainNavigation.toggleClass('toggled');
    $hamburgerMenu.toggleClass('is-active');
  });
})(jQuery);
