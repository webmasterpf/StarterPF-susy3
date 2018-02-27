<?php /*
 * Inclure la liste des BTS dans le contenu de la page BTS dédiée.
 */?>  
<?php
$viewname = 'liste_bts_fiches';
$view = views_get_view ($viewname);
$view->set_display('block_1');


//Exécution de le vue
$view->pre_execute();
$view->execute();

if ($view->result) {
  // S'il y a un resultat on récupère le titre (ajoute tag h3, et le contenu)
  $output = '<div id="vue-liste-bts"><h3>'.$view->get_title().'</h3>' . $view->render().'</div>';
}

//Affiche la vue.Voir le template de view pour le theming de cette sortie .
print $output;

?>