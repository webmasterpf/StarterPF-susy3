<?php
/* Ce template permet la création d'un layout multicolonne pour le spages de base, en permettant la disposition facile
 * des champs CCK custom, si nécessaires pour une page de base.
*/?>
<!--______________NODE TPL POUR PAGE-page_pole.TPL CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
    <div class="node-inner">
       
             <?php if ($title): /*copier le titre dans la colonne desirée*/?>
            <h1 class="page-pole"><?php print $title; ?></h1>
            <?php endif; ?>
            
             <?php print $picture; ?>

            <?php if ($submitted): ?>
            <span class="submitted"><?php print $submitted; ?></span>
            <?php endif; ?>

            <div class="content">
                <?php   print $node->content['body']['#value'];/*déplacer le contenu dans la colonne désirée*/ ?>
            </div>
            
        
        <!--______________COLONNE 1________________ -->
      
        <div class="layout_3col_all4">
           <?php if ($node->field_vue_test[0]['view']): ?>
            <div class="pole1">
                    <?php  print $node->field_vue_test[0]['view']  ?>
            </div>
            <?php endif;?>
             <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_1.php');
              ?>
        </div>
        <!--______________COLONNE 2________________ -->
         <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
        <div  class="layout_3col_all4">
            
               <?php if ($node->field_vue_test2[0]['view']): ?>
            <div class="pole2">
                    <?php  print $node->field_vue_test2[0]['view']  ?>
            </div>
            <?php endif;?>
           <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_2.php');
              ?>

        </div>

        <!--______________COLONNE 3________________ -->
        <div  class="layout_3col_all4last">
            
               <?php if ($node->field_vue_test3[0]['view']): ?>
            <div class="pole3">
                    <?php  print $node->field_vue_test3[0]['view']  ?>
            </div>
            <?php endif;?>
            <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_3.php');
              ?>
            
            
            <!--***********!!!!!!  EXEMPLE DE CHAMP CCK INCLUS AVEC CONDITION !!!!!!!!************ -->
            <?php if ($node->nom_du_champ[0]['view']): ?>
            <div id="nom-css">
                    <?php  print $node->nom_du_champ[0]['view']  ?>
            </div>
            <?php endif;?>


        </div>

        <?php if ($terms): ?>
        <div class="taxonomy"><?php //print $terms; ?></div>
        <?php endif;?>

        <?php if ($links): ?>
        <div class="links"> <?php //print $links; ?></div>
        <?php endif; ?>

    </div> <!-- /node-inner -->
</div> <!-- /node-->