    <?php
                    /* 03/2018 Liste les fichiers uploadés par
                     * filefield and linkfield
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
               //Parcourir le tableau field_NAME de l'objet $node pour lister le contenu clé/valeur
               foreach ($node->field_fichier_joint as $key => $fichiers) {
                   //Ne pas afficher les champs vides du tableau
                      if (!empty($fichiers['view'])):
//                       print 'Contenu de $fichier'.var_dump($fichier);

                       print  '<li>'.$node->field_fichier_joint[$key]['view'].'</li>';

                endif;
               }
               foreach ($node->field_lien_site as $key => $liens) {
                   //Ne pas afficher les champs vides du tableau
                      if (!empty($liens['view'])):
                    print '<li>'.$node->field_lien_site[$key]['view'].'</li>';
                endif;
               }
               ?>  
                  </ul>   </div>
            <?php endif;?>