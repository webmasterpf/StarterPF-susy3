<?php
/* Ce template permet la création d'un layout multicolonne pour les pages de base, en permettant la disposition facile
 * des champs CCK custom, si nécessaires pour une page de base.
*/?>
<!--______________NODE TPL POUR PAGE.TPL CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
    <div class="node-inner">
                <!--______________ ILLUSTRATION et TITRE ________________ -->
        <div id="zone-illustration" class="page-lycee">
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
        <!--______________COLONNE 1________________ -->
      <div id="colonne-1" class="layout_3col_all4 page-lycee">
          
        <?php if ($node->field_lycee_logocoordtxt[0]['view']): ?>
      <span id="lycee-coordlogo">
                 <?php  print $node->field_lycee_logocoordtxt[0]['view'] ?>
      </span>
             <?php endif; ?>    
             
       <br clear="all"/>      
    <?php if ($node->field_lycee_form[0]['view']): ?>
      <span id="lycee-formation">
                 <?php  print $node->field_lycee_form[0]['view'] ?>
      </span>
             <?php endif; ?>
            
          <?php
              global $theme_path;
              include ($theme_path.'/includes/regions_inc/inc_region_col_1.php');
              ?>
        </div>
        <!--______________COLONNE 2________________ -->
         <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
        <div id="colonne-2" class="layout_3col_all4 page-lycee">

            <?php print $picture; ?>

            <?php if ($submitted): ?>
            <span class="submitted"><?php print $submitted; ?></span>
            <?php endif; ?>
  <?php if ($title): /*copier le titre dans la colonne desirée*/?>
            <h1 class="titre-lycee"><?php print $title; ?></h1>
            <?php endif; ?>
            <div class="content">
                <?php   print $node->content['body']['#value'];/*déplacer le contenu dans la colonne désirée*/ ?>
            </div>
     <?php
              global $theme_path;
              include ($theme_path.'/includes/regions_inc/inc_region_col_2.php');
              ?>
            
              <?php if ($terms): ?>
        <div class="taxonomy"><?php //print $terms; ?></div>
        <?php endif;?>

        <?php if ($links): ?>
        <div class="links"> <?php //print $links; ?></div>
        <?php endif; ?>
        </div>
         <!--______________COLONNE 3________________ -->
            <div id="colonne-3" class="layout_3col_all4last page-lycee">
                
             
       <?php if ($node->field_video_externe[0]['view']): ?>
      <span class="video-lycee">
                 <?php  print $node->field_video_externe[0]['view'] ?>
      </span>
             <?php endif; ?>           
       
             
      <?php if ($node->field_lycee_gmap[0]['view']): ?>
      <span id="gmap-lycee">
                 <?php  print $node->field_lycee_gmap[0]['view'] ?>
      </span>
             <?php endif; ?>
                    <?php
              global $theme_path;
              include ($theme_path.'/includes/regions_inc/inc_region_col_3.php');
              ?>
            
        </div>
      
      
    </div> <!-- /node-inner -->
</div> <!-- /node-->