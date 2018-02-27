<?php

/*
 * Tableau pour afficher des fichiers joints (pdf) sans limite 
 * de nombre.
 */
?>
<?php

foreach($node->field_fichier_joint as $file) {
  if ($file['view']) {
      $header = array('data' => 'Aller plus loin');
      $rows[] = array($file['view']);
      $attributes = array('class'=> 'doc-joints','sticky' => FALSE);
    }
}

$output = theme('table', $header,$rows, $attributes);
print $output;
?>