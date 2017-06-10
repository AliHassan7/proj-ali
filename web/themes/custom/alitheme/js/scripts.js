(function ($) {
    Drupal.behaviors.myBehavior = {
        attach: function (context, settings) {
            //Fade in effect for the main menu on desktop view
            $("#block-alitheme-main-menu-menu .nav a").hide();
            $("#block-alitheme-main-menu-menu .nav a").fadeIn(3500);
            //Social media block at the bottom of the responsive menu
            $('<div id="mobile-social"><ul>' +
                '<li class="linkedin"><a href="https://www.linkedin.com/in/llalihassanll" target="_blank">LinkedIn</a></li>' +
                '<li class="twitter"><a href="https://twitter.com/JustDrupaling" target="_blank">Twitter</a></li>' +
                '<li class="instagram"><a href="https://www.instagram.com/loyaltyisfirst" target="_blank">Instagram</a></li>' +
                '</ul></div>').insertAfter(".mm-listview");
        }
    };
})(jQuery);