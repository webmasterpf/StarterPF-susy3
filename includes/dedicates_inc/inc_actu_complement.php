<?php
/* 
 * contenu du bloc pour les docs utiles sur fiche formation
 * listage auto des filefield dans la limite du nombre fixe dans réglage du champ CCK
 */

?>
  <?php if ($node->field_date_evenement[0]['view']): ?>
              <div id="bloc-docs-actualites">
            <h3 class="docs-actualites">Informations &amp; Documents joints</h3>
             <table id="table-docs-actualites">
                                <tbody>

           <tr class="line1">
                <td>  Date : <?php  print $node->field_date_evenement[0]['view']  ?></td>
                <td>   Cat&eacute;gorie : <?php print $my_taxo_actualites; ?></td>
                <td>  Type de m&eacute;dia : <?php  print $node->field_type_media[0]['view']  ?></td>
                               <td>
            <?php
$rows = array();
foreach($node->field_fichier_joint_rp as $file) {
  if ($file['view']) {
      $rows[] = array($file['view']);
    }
}
$output = theme_table(array(), $rows, array('class' => 'table-fichier_joint_rp'));
print $output;
?>
      </td> </tr>
                 </tbody>

       </table>
        </div>
       
           <?php endif;?>



