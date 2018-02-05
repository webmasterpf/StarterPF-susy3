/*
 * Pour pouvoir utiliser plusieurs versions de Jquery : https://www.drupal.org/node/1058168
 * Utiliser jQuery normalement.
 * Trés bonne explication sur action du noConflict() : 
 * http://sundropsoftware.com/how-to-use-jquery-noconflict-the-right-way/
 */

(function ($) {
 jQuery(document).ready(function ()
    {
        //<!--Pour utiliser selectnav en RWD-->
        console.log('Chargement du script pour selectnav');
        selectnav('subnav', {label: '- Accès rapide -'});
        
        //Pour surcharger éléments des diaporama de views
        $('.diapo_fiche div.views_slideshow_cycle_teaser_section').css('width', 'auto'),
        $('.diapo_fiche .views_slideshow_cycle_teaser_section').css('height', 'auto'),
        $('.diapo_fiche  .views_slideshow_cycle_teaser_section').css('max-width', '100%');
        $('.views_slideshow_cycle_slide').css('position', 'relative', 'important');
        $('.views_slideshow_cycle_hidden').css('position', 'relative', 'important');
        $('#views_slideshow_cycle_div_Diapo_illustration-block_1_0').css('position', 'relative', 'important');
        $('#views_slideshow_cycle_div_Diapo_illustration-block_1_1').css('position', 'relative', 'important');
        $('.views_slideshow_cycle_slide').not(':visible').css('position', 'absolute', 'important');
    });
    

    jQuery(document).ready(function ()
    {

//OffCanvas avec fonction anonyme
        console.log('Chargement du script pour volet coulissant');
        var $transformer = $('.transformer'),
                $menuToggle = $('.menu-toggle');
        $('.menu-toggle').on('click', function (event) {
            event.preventDefault();
            $transformer.toggleClass('is-open');
        });

        $('.close-btn').on('click', function (event) {
            event.preventDefault();
            console.log('bouton referme volet fonctionne !');
            $transformer.removeClass('is-open');
        });

    });


//Pour une galerie standard : Flexslider
    jQuery(window).load(function () {
                console.log('Chargement des paramètres de Flexslider');
        $('.flexslider-classic').flexslider({
            //animation: "slide",
            directionNav: true,
            controlNav: false,
            start: function(slider){
     $('body').removeClass('loading');
        $('.flexslider-classic').resize();
        
    }
            
        });
        
        //Flexslider pour HP (avec caption)
         $('.flexslider-hp').flexslider({
             animation: "slide"
         });
    });
    
         //Pour une galerie avec des vignettes : Flexslider thumbs
     jQuery(window).load(function () {
            console.log('Chargement des paramètres de FlexsliderThumbs');
        $('#carousel').flexslider({
            animation: "slide",
            controlNav: false,
            directionNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 210,
            itemMargin: 5,
            asNavFor: '#slider'
        });

        $('#slider').flexslider({
            animation: "slide",
            controlNav: true,
            directionNav: false,
            animationLoop: false,
            slideshow: false,
            sync: "#carousel"
        });
    });
    
    //Pour le BxSlider - Ajouter la classe dans views au niveau des paramètres d'affichage > classe de la liste
    //    jQuery(window).load(function (){
        jQuery(document).ready(function(){
        console.log('Chargement des paramètres de BxSlider');
//  $('.bxslider').bxSlider({
//      pagerCustom: "#bx-pager",
//   captions: true
//  });
   
   console.log('Chargement des paramètres de BxSlider Illus');
    $('.bxslider-illus').bxSlider({
            mode: 'fade',
            controls: false,
            captions: false,
            auto: true,
            autoStart: true,
            pager: false
    });
   
        console.log('Chargement des paramètres de BxSlider HP');
        $('.bxslider-hp').bxSlider({
            mode: 'fade',
            controls: true,
            captions: true,
            auto: true,
            autoStart: true,
            pager: false,
            keyboardEnabled: true
        });
//   alert('BxSlider est chargé');
   
});

//Pour Galerie Chocolat.js
//    jQuery(document).ready(function(){
//        console.log('Appel du script Chocolat.js');
//    $('.chocolat-parent').Chocolat();
//});

//Pour Galerie BaguetteBox.js
    jQuery(document).ready(function () {
        console.log('Appel du script BaguetteBox.js');
        baguetteBox.run('.galerieBaguetteBox', {
            // Custom options
        });
        
        //Pour Responsive Slides
 console.log('Appel du script ResponsiveSlides.js');
        $(".rslides").responsiveSlides
        
        ({
// Custom options
            pager: false, // Boolean: Show pager, true or false
            nav: false, // Boolean: Show navigation, true or false
            random: true, // Boolean: Randomize the order of the slides, true or false
            pause: false        // Boolean: Pause on hover, true or false
        });



    });
    jQuery(document).ready(function() {
    $(".lightSlider").lightSlider(); 
  });
   
  //Pour stacktable (tableaux RWD)
    jQuery(window).load(function (){
        console.log('Chargement des paramètres de Stacktable.js');
        //Ajouter l'ID de la table à rendre RWD
  //Cible toutes les tables contenues dans la div.content (colonne-2)
  $('div.content').children('table') .stacktable();
});

//Slick Basic, nav par points, transition fade
//jQuery(document).ready(function ()
// {
// $('.slickdiapofade').slick({
//  dots: true,
//  infinite: true,
//  speed: 500,
//  fade: true,
//  cssEase: 'linear'
//});
//}); 
//
////Pour utiliser Slick avec une nav par miniatures (thumbs)
//jQuery(document).ready(function ()
// {
//   $('.slider-for').slick({
//  slidesToShow: 1,
//  slidesToScroll: 1,
//  arrows: false,
//  fade: true,
//  asNavFor: '.slider-nav'
//});
//$('.slider-nav').slick({
//  slidesToShow: 3,
//  slidesToScroll: 1,
//  asNavFor: '.slider-for',
//  dots: true,
//  centerMode: true,
//  focusOnSelect: true
//});
//}); 

//// Script pour Masonry - Views casse les __ utiliser -- plutôt

//    jQuery(document).ready(function () 
    jQuery(window).on('load', function()
    {
        console.log('Chargement des paramètres Masonry.js');
        'use strict';
        var $masonryContainer = $('.masonry');
        //$masonryContainer.imagesLoaded(function () {
            $masonryContainer.masonry({
                itemSelector: '.masonry--item',
                columnWidth: '.masonry--column',
                gutter: '.masonry--gutter',
                //percentPosition: true

            });
       // });
        //GoogleFont cause un problème avec Masonry
        (function () {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                    '://ajax.googleapis.com/ajax/libs/webfont/1.4.2/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    
    });
//// Script pour Wookmark (liste html)
//jQuery(document).ready(function ()
//{
//  console.log('Chargement des paramètres Wookmark.js');   
//$('#wookmark-id li').wookmark({
//            autoResize: true, // This will auto-update the layout when the browser window is resized.
//            container: $('#tiles'), // Optional, used for some extra CSS styling
//            offset: 2, // Optional, the distance between grid items
//            itemWidth: 210 // Optional, the width of a grid item
//        });
// 
// window.onresize = function(event) {
//     $('#wookmark-id li').wookmark({offset: 2});
// }
//  });
  
//jQuery(document).ready(function ()
jQuery(window).on('load', function()
    {
        //<!-- Pour ajouter classes sur éléments du tableau -->
        console.log('Actions sur divers éléments : tableaux, images...');
       //Ajout des classes pour styler les tableaux
$('table tr:odd').addClass('odd');
$('table tr:even') .addClass('even');
//Ajout d'attributs pour mur image JS
$('#liste-vdl ul.wookmark').attr("id", "wookmark-id");
$('#liste-vdl div.view-content').attr("id","grid");
$('#liste-vdl div.view-content').attr("data-columns","");




//Action sur taille des images : retrait de toutes les tailles en dur (HTML) de manière ciblée
 //$('img').each(function(){
    $('.fiche-formation img').each(function(){
 $(this).removeAttr('width');
 $(this).removeAttr('height');
 });


 

//Changer la casse des titres H1 qui sont en Majuscules
$('h1').css('text-transform','lowercase');
$('.titre-vdl a').css('text-transform','lowercase');
$('#liste-vdl span.titre-vdl > a').css('text-transform','lowercase');

//Retirer les style en ligne issus de copier/coller
        $("#colonne-2 span").removeAttr("style");
        $("#colonne-2 p").removeAttr("style");
        $("#colonne-2 ul").removeAttr("style");
        $(".masonry-brick").removeAttr("style");//pas d'effet
 
    //Retrait position:absolute sur le Views Slideshow       
  $('.views_slideshow_cycle_slide:visible').css('position', 'relative', 'important');
  $('.views_slideshow_cycle_slide').not(':visible').css('position', 'absolute', 'important');

//Style pour les iframes contenus dans des § pour le RWD - ajout de classe pour traitement CSS
$(".contenu-vdl p:has(iframe)").addClass('external-content');
$(".page-lycee p:has(iframe)").addClass('external-content');

    });
    

  //Views Slideshow Cycle RWD    

$(window).resize(function(){
  $('.views_slideshow_cycle_main').each(function(){
    var cycleMain = $(this);
    var img_width = 0,
        img_height = 0;
    var clearCSS = {width: "auto", height: "auto"};
    var cycle = cycleMain.children('.views-slideshow-cycle-main-frame');
    cycleElements = cycle.data("cycle.opts");
    cycle.css(clearCSS);
    cycleMain.find('.views-slideshow-cycle-main-frame-row').each(function(i){
      $(this).css(clearCSS);
      var tmp_img_width = $(this).width();
      var tmp_img_height = $(this).height();
      if(tmp_img_width > img_width)
        img_width = tmp_img_width;
      if(tmp_img_height > img_height)
        img_height = tmp_img_height;
      cycleElements.elements[i].cycleW = tmp_img_width;
      cycleElements.elements[i].cycleH = tmp_img_height;
      $(this).css({width: tmp_img_width, height: tmp_img_height});
    });
    cycleMain.height(img_height);
    cycle.css({width: img_width, height: img_height});
    cycle.data("cycle.opts.elements", cycleElements);
  });
});

    

// Pour MixItUp plugin: voir le fichier ajout.classes.mixitup.js
// Calling the MixItUp plugin for this View.
//    jQuery(window).load(function () {
//        console.log('Chargement de Mixitup');
//        $('.mixitup').mixItUp();
//    });

 //Menu Pleine Page Overlay
$(document).ready(function () {
  $(".icon").click(function () {
        $('.mobilenav').fadeToggle(500);
            $('.top-menu').toggleClass('top-animate');
            $('.mid-menu').toggleClass('mid-animate');
            $('.bottom-menu').toggleClass('bottom-animate');
  });
});

//  Utilisation du Lazyload pour les éléments contenus dans certains conteneurs
$('.conteneur').find('img').lazyLoadXT();
$('.conteneur').find('iframe').lazyLoadXT();

})(jQuery);
