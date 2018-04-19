<!--_________ NODE TEMPLATE POUR OFFRE de CONTRAT APPRENTISSAGE  -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
        <!--______________ ILLUSTRATION et TITRE ________________ -->
        <div id="zone-illustration" class="offre-poste-enseignement">
                     <?php if ($title): /*copier le titre dans la zone desirée*/?>
         
            <?php endif; ?>
            
                 <?php if ($node->field_illus_administratif[0]['view']
                 OR
                 $title
                 ): ?>
            <div id="illustration-pleinepage" class="illustration-offre">
                   <h1 class="titre_overlay titre_page"><?php print $title; ?></h1>
                 <?php  print $node->field_illus_administratif[0]['view'] ?>
            </div>
            <?php endif;?>
     
            
            </div><!-- /zone-illustration -->
     
            
        <!--______________ZONE 1________________ -->
      
        <div id="zone-1" class="zone1_layout_9_3 offre-poste-enseignement">
      
             <?php print $picture; ?>

            <?php if ($submitted): ?>
            <span class="submitted"><?php print $submitted; ?></span>
            <?php endif; ?>
<a href="/node/578" class="retour-liste"><< Retourner à la liste des offres</a>

     <table class="table-poste-bts offre-poste-enseignement">
           <tr class="line1">
               <td>  <?php  print $node->content['field_reference_pbts']['field']['#title']  ?></td>
               <td>  <?php  print $node->field_reference_pbts[0]['view'] ?></td>

           </tr>
              <tr class="line2">
               <td>  <?php  print $node->content['field_lieux']['field']['#title'] ?></td>
               <td>
                <?php 
  // tableau multidimensionnel contenant les data du champ

        foreach ($node->field_lieux as $key => $lieux) {

                       foreach ($lieux as $cle => $valeur) {
//Stockage des tids et des termes dans de stableaux distincts
            $term_lycees[].= $lieux['view'];
            $term_lycees = array_filter($term_lycees);//supprime les éléments vides
            $term_lycees= array_unique($term_lycees);
            
            $term_id_lycees[].= $lieux['value'];
            $term_id_lycees = array_filter($term_id_lycees, 'strlen');//supprime les éléments vides
            $term_id_lycees= array_unique($term_id_lycees);
            
                           }
                   }
                   
                     
                   //affichage du terme dans l'annonce
                   foreach ($term_lycees as $key => $terme) {
//   drupal_set_message(print_r($term_lycees, TRUE)); 
                      $liste_lieux = $terme. '</br>';
                           print $liste_lieux ;
                       
                   }


//Récupération du tid dans une variable, suppression des doublon                               
                   foreach ($term_id_lycees as $key2 => $term_id) {
                       $liste_lieux_tid .= $term_id. ',';
                   }
                           
                           
                           
//                   drupal_set_message(t("Valeur tableau $node->field_lieux")); 
//               drupal_set_message(print_r($node->field_lieux, TRUE)); 
//               drupal_set_message(t("Valeur tableau tab_lieux_clean")); 
//               drupal_set_message(print_r($tab_lieux_clean, TRUE)); 
//                drupal_set_message(t("Clé tableau lycée : $key; Valeur tableau lycee: $lycee<br />\n")); 
//                drupal_set_message(t("Valeur var liste_lieux: $liste_lieux<br />\n")); 
//                drupal_set_message(t("Valeur tab liste_lieux: $tab_liste_lieux<br />\n")); 
//               drupal_set_message(t("Valeur tab  lieux")); 
//               drupal_set_message(print_r($lieux, TRUE)); 
//               drupal_set_message(t("Valeur tab  term_id_lycees")); 
//               drupal_set_message(print_r($term_id_lycees, TRUE)); 
//               
//               drupal_set_message(t("Valeur var liste_lieux: term_lycees"));  
//               drupal_set_message(print_r($term_lycees, TRUE)); 
                
?>
               </td>

           </tr>
              <tr class="line1">
               <td>  <?php  print $node->content['field_discipline']['field']['#title'] ?></td>
               <td>  <?php  print $node->field_discipline[0]['view'] ?></td>

           </tr>
              <tr class="line2">
               <td>  <?php  print $node->content['field_vol_heures']['field']['#title'] ?></td>
               <td>  <?php  print $node->field_vol_heures[0]['view'] ?>H</td>

           </tr>
             <tr class="line1">
               <td>  <?php  print $node->content['field_etat_poste']['field']['#title'] ?></td>
               <td class="etat">  <?php  print $node->field_etat_poste[0]['view'] ?></td>

           </tr>
            <tr class="line2">
               <td> Postuler à l'offre</td>
               <td> <?php 
          
               print '<a href=/node/573?destinataire='.$liste_lieux_tid.'&ref_offre='.$node->field_reference_pbts[0]['value'].'&disc_offre=tid_'
                       .$node->field_discipline[0]['value'].'>ICI</a>';?></td>

           </tr>
          
       </table>

       <div class="content">
           

                <?php print $node->content['body']['#value'];?>
     
                 </div><!-- /content -->   
             <!--Lien vers formulaire -->
        <!--<div id="postule"><a href="/site/node/110" title="Pour postuler cliquez ici"> Postuler</a></div>-->
       
       <?php
              global $theme_path;
              include ($theme_path.'/includes/regions_inc/inc_region_zone_1.php');
              ?>
                     
                     </div><!-- /zone-1 -->
        
        <!--______________ZONE 2________________ -->
         <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
        <div id="zone-2" class="zone2_layout_9_3 offre-poste-enseignement">

           
               <?php
              global $theme_path;
              include ($theme_path.'/includes/regions_inc/inc_region_zone_2.php');
              ?>

             <?php if ($terms): ?>
        <div class="taxonomy"><?php //print $terms; ?></div>
        <?php endif;?>

        <?php if ($links): ?>
        <div class="links"> <?php //print $links; ?></div>
        <?php endif; ?>
        
        </div><!-- /zone-2 -->

  </div> <!-- /node-inner -->
</div> <!-- /node-->