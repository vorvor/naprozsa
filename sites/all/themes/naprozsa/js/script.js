(function($) {
Drupal.behaviors.myBehavior = {
  attach: function (context, settings) {

    $('#map-anchor').click(function() {
    	$('html, body').animate({scrollTop: $('#place').offset().top -100 }, 'slow');
    });

  }
};
})(jQuery);

