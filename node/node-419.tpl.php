<?php
/* 
 * Permet d'avoir un template spécial pour le webform
 * NODE-WEBFORM.TPL GENERIK si besoin possible faire theme pour webform selon node-NID.tpl.php
 * Template pour Enquete satisfaction : nid = 384(dev)/385(prod)
 * Formulaire postuler Ct Pro : 184
 * Profile eleve : 419(dev) / 430(prod)
 * Profile entreprise : 420(dev) / 431(prod)
 */

?>
<!-- NODE-WEBFORM.TPL SPECIFIQUE : PROFIL ELEVE -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
<?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>
   
 <!--______________COLONNE REGION ________________ -->
 <div id="colonne-1" class="col1_form_squeeze">
    <?php
 /* inclusion d'une region pour bloc */
include (drupal_get_path('theme','cyrano_pf').'/includes/inc_region_col_G1.php');
    ?>
     </div>
<!--______________COLONNE ________________ -->
         
        <div id="colonne-2" class="col2_form_squeeze webform">
  
     <?php if ($submitted) { ?>
    <span class="submitted"><?php print $submitted?></span>
  <?php }; ?>
<?php if ($title): /*insertion du titre de la page et style differencié*/?>
     <h1 class="titre_pl"><?php print $title; ?></h1>
    <?php endif; ?>
 

  <div class="content">
    <table>
    <tr>
    <td><?php print $node->content['body']['#value']; ?></td>
    </tr>
    <tr>
    <td><?php print $node->content['webform']['#value']; ?></td>
    </tr>
    </table>
  </div>

      
     
    <?php if ($links): ?>
    <div class="links">&raquo; <?php print $links; ?></div>
  <?php endif; ?>

     <?php if ($terms) { ?>
    <span class="taxonomy"><?php print $terms?></span>
  <?php }; ?>

</div>

 <!--______________COLONNE REGION ________________ -->
 <div id="colonne-3" class="col3_form_squeeze">
    <?php
 /* inclusion d'une region pour bloc */
include (drupal_get_path('theme','cyrano_pf').'/includes/inc_region_col_G2.php');
    ?>
     </div>
<div class="clear-block clear"></div>

</div><!-- /node -->