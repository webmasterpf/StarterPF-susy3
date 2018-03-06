<?php
// permet template suggestions avec page-
function phptemplate_preprocess(&$variables, $hook)
{
  switch($hook)
  {
        case 'page' :
      if (arg(0) == 'node')
      {
        $variables['template_files'][]  = 'page-' . $variables['node']->type;
        $variables['template_files'][] = "page-" . $variables['node']->type . "-" . $variables['node']->nid;
        $variables['template_files'][]  = 'node-' . $variables['node']->type;
//        var_dump($variables);
      }
      break;

  }
}
// Voir function phptemplate_preprocess_page(&$vars)
?>
<?php
/*Permet d'attribuer un template de node différent selon terme de taxo et type de contenu
 * - NE PAS OUBLIER DE CHANGER LE NOM DU THEME !!!___
http://drupal.org/node/723544 ET http://drupalfr.org/forum/support/developpement/26735-theming-template-commun-95*/
//nettoyage du nom pour usage dans tpl
function valideChaine($term){
$term = preg_replace('<code>\s+</code>', '<em>', trim($term));
  $term = str_replace("'", "</em>", $term);
  $term = preg_replace('<code>_+</code>', '</em>', trim($term));
  $NomTermeValide=strtr($term,"ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ",
  "aaaaaaaaaaaaooooooooooooeeeeeeeecciiiiiiiiuuuuuuuuynn");
  return ($NomTermeValide);
}

