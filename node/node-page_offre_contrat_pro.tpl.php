<?php
/* Ce template permet la création d'un layout multicolonne pour les pages de base, en permettant la disposition facile
 * des champs CCK custom, si nécessaires pour une page de base.
*/?>
<!--______________NODE TPL POUR PAGE LISTE OFFRE.TPL CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
    <div class="node-inner">
    <!--______________ ILLUSTRATION et TITRE ________________ -->
        <div id="zone-illustration" class="page-offres">
                     <?php if ($title): /*copier le titre dans la zone desirée*/?>
         
            <?php endif; ?>
            
             <?php if ($node->field_illus_administratif[0]['view']
                 OR
                 $title
                 ): ?>
            <div id="illustration-pleinepage" class="illustration-offres">
                   <h1 class="titre_overlay titre_page"><?php print $title; ?></h1>
                 <?php  print $node->field_illus_administratif[0]['view'] ?>
            </div>
            <?php endif;?>
     
            
            </div><!-- /zone-illustration -->
             <!--______________ ZONE 1 ________________ -->
        <div id="zone-1" class="zone_layout_max_centre page-offres">
          <?php print $picture; ?>

<?php if ($submitted): ?>
                <span class="submitted"><?php print $submitted; ?></span>
<?php endif; ?>
                
                       <?php if (!empty($node->content['body']['#value'])):
     print '<div class="content">'.$node->content['body']['#value'].'</div>';
     endif;
               ?> 
                
      <?php
              global $theme_path;
              include ($theme_path.'/includes/regions_inc/inc_region_zone_1.php');
              ?>
                
           
               

                        <?php if ($node->field_vue_content_vr[0]['view']):
     print '<aside class="offres-contrat">'.$node->field_vue_content_vr[0]['view'].'</aside>';
 endif;
                            ?>
      
               
         
                   
        <?php if ($terms): ?>
        <div class="taxonomy"><?php //print $terms; ?></div>
        <?php endif;?>

        <?php if ($links): ?>
        <div class="links"> <?php //print $links; ?></div>
        <?php endif; ?>
        </div><!--  /zone-1-->


    </div> <!-- /node-inner -->
</div> <!-- /node-->