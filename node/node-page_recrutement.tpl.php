<?php
/* Ce template permet la création d'un layout multicolonne pour les pages de base, en permettant la disposition facile
 * des champs CCK custom, si nécessaires pour une page de base.
*/?>
<!--______________NODE TPL POUR PAGE RECRUTEMENT.TPL CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
    <div class="node-inner">
            <!--______________ ILLUSTRATION et TITRE ________________ -->
        <div id="zone-illustration" class="page-recrutement">
   

            <?php
            if ($node->field_illus_administratif[0]['view']
                OR
                $title
            ):
                ?>
                <div id="illustration-pleinepage" class="illustration-recrutement">
                    <h1 class="titre_overlay titre_page <?php print 'pole-'. $node->field_pole_metiers[0]['value']; //TiD du terme du Vocabulaire Pôle Métiers ?>"><?php print $title; ?></h1>
                <?php print $node->field_illus_administratif[0]['view'] ?>
                </div>
<?php endif; ?>


        </div><!-- /zone-illustration -->   
             <!--______________ ZONE 1 ________________ -->
        <div id="zone-1" class="zone1_layout_7_5 page-recrutement">
          <?php print $picture; ?>

<?php if ($submitted): ?>
                <span class="submitted"><?php print $submitted; ?></span>
<?php endif; ?>
                
   
       
                
                
                        <div class="content">
                <?php   print $node->content['body']['#value'];/*déplacer le contenu dans la colonne désirée*/ ?>
                                                 <?php if (!empty($node->field_fichier_joint[0]['view'])): ?>
           <div class="docs-enseignant">
               <?php
               foreach ($node->field_fichier_joint as $key => $docs) {
                   print $node->field_fichier_joint[$key]['view'];
               }
               ?>            
           </div>
            <?php endif;?>
                            
                     
                        <?php if ($node->field_vue_content_vr[0]['view']):
     print '<aside class="offre-poste-enseignement">'.$node->field_vue_content_vr[0]['view'].'</aside>';
 endif;
                            ?>       
                               
                        </div>
                
                                         <?php
              global $theme_path;
              include ($theme_path.'/includes/regions_inc/inc_region_zone_1.php');
              ?>
               
         
                 <?php if ($terms): ?>
        <div class="taxonomy"><?php //print $terms; ?></div>
        <?php endif;?>

        <?php if ($links): ?>
        <div class="links"> <?php //print $links; ?></div>
        <?php endif; ?>
        
                
        </div><!--  /zone-1-->
        <!--______________ZONE 2________________ -->
         <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
        <div id="zone-2" class="zone2_layout_7_5 page-recrutement">
                                      <?php
              global $theme_path;
              include ($theme_path.'/includes/regions_inc/inc_region_zone_2.php');
              ?>
            
        </div>
    </div> <!-- /node-inner -->
</div> <!-- /node-->