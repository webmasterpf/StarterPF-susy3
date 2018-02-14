       <!-- ______________________ PAGE TPL _______________________ -->
<?php
global $theme_path;
include ($theme_path.'/includes/inc_header.php');
?>  

       <!-- ______________________ CONTENT INNER GLOBAL _______________________ -->

        <div class="content-inner">
            
              <!-- ______________________ CONTENT TOP _______________________ -->
      <?php if ($breadcrumb ||$content_top): ?>
            <div id="content-top">
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
             <article class="middle-content">

            <?php print $content; ?>
              <?php print $feed_icons; ?>
                  </article> <!-- /#content-area -->

      </div> <!-- /content-inner /content -->
<!-- ______________________  ACCES RUBRIQUES 3 - CONTACT  _______________________ -->
<?php if ($RubriquesHP3): ?>
    <div class="acces_rubriques"><?php print $RubriquesHP3; ?></div>
<?php endif; ?> 

      <!-- ______________________ ACCES LOGOS PARTENAIRES _______________________ -->
<?php if ($LogoPart): ?>
    <div class="logo_partenaires"><?php print $LogoPart; ?></div>
<?php endif; ?>   

         <!-- ______________________ CONTENU BAS _______________________ -->
         
<?php if ($content_bottom): ?>
            <div class="content-bottom">
              <?php print $content_bottom; ?>
            </div><!-- /#content-bottom -->
          <?php endif; ?>

            <?php
global $theme_path;
include ($theme_path.'/includes/inc_footer.php');
?>                