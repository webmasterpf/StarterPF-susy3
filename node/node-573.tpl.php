<?php
/* 
 * Permet d'avoir un template spécial pour le webform
 * NODE-WEBFORM.TPL GENERIK si besoin possible faire theme pour webform selon node-webform-NID.tpl.php
 */
?>
<!--______________NODE TPL POUR PAGE.TPL WEBFORM POSTULE OFFRE ________________ -->

<div class="node<?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>" id="node-<?php print $node->nid; ?>">
     <div class="node-inner">
        <!--______________ ILLUSTRATION et TITRE ________________ -->
        <div id="zone-illustration" class="webform">
                     <?php if ($title): /*copier le titre dans la zone desirée*/?>
         
            <?php endif; ?>
            
                 <?php if ($node->field_illus_administratif[0]['view']
                 OR
                 $title
                 ): ?>
            <div id="illustration-pleinepage" class="illustration-webform">
                   <h1 class="titre_overlay titre_page"><?php print $title; ?></h1>
                 <?php  print $node->field_illus_administratif[0]['view'] ?>
            </div>
            <?php endif;?>
     
            
            </div><!-- /zone-illustration -->
             <!--______________ ZONE 1 ________________ -->
        <div id="zone-1" class="zone_layout_max_centre webform">
          <?php print $picture; ?>

<?php if ($submitted): ?>
                <span class="submitted"><?php print $submitted; ?></span>
<?php endif; ?>
                
                            <?php
              global $theme_path;
              include ($theme_path.'/includes/regions_inc/inc_region_zone_1.php');
              ?>

      
                
                
                        <div class="content">
                            
                            <a href="javascript:history.back();" class="retour-liste"> << Retour au détail de l'offre </a>
                            
                <?php   print $node->content['body']['#value'];/*déplacer le contenu dans la colonne désirée*/ ?>
                            
                            <?php print $node->content['webform']['#value']; ?>
                </div>

                
         
         
        </div><!--  /zone-1-->


</div> <!-- /node-inner -->
</div><!-- /node -->