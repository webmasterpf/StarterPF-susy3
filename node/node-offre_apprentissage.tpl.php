<!--_________ NODE TEMPLATE POUR OFFRE de CONTRAT APPRENTISSAGE  -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
        <!--______________ ILLUSTRATION et TITRE ________________ -->
        <div id="zone-illustration" class="offre-contrat-alternance">
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
      
        <div id="zone-1" class="zone1_layout_9_3 offre-contrat-alternance">
      
             <?php print $picture; ?>

            <?php if ($submitted): ?>
            <span class="submitted"><?php print $submitted; ?></span>
            <?php endif; ?>


       <table class="table-offre-apprentissage">
           <tr class="line1">
               <td>  <?php  print $node->content['field_reference_pbts']['field']['#title']  ?></td>
               <td>  <?php  print $node->field_reference_pbts[0]['view'] ?></td>

           </tr>
              <tr class="line2">
               <td>  <?php  print $node->content['field_lieu_poste_bts']['field']['#title'] ?></td>
               <td>  <?php  print $node->field_lieu_poste_bts[0]['view'] ?></td>

           </tr>
              <tr class="line1">
               <td>  <?php  print $node->content['field_formation_apprenti']['field']['#title'] ?></td>
               <td>  <?php  print $node->field_formation_apprenti[0]['view'] ?></td>

           </tr>
              <tr class="line2">
               <td>  <?php  print $node->content['field_domaine_activite_bts']['field']['#title'] ?></td>
               <td>  <?php  print $node->field_domaine_activite_bts[0]['view'] ?></td>

           </tr>
     <tr class="line1">
               <td>  <?php  print $node->content['field_etat_poste']['field']['#title'] ?></td>
               <td class="etat">  <?php  print $node->field_etat_poste[0]['view'] ?></td>

           </tr>
            <tr class="line2">
               <td> Postuler à l'offre</td>
               <td>
                   <?php
//                   drupal_set_message(print_r($node->field_etat_poste, TRUE));
                   $etats_possible = [76, 77];
                   if (in_array($node->field_etat_poste [0]['value'], $etats_possible)) {//si le tid est dans le tableau
                       print '<a href=/node/739?destinataire=' . $node->field_centre_bts[0]['value'] . '&ref_offre=' . $node->field_reference_pbts[0]['value'] . '>ICI</a>';
                   } else {//sinon
                       print 'Vous ne pouvez plus postuler pour cette offre';
                   }
                   ?>
               </td>

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
        <div id="zone-2" class="zone2_layout_9_3 offre-contrat-alternance">

           
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