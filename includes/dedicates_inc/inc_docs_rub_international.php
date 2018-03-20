<?php
/*
 * Liste dynamique pour afficher les docs joints
 * de nombre.
 */
?>

    <?php
                    /* 06/2015 Liste les fichiers à partir du tableau créé
                     * création d'une liste dynamique 
                     */
                    if (!empty(
                        
         $node->field_fichier_joint[0]['view']
        OR $node->field_lien_site[0]['view']
    ) ): ?>
                <div class="docs-joints-international">
               <?php  //récupération du nom du champ
               print $node->content['field_NAME']['field']['#title'] ?>
                    <ul>
               <?php
               foreach ($node->field_fichier_joint as $key => $lien) {
                    print '<li>'.$node->field_fichier_joint[$key]['view'].'</li>';
               }
               ?>  
                  </ul>   </div>
            <?php endif;?>