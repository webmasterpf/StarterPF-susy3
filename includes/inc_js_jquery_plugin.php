<script>/*
 * Plugin Jquery qui utilisent la version de base fournie par Drupal
 * jquery update 1.3.2
 */
//<!--Pour utiliser selectnav en RWD-->
    $(document).ready(function(){
        console.log('Dans la boucle Defaut :  Version de jquery utilisée pour les plugins :' + jQuery111().jquery +
            ' -- Version de Jquery pour var $ :' + $.fn.jquery +
            ' -- Version de Jquery pour var jQuery :' + jQuery().jquery
            );
    
    selectnav('subnav',{label: '- Accès rapide -'});
    
    $("#header").sticky({topSpacing:10});
    
    //$("#volet").sidebar({position:"top",open:"click"});
    
 
    
    });   

          //Pour Off canvas Susy
jQuery(document).ready(function($) {
  var $transformer = $('.transformer'),
  $menuToggle = $('.menu-toggle');
  $('.menu-toggle').on('click', function(event) {
    event.preventDefault();
    $transformer.toggleClass('is-open');
  });

  $('.close-btn').on('click', function(event) {
    event.preventDefault();
    console.log('test');
    $transformer.removeClass('is-open');
  });
});
    //Pour enlever la taille des images sur les Gallery Formatter
    jQuery(document).ready(function(){

jQuery('#bloc-galerie-vdl .gallery-slides').each(function(){
        //jQuery(this).removeAttr('width')
        //jQuery(this).removeAttr('height');
        jQuery(this).attr("style", "width:25em;height:22em;"); 
    });

});
/*
 * Pour pouvoir utiliser plusieurs versions de Jquery : https://www.drupal.org/node/1058168
 * Utiliser jQuery111  pour les plugins qui n'utilisent pas 1.3.2 fournit par Jquery Update
 * Trés bonne explication sur action du noConflict() : 
 * http://sundropsoftware.com/how-to-use-jquery-noconflict-the-right-way/
 */
var jQuery111 = jQuery;
jQuery.noConflict();



/* Effets Jquery avec version différente de jQ */
  jQuery111(document).ready(function($){
    console.log(
'Dans la boucle Plugins :  Version de jquery utilisée pour les plugins :' + jQuery111().jquery +
' -- Version de Jquery pour var $ :' + $.fn.jquery +
' -- Version de Jquery pour var jQuery :' + jQuery().jquery
     );  
    
        //header colle au top
    //jQuery("#header").sticky({topSpacing:10});

    
    // volet coulissant v1
    //jQuery111(".bandeau-pagetop").sidebar({position:"top",open:"click"});

//https://github.com/jillix/jQuery-sidebar#documentation
    $(".sidebar.top").sidebar({side: "top"});
    $(".sidebar.top").trigger("sidebar:toggle");
   });
   </script>