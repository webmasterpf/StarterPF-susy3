<?php
/* Ce template permet la création d'un layout multicolonne pour les pages de base, en permettant la disposition facile
 * des champs CCK custom, si nécessaires pour une page de base.
*/?>
<!--______________NODE TPL POUR PAGE.TPL FICHE FORMATION CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
    <div class="node-inner">
        <!--______________COLONNE 1________________ -->
       <div id="colonne-1" class="col1_layout_4_8 fiche-formation">
             <?php if ($decoTitre): ?>
                <div id="decoTitreImg"><?php print $decoTitre; ?></div>
              <?php endif; ?>
              <?php if ($title): ?>
                <h1 class="titre-fiche-formation"><?php print $title; ?></h1>
              <?php endif; ?>
          <?php if ($node->field_complement_info_formation[0]['view']): ?>
                    <div class="complement_titre_fiche">
                        <?php (print $node->field_complement_info_formation[0]['view']); /* Info complementaire sur formation */ ?>
                    </div>
                <?php endif; ?>
                
   <?php if ($node->field_intro_fiche_formation[0]['view']): ?>
                    <div class="complement_titre_fiche">
                        <?php (print $node->field_intro_fiche_formation[0]['view']); /* Info complementaire sur formation */ ?>
                    </div>
                <?php endif; ?>
                
   <?php if ($node->field_savoir_plus_fiche_formatio[0]['view']): ?>
                    <div class="complement_titre_fiche">
                        <?php (print $node->field_savoir_plus_fiche_formatio[0]['view']); /* Info complementaire sur formation */ ?>
                    </div>
                <?php endif; ?>                
       <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_1.php');
              ?>
        </div> <!-- col-1 -->
        <!--______________COLONNE 2________________ -->
         <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
        <div id="colonne-2" class="col2_layout_4_8 fiche-formation">

            <?php print $picture; ?>

            <?php if ($submitted): ?>
            <span class="submitted"><?php print $submitted; ?></span>
            <?php endif; ?>

            <div class="content">
                <?php   print $node->content['body']['#value'];/*déplacer le contenu dans la colonne désirée*/ ?>
            </div>
   <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_2.php');
              ?>
     </div> <!-- col-2 -->

       

        <?php if ($terms): ?>
        <div class="taxonomy"><?php //print $terms; ?></div>
        <?php endif;?>

        <?php if ($links): ?>
        <div class="links"> <?php //print $links; ?></div>
        <?php endif; ?>

    </div> <!-- /node-inner -->
</div> <!-- /node-->