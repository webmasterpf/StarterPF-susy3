<?php
/* Ce template permet la création d'un layout multicolonne pour les pages de base, en permettant la disposition facile
 * des champs CCK custom, si nécessaires pour une page de base.
*/?>
<!--______________NODE TPL POUR PAGE.TPL FICHE FORMATION CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
    <div class="node-inner">
            <!--______________ ILLUSTRATION et TITRE ________________ -->
        <div id="zone-illustration" class="fiche-formation fiche-bts">
   

            <?php
            if ($node->field_illus_fiche_bts[0]['view']
                OR
                $title
            ):
                ?>
                <div id="illustration-pleinepage" class="illustration-fiche">
                    <h1 class="titre_overlay titre_page"><?php print $title; ?></h1>
                <?php print $node->field_illus_fiche_bts[0]['view'] ?>
                </div>
<?php endif; ?>


        </div><!-- /zone-illustration -->   
             <!--______________ ZONE 1 ________________ -->
        <div id="zone-1" class="zone_layout_max_centre fiche-formation">
          <?php print $picture; ?>

<?php if ($submitted): ?>
                <span class="submitted"><?php print $submitted; ?></span>
<?php endif; ?>

               <?php if ($node->field_complement_info_formation[0]['view']): ?>
                    <div class="complement-titre-fiche">
                        <?php (print $node->field_complement_info_formation[0]['view']); /* Info complementaire sur formation */ ?>
                    </div>
                <?php endif; ?>
                
                   <?php if ($node->field_intro_fiche_formation[0]['view']): ?>
                    <div class="intro-fiche">
                        <?php (print $node->field_intro_fiche_formation[0]['view']); /* Inutile */?>
                    </div>
                <?php endif; ?>
                
                
                        <div class="content">
                <?php   print $node->content['body']['#value'];/*déplacer le contenu dans la colonne désirée*/ ?>
                </div>

                
                     <?php
              global $theme_path;
              include ($theme_path.'/includes/regions_inc/inc_region_zone_1.php');
              ?>
         
        </div><!--  /zone-1-->

                      <?php if ($node->field_diapo_lycee_type[0]['view']): ?>
        <!--______________ ZONE 2 ________________ -->
        <div id="zone-2" class="zone_layout_max fiche-formation">         
        <aside class="galerie">
                    <?php  print $node->field_diapo_lycee_type[0]['view'];?>
            </aside>
    </div> <!-- /zone-2 -->
            <?php endif;?>
                
<!--______________ ZONE 3 ________________ -->
    <div id="zone-3" class="zone_layout_max_centre fiche-formation">
        
        
        <?php if ($node->field_texte_section_europe[0]['view']): ?>
        <article class="paragraphe-section-europe">
                        <?php (print $node->field_texte_section_europe[0]['view']); /* Textfield pour § Section Europe */ ?>
        </article>
                <?php endif; ?>             
        
        
           <?php if ($node->field_savoir_plus_fiche_formatio[0]['view']): ?>
                    <div class="savoir-plus-fiche">
                        <?php (print $node->field_savoir_plus_fiche_formatio[0]['view']); /* Inutile */ ?>
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
                
                
        </div> <!--/zone-3-->



    </div> <!-- /node-inner -->
</div> <!-- /node-->