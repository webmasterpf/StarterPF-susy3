<?php
/* Ce template permet la création d'un layout multicolonne pour les pages de base, en permettant la disposition facile
 * des champs CCK custom, si nécessaires pour une page de base.
*/?>
<!--______________NODE TPL POUR PAGE.TPL CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
    <div class="node-inner">
            <!--______________ ILLUSTRATION et TITRE ________________ -->
        <div id="zone-illustration" class="page-association">
                     <?php if ($title): /*copier le titre dans la zone desirée*/?>
         
            <?php endif; ?>
            
             <?php if ($node->field_illus_administratif[0]['view']
                 OR
                 $title
                 ): ?>
            <div id="illustration-pleinepage" class="illustration-association">
                   <h1 class="titre_overlay titre_page"><?php print $title; ?></h1>
                 <?php  print $node->field_illus_administratif[0]['view'] ?>
            </div>
            <?php endif;?>
     
            
            </div><!-- /zone-illustration -->
            <!--______________ZONE 1________________ -->
      
        <div id="zone-1" class="zone_layout_max_centre page-association">
          <?php print $picture; ?>

            <?php if ($submitted): ?>
            <span class="submitted"><?php print $submitted; ?></span>
            <?php endif; ?>

          
               <div class="content">
                   
                             <?php
              global $theme_path;
              include ($theme_path.'/includes/regions_inc/inc_region_zone_1.php');
              ?>
                   
                             <?php if ($node->field_entrefilet[0]['view']): ?>
                <blockquote class="entrefilet">
                 <?php  print $node->field_entrefilet[0]['view'] ?>
                </blockquote>
             <?php endif; ?> 
                   
                <?php   print $node->content['body']['#value'];/*déplacer le contenu dans la colonne désirée*/ ?>
                   
         <?php if ($centralBloc): ?>
                <div id="middleGalerie"><?php print $centralBloc; ?></div>
              <?php endif; ?>

                <?php if ($centre_partenaire): ?>
         <div id="centre-asso">
            <?php print $centre_partenaire; ?>
          </div>
                
                
             <?php endif; ?>
    <?php if ($node->field_video_externe[0]['view']): ?>
                 <aside class="video">
                            <?php print $node->field_video_externe[0]['view'];?>
                 </aside>
                    <?php endif; ?>
                           

          </div>
  
           
     
       </div> <!-- /zone-1-->
        <!--______________COLONNE 2________________ -->
         <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
        <div id="colonne-2" class="col2_layout_2_7_3 page-association">

          
            
                   <?php if ($terms): ?>
        <div class="taxonomy"><?php //print $terms; ?></div>
        <?php endif;?>

        <?php if ($links): ?>
        <div class="links"> <?php //print $links; ?></div>
        <?php endif; ?>
        
        </div>
        
        <!-- ______________________ COLONNE DROITE _______________________ -->
                   
          
           <div id="colonne-3" class="col3_layout_2_7_3 page-association">
                                             
          <?php
              global $theme_path;
              include ($theme_path.'/includes/regions_inc/inc_region_zone_3.php');
              ?>
            </div>

    </div> <!-- /node-inner -->
</div> <!-- /node-->