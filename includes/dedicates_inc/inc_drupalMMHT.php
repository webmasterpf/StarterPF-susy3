<?php

/*
 * Inclure les infos admin
 * pour les pages tel Message et les onglets
 */
?>
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