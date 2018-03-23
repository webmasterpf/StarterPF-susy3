<?php
/*
 * Liste dynamique des mots clefs avec lien vers page du lycée correspondant
 *  Taxo indication lycées via champ CCK Content Taxonomy
 *  
 */
print '<ul>';
foreach ($node->field_lycee_possible as $key => $lycees) {
    //Ne pas afficher les champs vides du tableau
    if (!empty($lycees['view'])):
//                       print 'Contenu de $fichier'.var_dump($fichier);

        print '<li>' . $node->field_lycee_possible[$key]['view'] . '</li>';

    endif;
}
print '</ul>';
?>    