function starter_d6_susy3_preprocess_node(&$vars, $hook) {
//Partie regions génériques dans node.tpl- ajoute les regions utiles au node.tpl
 $vars['pole_col1'] = theme('blocks', 'pole_col1');
 $vars['pole_col2'] = theme('blocks', 'pole_col2');
 $vars['pole_col3'] = theme('blocks', 'pole_col3');
 $vars['pole_col4'] = theme('blocks', 'pole_col4');
 $vars['node_col_1'] = theme('blocks', 'node_col_1');
 $vars['node_col_2'] = theme('blocks', 'node_col_2');
 $vars['node_col_3'] = theme('blocks', 'node_col_3');
 $vars['node_col_4'] = theme('blocks', 'node_col_4');
 $vars['node_col_5'] = theme('blocks', 'node_col_5');
 $vars['actuAssociation'] = theme('blocks', 'actuAssociation');
 //Regions spécifique au site PF
 $vars['centralBloc'] = theme('blocks', 'centralBloc');
 $vars['centre_partenaire'] = theme('blocks', 'centre_partenaire');
 $vars['formulaire'] = theme('blocks', 'formulaire');
 //Regions custom pour theme suite generalisation node.tpl
// $vars['pole_bloc_G'] = theme('blocks', 'pole_bloc_G');
// $vars['pole_bloc_C'] = theme('blocks', 'pole_bloc_C');
// $vars['pole_bloc_D'] = theme('blocks', 'pole_bloc_D');
 //
//Partie template node.tpl
$node = $vars['node'];
$lesTypes=array('page_fiche_formation', 'page_pole','contenu_actualites');
//ajouter les vids possibles pour chaque quelquesoit le type
$lesTypes=array('fiche_formation', 'page_pole','contenu_actualites');
//ajouter les vids possibles pour chaque quelquesoit le type
/* vid 1 pour pole formation
 * vid 2 pour évènement
 * vid 3 pour
 * vid 5 pour type actualite
 * vid 6 type de formation
 *
*/
// on regarde si le type est dans le tableau
if ( in_array($node->type, $lesTypes) ) {
     //drupal_set_message('Type du node si type ok (entrée de la condition) : '.$node->type,'status');
       if ( empty($node->taxonomy)  ) {
    // drupal_set_message('<b>Pas de terme de taxonomie trouvé !</b> ','status');      
       } 
       if ( ! empty($node->taxonomy)  ) {
      //     drupal_set_message('Term name dans boucle si non vide: '.$term->name,'status');
// Récupération du 1er element du tableau
           $term = array_shift($node->taxonomy);
    // verifie si l'un des termes appartiennent bien à l'un des vid définis dans le tableau
           if ( in_array($term->vid, $lesVid) ) {
         
              $tplfile = 'node-'.$node->type.'-'. $term->vid.'-'.$term->tid ;
              $vars['template_files'][] = $tplfile ;
         // drupal_set_message('Term name : '.$term->name,'status');
         //  drupal_set_message('Template file : '.$tplfile.'.tpl.php','status');
          }
    
          
      }
// drupal_set_message('Type du node hors boucle: '.$node->type,'status');
 //drupal_set_message('Term name hors boucle: '.$term->name,'status');
    }
    //template suggestion pour les nodes
     $vars['template_files'][] = 'node-'. $vars['node']->nid; 
}
?>
<?php
function starter_d6_susy3_preprocess_page(&$vars){
  
    
    
    //http://www.zites.net/en/load-external-javascript-files-drupal-6/
    // JS externe avec le module advagg qui permet d'utiliser 'external'
//   drupal_add_js('http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.3.min.js', 'external');
//   drupal_add_js('https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js', 'external');
//   drupal_add_js('http://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js', 'external');
//   
// permet usage de vieilles versions de jQuery
 
    //drupal_add_js(drupal_get_path('theme', 'starter_d6_susy3') . '/js/jquery_plugin/shapes-polyfill.min.js', 'theme');
  drupal_add_js(drupal_get_path('theme', 'starter_d6_susy3') . '/js/jquery_plugin/shapes-polyfill.js', 'theme');
// permet usage de vieilles versions de jQuery
        //drupal_add_js(drupal_get_path('theme', 'starter_d6_susy3') . '/js/jquery-migrate-1.2.1.min.js', 'theme');
//chargement des plugins qui utilisent la version de jQuery par défaut du site
//   drupal_add_js(drupal_get_path('theme', 'starter_d6_susy3') . '/js/responsive-nav.js','theme');
//   drupal_add_js(drupal_get_path('theme', 'starter_d6_susy3') . '/js/tinynav.min.js','theme');
    //   drupal_add_js(drupal_get_path('theme', 'starter_d6_susy3') . '/js/jquery.navobile.min.js','theme');
    //   drupal_add_js(drupal_get_path('theme', 'starter_d6_susy3') . '/js/jquery.jpanelmenu.min.js','theme');
    drupal_add_js(drupal_get_path('theme', 'starter_d6_susy3') . '/js/jquery_plugin/selectnav.min.js', 'theme');
//    drupal_add_js(drupal_get_path('theme', 'starter_d6_susy3') . '/js/jquery_plugin/jquery.sticky.js', 'theme');
    drupal_add_js(drupal_get_path('theme', 'starter_d6_susy3') . '/js/jquery_plugin/jquery.sticky-kit.js', 'theme');
  //  drupal_add_js(drupal_get_path('theme', 'starter_d6_susy3') . '/js/jquery.sidebar.min.js', 'theme');

//chargement des scripts qui utilisent la version de jQuery par défaut du site
    drupal_add_js(drupal_get_path('theme', 'starter_d6_susy3') . '/js/js_jquery_defaut.js', 'theme');
// mise en place du noConflict pour utiliser plusieurs versions de jQuery   
    drupal_add_js(drupal_get_path('theme', 'starter_d6_susy3') . '/js/jquery_init.js', 'theme');
//******************************______________________________********************
//chargement des plugins qui utilisent une version de jQuery plus récente
    drupal_add_js(drupal_get_path('theme', 'starter_d6_susy3') . '/3rdparty/bxslider/js/jquery.bxslider.js', 'theme');
    drupal_add_js(drupal_get_path('theme', 'starter_d6_susy3') . '/js/jquery_plugin/jquery.flexslider.js', 'theme');
    drupal_add_js(drupal_get_path('theme', 'starter_d6_susy3') . '/js/jquery_plugin/stacktable.min.js', 'theme');
//  drupal_add_js(drupal_get_path('theme', 'starter_d6_susy3') . '/js/jquery_plugin/jquery.lockfixed.min.js', 'theme');
     drupal_add_js(drupal_get_path('theme', 'starter_d6_susy3') . '/js/jquery_plugin/jquery.floatit.js', 'theme');
    drupal_add_js(drupal_get_path('theme', 'starter_d6_susy3') . '/js/jquery_plugin/stickUp.js', 'theme');
    //drupal_add_js(drupal_get_path('theme', 'starter_d6_susy3') . '/js/jquery_plugin/wookmark.min.js', 'theme');
    drupal_add_js(drupal_get_path('theme', 'starter_d6_susy3') . '/js/jquery_plugin/jquery.masonry.min.js', 'theme');
    //drupal_add_js(drupal_get_path('theme', 'starter_d6_susy3') . '/js/jquery_plugin/ninja-slider/ninja-slider.js', 'theme');
    //drupal_add_js(drupal_get_path('theme', 'starter_d6_susy3') . '/js/jquery_plugin/ninja-slider/thumbnail-slider.js', 'theme');
    //drupal_add_js(drupal_get_path('theme', 'starter_d6_susy3') . '/js/jquery_plugin/slick/slick.min.js', 'theme');
    //drupal_add_js(drupal_get_path('theme', 'starter_d6_susy3') . '/js/jquery_plugin/chocolat/jquery.chocolat.min.js', 'theme');
    drupal_add_js(drupal_get_path('theme', 'starter_d6_susy3') . '/js/jquery_plugin/baguettebox/baguetteBox.min.js', 'theme');
    //drupal_add_js(drupal_get_path('theme', 'starter_d6_susy3') . '/js/jquery_plugin/salvattore.min.js', 'theme');
    //drupal_add_js(drupal_get_path('theme', 'starter_d6_susy3') . '/js/jquery_plugin/salvattore.js', 'theme');
    //drupal_add_js(drupal_get_path('theme', 'starter_d6_susy3') . '/3rdparty/buttons/js/buttons.js', 'theme');
    drupal_add_js(drupal_get_path('theme', 'starter_d6_susy3') . '/js/jquery_plugin/responsiveslides/responsiveslides.min.js', 'theme');
    drupal_add_js(drupal_get_path('theme', 'starter_d6_susy3') . '/js/jquery_plugin/lazyload/jquery.lazyloadxt.extra.min.js', 'theme');
    drupal_add_js(drupal_get_path('theme', 'starter_d6_susy3') . '/3rdparty/lightslider/js/lightslider.js', 'theme');
    
    //*** Utilisation des plugins Jquery  plus récents - Toujours terminer avec ce JS***
     drupal_add_js(drupal_get_path('theme', 'starter_d6_susy3') . '/js/js_jquery_new.js', 'theme');
    
    //  mise à disposition des 2 versions de jQuery
    drupal_add_js(drupal_get_path('theme', 'starter_d6_susy3') . '/js/jquery_exit.js', 'theme');
   

//    die('les JS sont chargés');
    // We need to rebuild the scripts variable with the new script included.
    $vars['scripts'] = drupal_get_js();
}
?>
<?php
// fonction pour avoir la possibilité de faire un template pour page recherche
function phptemplate_preprocess_page(&$vars) {
  if (module_exists('path')) {
    $alias = drupal_get_path_alias(str_replace('/edit','',$_GET['q']));
    if ($alias != $_GET['q']) {
      $template_filename = 'page';
      foreach (explode('/', $alias) as $path_part) {
        $template_filename = $template_filename . '-' . $path_part;
        $vars['template_files'][] = $template_filename;
      }
    }
  }



}
?>
<?php
// permet le debugage de php avec drupal
function debug_print($var) {
  drupal_set_message('<pre>'. print_r($var, TRUE) .'</pre>');
}

