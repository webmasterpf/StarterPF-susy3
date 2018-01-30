//Save the new jQuery.
newjQuery = $.noConflict(true);
//Restore the original one.
jQuery = jQueryOriginal;
$ = jQuery;
console.log(
            ' Les versions de jQuery disponibles après le EXIT :  -- Version de Jquery pour var $ :' + $.fn.jquery +
            ' -- Version de Jquery pour var jQuery :' + jQuery().jquery+
            ' -- Version de Jquery pour var jQueryOriginal :' + jQueryOriginal().jquery+
            ' -- Version de Jquery pour var newjQuery :' + newjQuery().jquery
            );