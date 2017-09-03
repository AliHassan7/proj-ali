(function ($) {
    Drupal.behaviors.myBehavior = {
        attach: function (context, settings)
        {
            $( document ).ready(function() {
                //Fade in effect for the main menu on desktop view
            $(".navbar-header").slideDown(2000);
            //Social media block at the bottom of the responsive menu
            $('<div id="mobile-social"><ul>' +
                '<li class="linkedin"><a href="https://www.linkedin.com/in/llalihassanll" target="_blank">LinkedIn</a></li>' +
                '<li class="twitter"><a href="https://twitter.com/JustDrupaling" target="_blank">Twitter</a></li>' +
                '<li class="instagram"><a href="https://www.instagram.com/loyaltyisfirst" target="_blank">Instagram</a></li>' +
                '</ul></div>').insertAfter(".mm-listview");

            $('.intro img').hover(function(){
                $(this).attr('src','themes/custom/alitheme/images/paint-ali.png');
            },function(){
                $(this).attr('src','themes/custom/alitheme/images/candid-ali.png');
            });

                $(window).scroll( function(){

                    /* Check the location of each desired element */
                    $('.hideme').each( function(i){

                        var bottom_of_object = $(this).offset().top + $(this).outerHeight()/4;
                        var bottom_of_window = $(window).scrollTop() + $(window).height();

                        /* If the object is completely visible in the window, fade it in */
                        if( bottom_of_window > bottom_of_object ){

                            $(this).animate({'opacity':'1'},1000);

                        }

                    });

                });

                if ($('li.entity-pager-item-next span.inactive').length) {
                    $("ul.entity-pager-list").addClass("pager-last");
                }

                if ($('li.entity-pager-item-prev span.inactive').length) {
                    $("ul.entity-pager-list").addClass("pager-first");
                }

                $(".field--name-body, .field--name-field-tablet-image, .field--name-field-mobile-image, #block-views-block-pager-block-1, #block-worktogether, footer").addClass("hideme");

            });
        }
    };
})(jQuery);