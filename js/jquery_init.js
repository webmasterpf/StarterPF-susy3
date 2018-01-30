var jQueryOriginal = jQuery.noConflict(true);
console.log(
            ' Les versions de jQuery disponibles après le INIT :  -- Version de Jquery pour var $ :' + $.fn.jquery +
            ' -- Version de Jquery pour var jQuery :' + jQuery().jquery+
            ' -- Version de Jquery pour var jQueryOriginal :' + jQueryOriginal().jquery
            );