/*
 * Plugin Jquery qui utilisent la version de base fournie par Drupal
 * jquery update 1.3.2
 */
(function ($) {

//    jQuery(document).ready(function ()
//    {
//        //Header collant haut de page
//        console.log('Chargement du script pour header fixe');
//      $("#header").sticky({topSpacing: 10});
//    });
    


    //Pour enlever la taille des images sur les Gallery Formatter
    jQuery(document).ready(function () {

        jQuery('#bloc-galerie-vdl .gallery-slides').each(function () {
            //jQuery(this).removeAttr('width')
            //jQuery(this).removeAttr('height');
            jQuery(this).attr("style", "width:25em;height:22em;");
        });

    });
})(jQuery);