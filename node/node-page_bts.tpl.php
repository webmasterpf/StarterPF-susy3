    <!-- ******* TEMPLATE DE NODE POUR PAGE BTS *********************** -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
           <!--______________ ILLUSTRATION et TITRE ________________ -->
        <div id="zone-illustration" class="page-bts">
                     <?php if ($title): /*copier le titre dans la zone desirée*/?>
         
            <?php endif; ?>
            
             <?php if ($node->field_illus_administratif[0]['view']
                 OR
                 $title
                 ): ?>
            <div id="illustration-pleinepage" class="illustration-bts">
                   <h1 class="titre_overlay titre_page"><?php print $title; ?></h1>
                 <?php  print $node->field_illus_administratif[0]['view'] ?>
            </div>
            <?php endif;?>
     
            
            </div><!-- /zone-illustration -->
<!--_______________________ ZONE 1 __________________ -->
<div id="zone-1" class="zone_layout_max_centre page-bts">

 

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
 global $theme_path;
 include ($theme_path.'/includes/dedicates_inc/inc_liste_bts.php');
 ?> 
 <?php if ($node->field_corps2_page_bts[0]['view']): ?>
        <div id="content2-bts">
                <?php  print $node->field_corps2_page_bts[0]['view'] ?>
        </div>
   <?php endif; ?>        

           <?php
              global $theme_path;
              include ($theme_path.'/includes/regions_inc/inc_region_zone_1.php');
              ?>
      
      
    </div>

    <?php if ($terms): ?>

      <div id="taxonomy">
<?php print Cyrano_PF_print_terms($node);?>
      </div>
    <?php endif;?>

    <?php if ($links): ?> 
      <div class="links"> <?php print $links; ?></div>
    <?php endif; ?>
      
</div>

  </div> <!-- /node-inner -->
</div> <!-- /node-->