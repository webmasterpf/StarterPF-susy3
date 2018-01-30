<?php
/* 
 * Inclus la vue des actualités globales
 * dans un bloc pour liste des actualités générales
 */

?>

      
    <?php

$viewname = 'Actualites_liste_globale';
$view = views_get_view ($viewname);
$view->set_display('block_3');


//Exécution de le vue
$view->pre_execute();
$view->execute();

if ($view->result) {
  // S'il y a un resultat on récupère le titre (ajoute tag h3, et le contenu)
 $output = '<div id="bloc_liste_actus"><h3>'.$view->get_title().'</h3>' . $view->render().'</div>';
  //$output = '<div id="bloc_liste_actus">'.$view->render_exposed_form($block=TRUE).'<h3>'.$view->get_title().'</h3>' . $view->render().'</div>';
}

//Affiche la vue
print $output;

?>
