(function ($) {
    Drupal.behaviors.myBehavior = {
        attach: function (context, settings) {
            $(".nav a").hide();
            $(".nav a").fadeIn(3000);
        }
    };
})(jQuery);