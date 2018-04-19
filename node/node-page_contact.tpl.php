<?php
/* Ce template permet la création d'un layout multicolonne pour les pages de base, en permettant la disposition facile
 * des champs CCK custom, si nécessaires pour une page de base.
*/?>
<!--______________NODE TPL POUR PAGE Contact.TPL CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
        <!--______________ ILLUSTRATION et TITRE ________________ -->
        <div id="zone-illustration" class="page-contact">
                     <?php if ($title): /*copier le titre dans la zone desirée*/?>
         
            <?php endif; ?>
            
                 <?php if ($node->field_illus_administratif[0]['view']
                 OR
                 $title
                 ): ?>
            <div id="illustration-pleinepage" class="illustration-contact">
                   <h1 class="titre_overlay titre_page"><?php print $title; ?></h1>
                 <?php  print $node->field_illus_administratif[0]['view'] ?>
            </div>
            <?php endif;?>
     
            
            </div><!-- /zone-illustration -->
     
            
        <!--______________ZONE 1________________ -->
      
        <div id="zone-1" class="zone1_layout_8_4 page-contact">
      
             <?php print $picture; ?>

            <?php if ($submitted): ?>
            <span class="submitted"><?php print $submitted; ?></span>
            <?php endif; ?>


       <div class="content">
           

                <?php print $node->content['body']['#value'];?>
     
                 </div><!-- /content -->   
             <!--Lien vers formulaire -->
        <!--<div id="postule"><a href="/site/node/110" title="Pour postuler cliquez ici"> Postuler</a></div>-->
       
       <?php
              global $theme_path;
              include ($theme_path.'/includes/regions_inc/inc_region_zone_1.php');
              ?>
                     
                     </div><!-- /zone-1 -->
        
        <!--______________ZONE 2________________ -->
         <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
        <div id="zone-2" class="zone2_layout_8_4 page-contact">

                  <?php if ($node->field_lycee_gmap[0]['view']): ?>
                    <div class="localisation-lycees">
                        <?php (print $node->field_lycee_gmap[0]['view']); /* Inutile */?>
                    </div>
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
        
        </div><!-- /zone-2 -->

  </div> <!-- /node-inner -->
</div> <!-- /node-->
