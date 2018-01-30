<?php
/* 
 * Inclus la vue des actualités globales
 * speciale pour le contenu VDL
 */

?>

      
    <?php

$viewname = 'Actualites_liste_globale';
$view = views_get_view ($viewname);
$view->set_display('block_2');


//Exécution de le vue
$view->pre_execute();
$view->execute();

if ($view->result) {
  // S'il y a un resultat on récupère le titre (ajoute tag h3, et le contenu)
  $output = '<div id="bloc_autre_event"><h3>'.$view->get_title().'</h3>' . $view->render().'</div>';
}

//Affiche la vue
print $output;

?>
