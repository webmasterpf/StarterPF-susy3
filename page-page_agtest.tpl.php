<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

  <head>
    <meta charset="utf-8">
    <title><?php print $head_title; ?></title>
    <!-- Meta RWD -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- stats-SEO -->
    <meta name="google-site-verification" content="" />
    <meta name="y_key" content=""/>
    <meta name="msvalidate.01" content="" />
    <?php print $head; ?>
    <?php print $styles; ?>

    <?php print $scripts; ?>
    <script src="<?php print $base_path . path_to_theme() ?>/js/typos.js" type="text/javascript" charset="utf-8"></script>

 <?php
$theme_path = drupal_get_path('theme', 'starterd6_pf_susy2'); 
include ($theme_path.'/js/google_font.php');
?>
  </head>

 <body class="<?php print $body_classes; ?>">
     
     <section class="conteneur">
     <!-- ______________________ HEADER _______________________ -->
    <header id="header">


        <div class="headHaut">

            <div class="logoHead">
                <?php if (!empty($logo)): ?>
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/></a>
                <?php endif; ?>
            </div>

            <div class="menuImg">
                <?php if (!empty($navStatic)): ?>
                    <?php print $navStatic; ?>
                <?php endif; ?>
            </div>

        </div><!-- /headHaut -->
        <div class="headBas">

            <?php if (!empty($site_slogan)): ?>
                <div class="site-slogan">
                    <?php print $site_slogan; ?>
                </div><!-- /site-slogan -->
            <?php endif; ?>


            <div class="headSearch">
                <?php if (!empty($search_box)): ?>
                    <?php print $search_box ?>
                <?php endif; ?>
            </div><!-- /recherche -->


            <nav class="menuHead">
                <?php if (!empty($menuDyn)): ?>
                    <?php print $menuDyn; ?>
                <?php endif; ?>

            </nav><!-- /menuHead -->


        </div><!-- /headBas -->


    </header> <!-- /header -->
    <!-- ______________________ CONTENT INNER GLOBAL _______________________ -->

    <div class="content-global">
       <div class="content-inner page-MODELE">
           
            <!-- ______________________ CONTENT TOP _______________________ -->
      <?php if ($breadcrumb ||$content_top): ?>
            <div class="content-top">
	<span class="ariane"> <?php print $breadcrumb; ?></span>

              <?php print $content_top; ?>
            </div> <!-- /#content-top -->
            <?php endif; ?>

  <!-- ______________________ CONTENT TOP NODE_______________________ -->
               <?php if ($content_top_node): ?>
            <div id="content-top-node">
	              <?php print $content_top_node; ?>
            </div> <!-- /#content-top-node -->
            <?php endif; ?>

          <?php if ($mission || $messages || $help || $tabs): ?>
            <div class="content-header">

              <?php if ($mission): ?>
                <div id="mission"><?php print $mission; ?></div>
              <?php endif; ?>

              <?php print $messages; ?>

              <?php print $help; ?>

              <?php if ($tabs): ?>
                <div class="tabs"><?php print $tabs; ?></div>
              <?php endif; ?>

            </div> <!-- /#content-header -->
          <?php endif; ?>

  <!-- ______________________ CONTENU CENTRAL _______________________ -->
         <div class="middle-content page-MODELE">

            <?php print $content; ?>
              <?php print $feed_icons; ?>
          </div> <!-- /#middle-content -->  
  


        <?php if (!empty($primary_links) or !empty($secondary_links)): ?>
          <div id="navigation" class="menu <?php if (!empty($primary_links)) { print "with-main-menu"; } if (!empty($secondary_links)) { print " with-sub-menu"; } ?>">
            <?php if (!empty($primary_links)){ print theme('links', $primary_links, array('id' => 'primary', 'class' => 'links main-menu')); } ?>
            <?php if (!empty($secondary_links)){ print theme('links', $secondary_links, array('id' => 'secondary', 'class' => 'links sub-menu')); } ?>
          </div> <!-- /navigation -->
        <?php endif; ?>
   	
         <!-- ______________________ CONTENU BAS _______________________ -->
<?php if ($content_bottom): ?>
            <div class="content-bottom">
              <?php print $content_bottom; ?>
            </div><!-- /#content-bottom -->
          <?php endif; ?>
    </div> <!-- /content-inner /content -->
    </div>
<!-- ______________________ FOOTER _______________________ -->
      <?php if(!empty($footer_message) || !empty($footer_block)): ?>
<footer id="footer">
          <?php print $footer_message; ?>
          <?php print $footer_block; ?>
     <div id="bloc_stats">
      V&eacute;rifier les codes pour les stats
      <?php
global $theme_path;
include ($theme_path.'/js/code_stats.php');
?>
     </div>
</footer> <!-- /footer -->
      <?php endif; ?>
     

 </section><!-- /container -->
 <?php print $closure ?>
  </body>
</html>