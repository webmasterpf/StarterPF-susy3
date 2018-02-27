<?php

/*
 * Tableau pour afficher les objectifs BTS (pdf) sans limite 
 * de nombre.
 * Suite conversion ,changement de nom de champ pour les fichiers  : field_fichier_joint_partenaires
 * remplace field_objectif_bts
 */
?>
<?php

foreach($node->field_fichier_joint_partenaires as $file) {
  if ($file['view']) {
      $header = array('data' => 'Les objectifs des formations BTS');
      $rows[] = array($file['view']);
      $attributes = array('id'=> 'objectif-bts','sticky' => FALSE);
    }
}

$output = theme('table', $header,$rows, $attributes);
print $output;
?>