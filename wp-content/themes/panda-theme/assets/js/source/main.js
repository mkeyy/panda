(function ($, window, document, undefined) {
    'use strict';

    /**
     * Ready Event
     */
    $(document).ready(function () {
        handleMobileMenu();

        function handleMobileMenu() {
            const menu = $('#pt-primary-navbar'),
                target = menu.find('.pt-aside__content');

            $('#pt-toggle-menu').on('click', function (e) {
                e.preventDefault();

                bodyScrollLock.enableBodyScroll(target[0]);
                menu.toggleClass('pt-active');

                if (menu.hasClass('pt-active')) {
                    bodyScrollLock.disableBodyScroll(target[0]);
                }
            });
        }
    });

    /**
     * Scroll Event
     */
    $(window).scroll(function () {
        //
    });

    /**
     * Load Event
     */
    $(window).load(function () {
        /** */
        $(window)
            .trigger('scroll')
            .trigger('resize');
    });

    /**
     * Resize Event
     */
    $(window).on('resize orientationchange', function () {
        //
    });
})(jQuery, window, document);
