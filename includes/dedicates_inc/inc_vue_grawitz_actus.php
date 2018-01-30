<?php
/* 
 * Inclus la vue des actualités globales
 * dans un bloc pour contenu lycée,archives..
 */

?>

      
    <?php
$viewname_ag1 = 'Actualites_liste_globale';
$view = views_get_view ($viewname_ag1);
$viewdisplay = $view->set_display('block_1');
$args_ag1 = $view->set_arguments(array($node->nid));


//$emptyTextVue = $view->display('block_3')->display_options['empty'];
$emptyText = $view->display_handler->set_option('empty',"<div class='table-pole-formations'><p>Pas d'actualité à afficher pour le moment.</p></div>");

//Exécution de le vue
$view->pre_execute();
$view->execute();

if (!empty($view->result)) {
  // S'il y a un resultat on récupère le titre (ajoute tag h3, et le contenu)
  $output = '<div id="bloc_grawitz_actus"><h3 class="titre-pole-formation">'.$view->get_title().'</h3>' .$view->preview($viewdisplay_ag1,$args_ag1).'</div>';

  //Affiche la vue si contenu
print $output;
}
//sinon affiche texte vide
elseif (empty($view->result)) {
    //Formatage du texte vide,ajout du titre de la vue
     $outputEmpty = '<div id="bloc_grawitz_actus"><h3 class="titre-pole-formation">'.$view->get_title().'</h3>' .$emptyText.'</div>';
    // drupal_set_message('$EmptyTextVue : '.$emptyTextVue,'status');
     //Affichage du texte vide
  print $outputEmpty;
}
?>
