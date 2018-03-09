<?php

/*
 * Tableau pour afficher des fichiers joints (pdf) sans limite 
 * de nombre.
 */
?>
    <?php
                    /* 06/2015 Liste les fichiers à partir du tableau créé
                     * création d'une liste dynamique 
                     */
                    if ($node->field_detail_fiche_bts[0]['view']): ?>
                <div class="CLASS_NAME">
               <?php  //récupération du nom du champ
               print $node->content['field_detail_fiche_bts']['field']['#title'] ?>
                    <ul>
               <?php
               foreach ($node->field_detail_fiche_bts as $key => $lien) {
                    print '<li>'.$node->field_detail_fiche_bts[$key]['view'].'</li>';
               }
               ?>  
                  </ul>   </div>
            <?php endif;?>