<?php
/* Ce template permet la création d'un layout multizone pour les pages de base, en permettant la disposition facile
 * des champs CCK custom, si nécessaires pour une page de base.
*/?>
<!--______________NODE TPL POUR PAGE.TPL CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
    <div class="node-inner">
                <!--______________ ILLUSTRATION et TITRE ________________ -->
        <div id="zone-diaporama" class="page-lycee">
                     <?php if ($title): /*copier le titre dans la zone desirée*/?>
         
            <?php endif; ?>
            
             <?php if ($node->field_diapo_lycee_type[0]['view']
                 OR
                 $title
                 ): ?>
            <div id="illustration-pleinepage" class="diapo-lycee">
                   <h1 class="titre_overlay titre_page"><?php print $title; ?></h1>
                 <?php  print $node->field_diapo_lycee_type[0]['view'] ?>
            </div>
            <?php endif;?>
     
            
            </div><!-- /zone-illustration -->
        <!--______________ ZONE 1 ________________ -->
      <div id="zone-1" class="zone_layout_max_centre page-lycee">
          
        <?php if ($node->field_lycee_logocoordtxt[0]['view']): ?>
      <span id="lycee-coordlogo">
                 <?php  print $node->field_lycee_logocoordtxt[0]['view'] ?>
      </span>
             <?php endif; ?>    
             
       

            
          <?php
              global $theme_path;
              include ($theme_path.'/includes/regions_inc/inc_region_zone_1.php');
              ?>
        </div>
        <!--______________ZONE 2________________ -->
         <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
        <div id="zone-2" class="zone_layout_max_centre page-lycee">

            <?php print $picture; ?>

            <?php if ($submitted): ?>
            <span class="submitted"><?php print $submitted; ?></span>
            <?php endif; ?>
            <div class="content">
                <?php   print $node->content['body']['#value'];/*déplacer le contenu dans la zone désirée*/ ?>
            </div>
            
                   <?php if ($node->field_video_externe[0]['view']): ?>
      <span class="video-lycee">
                 <?php  print $node->field_video_externe[0]['view'] ?>
      </span>
             <?php endif; ?>     
            
     <?php
              global $theme_path;
              include ($theme_path.'/includes/regions_inc/inc_region_zone_2.php');
              ?>
            
              <?php if ($terms): ?>
        <div class="taxonomy"><?php //print $terms; ?></div>
        <?php endif;?>

        <?php if ($links): ?>
        <div class="links"> <?php //print $links; ?></div>
        <?php endif; ?>
        </div>
         <!--______________ZONE 3________________ -->
         <div id="zone-3" class="zone1_layout_7_5 page-lycee">
                
                 <?php if ($node->field_lycee_form[0]['view']): ?>
      <span id="lycee-formation">
                 <?php  print $node->field_lycee_form[0]['view'] ?>
      </span>
             <?php endif; ?>
      </div><!-- /zone3-->
       
              <!--______________ZONE 4________________ -->
              <div id="zone-4" class="zone2_layout_7_5 page-lycee">
      <?php if ($node->field_lycee_gmap[0]['view']): ?>
      <span id="gmap-lycee">
                 <?php  print $node->field_lycee_gmap[0]['view'] ?>
      </span>
             <?php endif; ?>
                    <?php
              global $theme_path;
              include ($theme_path.'/includes/regions_inc/inc_region_zone_3.php');
              ?>
            
      </div><!-- /zone4-->
      
      
    </div> <!-- /node-inner -->
</div> <!-- /node-->