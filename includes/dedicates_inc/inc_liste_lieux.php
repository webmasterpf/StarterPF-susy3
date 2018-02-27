<?php 
              // tableau multidimensionnel contenant les data du champ
$tab_lieux = $node->field_lieux;

        
               foreach ($tab_lieux as $key => $lycee) {
        $liste_lycees[].= $lycee['view'];
            $liste_lycees = array_filter($liste_lycees, 'strlen');//supprime les éléments vides
            $liste_lycees= array_unique($liste_lycees);

                 foreach ($liste_lycees as $key => $val_lieu) {
                     print  $liste_lieux .= $val_lieu['value']. ',';                   
                                    }
//                   if($lycee['view'] !== null OR !empty($lycee['view'])){
//                       print $liste_lycees['view'].'</br>';
//                   }
                               
               
//           drupal_set_message(print_r($liste_lycees, TRUE));   
//Récupération du tid dans une variable, suppression des doublon                               
                               foreach ($lycee as $clef => $valeur) {
                     $term_tid_lieux[] .= $lycee['value'];       
                     
                      $term_tid_lieux = array_filter($term_tid_lieux, 'strlen'); //supprime éléments vides
                                       $term_tid_lieux=  array_unique($term_tid_lieux);//supprime doublons
                                      
                                       foreach ($term_tid_lieux as $keyterm => $val_term_id) {
                                       $liste_lieux .= $val_term_id. ',';                   
                                    }
     
                               }
                  
               }
//                drupal_set_message(t("Clé tableau lycée : $key; Valeur tableau lycee: $lycee<br />\n")); 
//                drupal_set_message(t("Valeur var liste_lieux: $liste_lieux<br />\n")); 
//                drupal_set_message(t("Valeur tab liste_lieux: $tab_liste_lieux<br />\n")); 
               drupal_set_message(t("Valeur tab  lycee_clean['view']:".$lycee_clean['view']."\n")); 
               drupal_set_message(print_r($lycee_clean, TRUE)); 
                   drupal_set_message(t("Valeur tab  liste_lycee['view']:".$liste_lycees['view']."\n")); 
                drupal_set_message(print_r($liste_lycees, TRUE)); 
               drupal_set_message(t("Valeur tab  tab_liste_lieux['view']:".$tab_liste_lieux."\n"));
                drupal_set_message(print_r($term_tid_lieux, TRUE)); 
                drupal_set_message(t("Valeur var liste_lieux: $liste_lieux<br />\n")); 
                
           ?>