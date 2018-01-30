    <!-- ******* TEMPLATE DE NODE POUR PAGE BTS *********************** -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
<!--_______________________ COLONNE 1 __________________ -->
<div id="colonne-1" class="col-1-btsentrepise">

    <?php if (!$page): ?>
      <h2 class="title"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>

    <?php print $picture; ?>

    <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>

    <div class="content">
      <?php  print $node->content['body']['#value']; ?>

           <?php if ($node->field_txt_dossier[0]['view']): ?>
        <div id="txt-dossier-bts">
                <?php  print $node->field_txt_dossier[0]['view'] ?>
        </div>
   <?php endif; ?>


         <?php if ($node->field_dossier_bts[0]['view']): ?>
        <div id="dossier-bts">
            <span id="DossierBTS">
<?php  print $node->field_dossier_bts[0]['view'] ?>
</span>
                  </div>
   <?php endif; ?>
        
         <?php if ($node->field_centres_bts[0]['view']): ?>
        <div id="centres-bts">
                <?php  print $node->field_centres_bts[0]['view'] ?>
        </div>
   <?php endif; ?>    
            
       <?php
 $theme_path = drupal_get_path('theme', 'cyrano_pf');
 include ($theme_path.'/includes/inc_liste_bts.php');
 ?> 
 <?php if ($node->field_corps2_page_bts[0]['view']): ?>
        <div id="content2-bts">
                <?php  print $node->field_corps2_page_bts[0]['view'] ?>
        </div>
   <?php endif; ?>        

        <br clear="all"/>
      
      
    </div>

    <?php if ($terms): ?>

      <div id="taxonomy">
<?php print Cyrano_PF_print_terms($node);?>
      </div>
    <?php endif;?>

    <?php if ($links): ?> 
      <div class="links"> <?php print $links; ?></div>
    <?php endif; ?>
      
       <!-- retour haut selon resolution de l'ecran -->
          <a href="#general" id="retour_haut">Haut de page</a>
</div>
<!--_______________________ COLONNE 2 __________________ -->
<div id="colonne-2" class="col-2-btsentrepise">
         <?php
 /* inclusion d'une region pour bloc */
              $theme_path = drupal_get_path('theme', 'cyrano_pf');
              include ($theme_path.'/includes/inc_region_col_G3.php');
              ?>
</div>
  </div> <!-- /node-inner -->
</div> <!-- /node-->