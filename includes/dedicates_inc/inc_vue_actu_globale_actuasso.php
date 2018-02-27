<?php
/* 
 * Code pour inclure le bloc revue de presse sur les tpl des actus ou annonces
 * du fait du theming selon taxo et type de contenu
 */

?>

<?php
$viewname = 'Actu_globale_grand';
$view = views_get_view ($viewname);
$view->set_display('block_1');


//Exécution de le vue
$view->pre_execute();
$view->execute();

if ($view->result) {
  // S'il y a un resultat on récupère le titre (ajoute tag h3, et le contenu
  $output = '<div class="bloc_actus"><h3>'.$view->get_title().'</h3>' . $view->render().'</div>';
}

//Affiche la Liste des dernieres RP
print $output;

?>