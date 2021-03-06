/**
 *
 * Base theme javascript file
 * Put all your scripts related to your theme in here.
 * Keep in mind that this file will get concatenated into
 * a singular file.
 *
 */

// If we don't have an object for our theme create it.

if( typeof({%= js_safe_name %}) == 'undefined' ) {
    {%= js_safe_name %} = {};
}

{%= js_safe_name %}.site = function ( $ ) {
    // Private Variables
    var $window    = $(window),
        $doc       = $(document),
        $body      = $('body'),
        self;

    return {
        /*
         * function init
         * Kick off all of the business
         */

        init: function() {
            self = {%= js_safe_name %}.site;

	        // initialize foundation
	        $doc.foundation();
        }
    };
} ( jQuery );

jQuery(function( $ ) {
    {%= js_safe_name %}.site.init();
});