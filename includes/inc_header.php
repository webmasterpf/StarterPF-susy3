<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>" prefix="og: http://ogp.me/ns#">

  <head>
    <meta charset="utf-8">
    <title><?php print $head_title; ?></title>
        <!-- Meta RWD -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
 <!-- stats-SEO -->
    <meta name="google-site-verification" content="msBEDS9QaIIEpzPS6_Wi-HOzKWr1Kw0dageOmF-4rbs" />
    <meta name="y_key" content="11677ed5e2db4f15" />
    <meta name="msvalidate.01" content="E2114447554473259DE0996EF11B87E0" />
      <?php /* Code pour scan par https://detectify.com */ ?>
    <meta name="detectify-verification" content="8497102470e46552eeca2eb8a07b7910" />
    <meta name="Generator" content="Drupal 6 (http://drupal.org)" />
    <?php print $head; ?>
    <?php print $styles; ?>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"> </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>
    <?php // IMPORTANT : charger les librairies externes avant les scripts !! ?>
   <?php print $scripts; ?>
 
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
 

  </head>

 <body class="<?php print $body_classes; ?>">
 <!-- ______________________ PAGE TOP BANDEAU _______________________ -->
 <?php
 //global $theme_path; include_once ($theme_path . '/includes/inc_bandeau_coulissant_css.php');
 ?>
 <?php
 //global $theme_path; include ($theme_path . '/includes/inc_bandeau_coulissant_js.php');
 ?>
<!-- ______________________ CONTENEUR _______________________ -->
     <section class="conteneur">
      <?php
 global $theme_path; include ($theme_path . '/includes/inc_bandeau_off_canvas_susy.php');
 ?>
    <!-- ______________________ HEADER _______________________ -->
    <header id="header">


        <div class="headHaut">

            <div class="logoHead">
                <?php if (!empty($logo)): ?>
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/></a>
                <?php endif; ?>
            </div>
      
            <?php
            //- positionner le bloc fournissant le menu dans cette région, pour v2018,le bloc Menu Général suffit (avec classe mobilenav) + bloc avec JS (sans editeur)
            if (!empty($menuDyn)): ?>
<nav class="menuOver">    
          <?php print $menuDyn; ?>
    
<!--     <a href="javascript:void(0)" class="icon">
<div class="hamburger">
  <div class="menui top-menu"></div>
  <div class="menui mid-menu"></div>
  <div class="menui bottom-menu"></div>
</div>
</a>-->
    
</nav>
           
            <!-- /menuHead  -->        
    <?php endif; ?>

        

           

        </div><!-- /headHaut -->
        <div class="headBas">

            <?php if (!empty($site_slogan)): ?>
                <div class="site-slogan">
                    <?php print $site_slogan; ?>
                </div><!-- /site-slogan -->
            <?php endif; ?>
                
                          <?php if (!empty($mission)): ?>
                <div class="objectif">
                    <?php print $mission; ?>
                </div><!-- /site-mission -->
            <?php endif; ?>


            <div class="headSearch">
                <?php if (!empty($search_box)): ?>
                    <?php print $search_box ?>
                <?php endif; ?>
            </div><!-- /recherche -->
            
            

        </div><!-- /headBas -->
   
       
    </header> <!-- /header -->
