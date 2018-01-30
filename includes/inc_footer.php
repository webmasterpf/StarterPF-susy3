<!-- ______________________ FOOTER _______________________ -->
      <?php if(!empty($footer_message) || !empty($footer_block)): ?>
<footer id="footer">
          <?php print $footer_message; ?>
          <?php print $footer_block; ?>
     <div id="bloc_stats">
        
      <?php
global $theme_path;
include ($theme_path.'/js/google_font.php');
include ($theme_path.'/js/code_stats.php');
?>
     </div>
</footer> <!-- /footer -->
      <?php endif; ?>
       
    </section> 
    <!-- ______________________ /CONTENEUR _______________________ -->
           <?php 
           global $theme_path;
          
          //include ($theme_path.'/includes/inc_drupal_debug.php');
           ?>
                                 
    
	<?php print $closure ?>
   
  </body>
</html>