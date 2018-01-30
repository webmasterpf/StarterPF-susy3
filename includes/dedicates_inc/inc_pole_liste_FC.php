<?php
/* 
 * Inclus la vue qui liste les formation par pole
 * MSAC = block 1
 * MRSP = block 2
 * FC = block 3
 * 
 */

?>

      
    <?php

$viewname = 'Liste_formation_poles';
$view = views_get_view ($viewname);
$view->set_display('block_3');


//Exécution de le vue
$view->pre_execute();
$view->execute();

if ($view->result) {
  // S'il y a un resultat on récupère le titre (ajoute tag h3, et le contenu)
  $output = '<div class="bloc_pole_formation_FC"><h3>'.$view->get_title().'</h3>' . $view->render().'</div>';
}

//Affiche la vue
print $output;

?>
