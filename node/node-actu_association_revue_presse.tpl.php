<?php
/* Ce template permet la création d'un layout multizone pour les pages de base, en permettant la disposition facile
 * des champs CCK custom, si nécessaires pour une page de base.
 * Redesign V2018-02 *Susy 3* 
*/?>
<!--______________NODE TPL POUR PAGE.TPL CUSTOM ACTU ASSO RP ________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
        <!--______________ ILLUSTRATION et TITRE ________________ -->
        <div id="zone-illustration" class="actu-presse">
                     <?php if ($title): /*copier le titre dans la zone desirée*/?>
         
            <?php endif; ?>
            
             <?php if ($node->field_minipresse[0]['view']
                 OR
                 $title
                 ): ?>
            <div id="illustration-pleinepage" class="actu-minipresse">
                   <h1 class="titre_overlay titre_page"><?php print $title; ?></h1>
                    <?php  print $node->field_minipresse[0]['view']  ?>
            </div>
            <?php endif;?>
     
            
            </div><!-- /zone-illustration -->
        <div id="zone-centrale-node" class="#">
<!--            Inutile-->
            
        <!--______________COLONNE 1________________ -->
      
        <div id="zone-1" class="col1_layout_9_3 actu-presse">
      
             <?php print $picture; ?>

            <?php if ($submitted): ?>
            <span class="submitted"><?php print $submitted; ?></span>
            <?php endif; ?>

            <div class="content">
           

                <?php print $node->content['body']['#value'];?>
                
                       <?php
            if ($node->field_fichier_joint[0]['view']):

              global $theme_path;
                include($theme_path . '/includes/dedicates_inc/inc_docs_actu.php');
            endif;
            //il ne s'agit pas d'une vue mais de code PHP !!
            ?>
                
                
                 </div><!-- /content -->   
                <?php if ($node->field_diapo_lycee_type[0]['view']): ?>
                 <aside class="galerie">
                    <?php  print $node->field_diapo_lycee_type[0]['view'];?>
            </aside>
            <?php endif;?>
                
                <?php
/*
 * Vue affichant la Gallery assist incluse via UI dans region dédiée
 * Avec limitation de l'affichage sur le type (php)
 */             
                ?>
                
                
        <?php if ($node->field_video_externe[0]['view']): ?>
                 <aside class="video">
                            <?php print $node->field_video_externe[0]['view'];?>
                 </aside>
                    <?php endif; ?>

                    <?php if ($node->field_slideshare_actu[0]['view']): ?>
                 <aside class="slideshare">
                            <?php print $node->field_slideshare_actu[0]['view'] ?>
                 </aside>>
                    <?php endif; ?>
                
     
       
       <?php
              global $theme_path;
              include ($theme_path.'/includes/regions_inc/inc_region_col_1.php');
              ?>
                     
                     </div><!-- /col-1 -->
        </div><!-- /zone-centrale -->
        
        
        <!--______________COLONNE 2________________ -->
         <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
        <div id="zone-2" class="col2_layout_9_3 actu-presse">

           
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
        
        </div><!-- /col-2 -->

        </div><!-- /zone-centrale -->

    </div> <!-- /node-inner -->
</div> <!-- /node-->