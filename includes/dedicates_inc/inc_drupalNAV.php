<?php

/*
 * Inclure la navigation du core
 * Liens Primaires,secondaires
 */
?>
      
<?php if (!empty($primary_links) or !empty($secondary_links)): ?>
    <div id="navigation" class="menu <?php if (!empty($primary_links)) {
        print "with-main-menu";
    } if (!empty($secondary_links)) {
        print " with-sub-menu";
    } ?>">
    <?php if (!empty($primary_links)) {
        print theme('links', $primary_links, array('id' => 'primary', 'class' => 'links main-menu'));
    } ?>
    <?php if (!empty($secondary_links)) {
        print theme('links', $secondary_links, array('id' => 'secondary', 'class' => 'links sub-menu'));
    } ?>
    </div> <!-- /navigation -->
<?php endif; ?>