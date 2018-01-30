<?php
/* 
 * Inclus la vue des actualités globales
 * dans un bloc pour liste des actualités générales
 */

?>

      
    <?php
$viewname2 = 'Actualites_liste_globale';
$view = views_get_view ($viewname2);
$viewdisplay = $view->set_display('block_4');
//$args_ldj1 = $view->set_arguments(array($node->nid));

//$emptyTextVue = $view->display('block_4')->display_options['empty'];
$emptyText = $view->display_handler->set_option('empty','<div class="table_liste_rp"><p>Pas de Revue de Presse pour le moment.</p></div>');

//Exécution de le vue
$view->pre_execute();
$view->execute();

if (!empty($view->result)) {
  // S'il y a un resultat on récupère le titre (ajoute tag h3, et le contenu)
  $output = '<div id="bloc_liste_rp"><h3 class="">'.$view->get_title().'</h3>' .$view->preview($viewdisplay).'</div>';

  //Affiche la vue si contenu
print $output;
}
//sinon affiche texte vide
elseif (empty($view->result)) {
    //Formatage du texte vide,ajout du titre de la vue
     $outputEmpty = '<div id="bloc_liste_rp"><h3 class="titre-pole-formation">'.$view->get_title().'</h3>' .$emptyText.'</div>';
     //drupal_set_message('$EmptyTextVue : '.$emptyTextVue,'status');
     //Affichage du texte vide
  print $outputEmpty;
}

?>