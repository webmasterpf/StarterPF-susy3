<?php
/* Ce template permet la création d'un layout multicolonne pour le spages de base, en permettant la disposition facile
 * des champs CCK custom, si nécessaires pour une page de base.
*/?>
<!--______________NODE TPL POUR PAGE.TPL SIMPLENEWS ________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
    <div class="node-inner">
        <!--______________COLONNE 1________________ -->
        <?php /* choix du layout selon nombre de colonne
         * .col1_layout_200_590_200{} .col1_layout_330_all{} .col1_layout_18_56_25{}
         * .col2_layout_200_590_200{} .col2_layout_330_all{} .col2_layout_18_56_25{}
         * .col3_layout_200_590_200{} .col3_layout_330_all{} .col3_layout_18_56_25{}
         */?>
        <div id="colonne-1" class="col1_layout_305_660">

        
            <?php if ($title): /*copier le titre dans la colonne desirée*/?>
            <h1 class="titre_page"><?php print $title; ?></h1>
            <?php endif; ?>
            
            <?php if ($node->field_nl_lastnews[0]['view']): ?>
            <div id="actus_pf" class="nl-actus">
                    <?php  print $node->field_nl_lastnews[0]['view']  ?>
            </div>
            <?php endif;?>
            
                     <?php if ($node->field_nl_deco[0]['view']): ?>
            <div id="illustration-newsletter">
                    <?php  print $node->field_nl_deco[0]['view']  ?>
            </div>
            <?php endif;?>
            
               <?php if ($node->field_nl_docs[0]['view']): ?>
            <div id="docs-newsletter">
                    <?php  print $node->field_nl_docs[0]['view']  ?>
            </div>
            <?php endif;?>
            
               <?php //if ($node->field_fichier_joint[0]['view']): ?>
<!--            <div id="fichiers-newsletter">-->
                    <?php // print $node->field_fichier_joint[0]['view']  ?>
<!--            </div>-->
            <?php // endif;?>     
      

        </div>
        <!--______________COLONNE 2________________ -->
         <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
        <div id="colonne-2" class="col2_layout_305_660 nl-body">
        

            <?php print $picture; ?>

            <?php if ($submitted): ?>
            <span class="submitted"><?php print $submitted; ?></span>
            <?php endif; ?>

            <div class="content">
               
                <?php   print $node->content['body']['#value'];/*déplacer le contenu dans la colonne désirée*/ ?>
            </div>

        </div>


     

        <?php if ($terms): ?>
        <div class="taxonomy"><?php //print $terms; ?></div>
        <?php endif;?>

        <?php if ($links): ?>
        <div class="links"> <?php //print $links; ?></div>
        <?php endif; ?>

    </div> <!-- /node-inner -->
</div> <!-- /node-->