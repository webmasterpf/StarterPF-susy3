<?php
/* 
 * Permet d'avoir un template spécial pour le webform
 * NODE-WEBFORM.TPL GENERIK si besoin possible faire theme pour webform selon node-webform-NID.tpl.php
 * Webform 419 - Profil eleve
 */

?>
<?php
/* Permet de faire une page sans le header classique (pas de menu)*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyled Content in IE */ ?> </script>
</head>
<body class="<?php print $body_classes; ?>">
    <!-- TEMPLATE PAGE EPUREE DE BASE  
    --- PAGE.TPL -->
  <div id="page">
    <div id="header-rwd">
      <div id="logo-title">

        <?php if (!empty($logo)): ?>
<!--          <a href="<?php print $base_path; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">-->
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
<!--          </a>-->
        <?php endif; ?>

        <div id="name-and-slogan-portail">
          <?php /*if (!empty($site_name)): ?>
            <h1 id="site-name-portail">
              <a href="<?php print $base_path ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
            </h1>
          <?php endif; */?>

          <?php if (!empty($site_slogan)): ?>
            <div id="site-slogan-portail"><?php print $site_slogan; ?></div>
          <?php endif; ?>
        </div> <!-- /name-and-slogan -->
      </div> <!-- /logo-title -->

      <?php if (!empty($header)): ?>
        <div id="header-region">
          <?php print $header; ?>
        </div>
      <?php endif; ?>

    </div> <!-- /header -->

    <div id="contentPage-squeeze" class="clear-block">

       <?php if ($content_top): ?>
            <div id="content-top">
              <?php print $content_top; ?>
            </div> <!-- /#content-top -->
          <?php endif; ?>
      
      <div id="main" class="column"><div id="main-squeeze">

        <div id="content">
         
           <?php if ($mission || $messages || $help || $tabs): ?>
            <div id="content-header">              

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
          <div id="middle-content-portail" class="clear-block">
               <?php if (!empty($title)): ?><h1 class="portail-title" id="page-title"><?php //print $title; ?></h1><?php endif; ?>
               
          
  <?php print $content; ?>
  

          </div> <!-- /content-content -->
        </div> <!-- /content -->

      </div></div> <!-- /main-squeeze /main -->

  
   

    </div> <!-- /container -->

    <div id="footer-wrapper">
      <div id="footer-squeeze">
<?php //retrait des infos du footer y compris logo ?>          
        <?php print $footer_message; ?>
        <?php if (!empty($footer)): print $footer; endif; ?>
      </div> <!-- /footer -->
    </div> <!-- /footer-wrapper -->

  </div> <!-- /page -->
<div id="bloc_stats"><?php include "js/code_stats.php";?></div>
</body>
</html>