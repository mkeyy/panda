(function ($, window, document, undefined) {
    'use strict';

    /**
     * Ready Event
     */
    $(document).ready(function () {
        //
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
