<?php
/* Permet de faire une page portail sans le header classique
 */
?>
<?php $theme_path = drupal_get_path('theme', 'cyrano_pf'); include ($theme_path.'/includes/inc_header_light.php'); ?>
<body class="<?php print $body_classes; ?>">
    <!-- TEMPLATE PAGE PORTAIL DE BASE  -->
  <div id="page">
    <div id="header-rwd">
      <div id="logo-title">

        <?php if (!empty($logo)): ?>
          <a href="<?php print $base_path; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          </a>
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

    <div id="contentPage-portail" class="clear-block">

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
               <?php if (!empty($title)): ?><h1 class="portail-title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
               
            <?php print $content; ?>
          </div> <!-- /content-content -->
        </div> <!-- /content -->

      </div></div> <!-- /main-squeeze /main -->

  
   

    </div> <!-- /container -->

    <div id="footer-wrapper">
      <div id="footer-portail">
        <?php print $footer_message; ?>
        <?php if (!empty($footer)): print $footer; endif; ?>
      </div> <!-- /footer -->
    </div> <!-- /footer-wrapper -->

  </div> <!-- /page -->
<div id="bloc_stats"><?php include "js/code_stats.php";?></div>
<?php print $closure ?>
</body>
</html>