<?php
/* 
 * contenu du bloc pour les docs utiles sur VDL
 * listage auto des filefield dans la limite du nombre fixe dans réglage du champ CCK
 */

?>
  <?php if ($node->field_fichier_joint_vdl[0]['view']
          OR $node->field_lien_utile_vdl[0]['view']): ?>
        <div id="docs-utiles-vdl">
            <h3>Infos en plus</h3>
           <?php
$rows = array();
foreach($node->field_fichier_joint_vdl as $file) {
  if ($file['view']) {
      $rows[] = array($file['view']);
    }
}
$output = theme_table(array(), $rows, array('class' => 'table-docs-utiles-vdl'));
print $output;
?>
            <?php
$rows = array();
foreach($node->field_lien_utile_vdl as $file) {
  if ($file['view']) {
      $rows[] = array($file['view']);
    }
}
$output = theme_table(array(), $rows, array('class' => 'table-docs-utiles-vdl'));
print $output;
?>

        </div>
           <?php endif;?>