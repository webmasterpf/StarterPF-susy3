<?php
/* 
 * contenu du bloc pour les docs utiles sur fiche formation
 * listage auto des filefield dans la limite du nombre fixe dans réglage du champ CCK
 */

?>
  <?php if ($node->field_fiche_programme[0]['view']
          OR
          $node->field_lien_utile_ficheform[0]['view']
          ): ?>
        <div class="docs-utiles-ficheform">
            <h3>Infos utiles</h3>
           <?php
$rows = array();
foreach($node->field_fiche_programme as $file) {
  if ($file['view']) {
      $rows[] = array($file['view']);
    }
}
$output = theme_table(array(), $rows, array('class' => 'table-docs-utiles-ficheform'));
print $output;
?>
            <?php
$rows = array();
foreach($node->field_lien_utile_ficheform as $file) {
  if ($file['view']) {
      $rows[] = array($file['view']);
    }
}
$output = theme_table(array(), $rows, array('class' => 'table-docs-utiles-ficheform'));
print $output;
?>

        </div>
           <?php endif;?>