//Webform "You have already submitted this form." message off - http://drupal.org/node/1096226
function starter_d6_susy3_webform_view_messages($node, $teaser, $page, $submission_count, $limit_exceeded, $allowed_roles, $closed, $cached) {
  return theme_webform_view_messages($node, $teaser, $page, 0, $limit_exceeded, $allowed_roles, $closed, $cached);
}
?>
<?php
// permet d'ouvrir en blank les fichiers uploadés via filefield
//NE PAS OUBLIER DE CHANGER NOM DU THEME !!!
function starter_d6_susy3_filefield_file($file) {
  // Views may call this function with a NULL value, return an empty string.
  if (empty($file['fid'])) {
    return '';
  }

  $path = $file['filepath'];
  $url = file_create_url($path);
  $icon = theme('filefield_icon', $file);

  // Set options as per anchor format described at
  // http://microformats.org/wiki/file-format-examples
  // TODO: Possibly move to until I move to the more complex format described
  // at http://darrelopry.com/story/microformats-and-media-rfc-if-you-js-or-css
  $options = array(
    'attributes' => array(
      'type' => $file['filemime'] . '; length=' . $file['filesize'],
    ),
  );

  // Use the description as the link text if available.
  if (empty($file['data']['description'])) {
    $link_text = $file['filename'];
  }
  else {
    $link_text = $file['data']['description'];
    $options['attributes']['title'] = $file['filename'];
  }
//open allfiles in new window
$options['attributes']['target'] = '_blank';

  return '<div class="filefield-file clear-block">'. $icon . l($link_text, $url, $options) .'</div>';
}
?>
<?php
/*_______________FONCTIONS POUR ACTION SUR AGGREGATOR____________*/
/* modify link items in the aggregator to open in a new window and
suppress the "blog it" icon & links should the module ever be enabled.
(Code removed--not commented out--from this copy of the original function.)
 * drupal.org/node/573054 */

function phptemplate_aggregator_block_item($item, $feed = 0) {
  global $user;

  $output = '';

  // Display the external link to the item.
  $output .= '<a href="'. check_url($item->link) .'" target="_blank">'. check_plain($item->title) ."</a>\n";

  return $output;
}
/**Enleve le lien en savoir plus - NE PAS OUBLIER DE CHANGER LE NOM DU THEME !!!___*/
function starter_d6_susy3_more_link ($url, $title) {
  if (stristr( $url, 'aggregator')) {
    return "";
  }
}
?>