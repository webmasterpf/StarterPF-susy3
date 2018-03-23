<html>
    <h2> SNIPPETS PHP POUR DIVERS USAGES DANS TPL OU INCLUDES </h2>
</html>

    <?php
                    /* 03/2018 Liste les fichiers uploadés par
                     * filefield and linkfield
                     * création d'une liste dynamique 
                     */
                    if (!empty(
                        
         $node->field_NAME[0]['view']
        OR $node->field_NAME2[0]['view']
    ) ): ?>
                <div class="CLASS_NAME">
               <?php  //récupération du nom du champ
               print $node->content['field_NAME']['field']['#title'] ?>
                    <ul>
               <?php
               //Parcourir le tableau field_NAME de l'objet $node pour lister le contenu clé/valeur
               foreach ($node->field_NAME as $key => $fichiers) {
                   //Ne pas afficher les champs vides du tableau
                      if (!empty($fichiers['view'])):
//                       print 'Contenu de $fichier'.var_dump($fichier);

                       print  '<li>'.$node->field_NAME[$key]['view'].'</li>';

                endif;
               }
               foreach ($node->field_NAME2 as $key => $liens) {
                   //Ne pas afficher les champs vides du tableau
                      if (!empty($liens['view'])):
                    print '<li>'.$node->field_NAME2[$key]['view'].'</li>';
                endif;
               }
               ?>  
                  </ul>   </div>
            <?php endif;?>



<?php //mise en forme tableau (à finaliser)
if (!empty($node->field_NAME[0]['view'])): ?>
<table  class="CLASS_NAME">
  <?php if (!empty($title)) : ?>
    <caption><?php print $title; ?></caption>
  <?php endif; ?>
  <thead>
    <tr>
      <?php foreach ($header as $field => $label): ?>
        <th class="table-head-<?php print $fields[$field]; ?>">
          <?php print $label; ?>
        </th>
      <?php endforeach; ?>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($rows as $count => $row): ?>
      <tr <?php print implode(' ', $row_classes[$count]); ?>">
        <?php foreach ($row as $field => $content): ?>
          <td class="champs-<?php print $fields[$field]; ?>">
            <?php print $content; ?>
          </td>
        <?php endforeach; ?>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php endif;?>

 <?php //utiliser nom d'un champ comme classe dynamique
       if (!empty($node->field_image_deco_lycee[0])):
           print "<span class=".$node->content['field_image_deco_lycee']['field']['#field_name']."/>".$node->field_image_deco_lycee[0]['view'].'</span>'; /* Image deco page lycee */
       endif;
       ?>

<?php
// INLCUSION D'UNE VUE AVEC ARGUMENTS (Filtre dynamique)
                $viewname = 'liste_autres_vdl';
                $view = views_get_view ($viewname);
                $viewdisplay = $view->set_display('block_1');

//vid = 4 , type d'evenement pour site en prod
                $lesVid=array('4');

// on recupere le vid (taxonomie) et l'on verifie si c'est celui voulu
                if ( !empty($node->taxonomy)  ) {
// Récupération du 1er element du tableau
                    $term = array_shift($node->taxonomy);
                    // verifie si l'un des termes appartiennent bien à l'un des vid définis dans le tableau
                    if ( in_array($term->vid,$lesVid) ) {
                        $args = $term->tid;
                        $view->set_arguments($args);
                        //debugage
                        drupal_set_message('VID vocabulaire: '.$term->vid.' et le terme id : '.$term->tid,'status');
                        drupal_set_message('Vue utilisé: '.$viewname,'status');
                        $output = '<div id="ac"><h3>'.$view->get_title().'</h3>' .$view->preview($viewdisplay, $args).'</div>';
                        drupal_set_message('Argument pour la vue : tid '.$args.'/ nid '.$node->nid,'status');
                        drupal_set_message('Vue sortie des valeurs avant affichage : '.$output,'status');
                        if (!empty($view->result)) {
                            print $output;
                            drupal_set_message('Vue sortie des valeurs: '.$output,'status');
                        }
                    }
                }
                
                ?>
<!--Code à finaliser pour theming de views field-->
<ul class="bxslider">
               <?php
               foreach ($fields['field_galerie_image_vdl_fid']->content as $key => $lien) {
                    print '<li>'.$fields['field_galerie_image_vdl_fid']->content.'</li>';
               }
               ?>  
                  </ul>

<!-- Affichage au niveau des blocs -->
<?php
  $match = FALSE;
 
  // block is visible on the content types entered here
  $types = array('actu_association_revue_presse'=>1);
  $url = request_uri();

  if ((arg(0) == 'node') && is_numeric(arg(1))) {
    $node = node_load(arg(1));
    $match = isset($types[$node->type]);
  }
  return $match;
?>
<?php
  $match = FALSE;
 
  //bloc visible sur les NiD suivants
  $nids = array(1, 28);
  
  // block is visible on the content types entered here
  $types = array('page_association' => 1, 'page_erreur' => 1, 'actu_association_revue_presse'=>1);
  $url = request_uri();

  if (arg(0) == 'node' && is_numeric(arg(1))) {
    $nid = arg(1);
  
    // check on id
    $node = node_load(array('nid' => $nid));
    $match = isset($nids[$node->nid]);
      
  }
  if ((arg(0) == 'node') && is_numeric(arg(1))) {
    $node = node_load(arg(1));
    $match = isset($types[$node->type]);
  }
 
    // visible sur page contact
   if (strpos($url, "site/contact")) {
    $match = TRUE;
  }

  return $match;
?>