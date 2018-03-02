<!--_________ NODE TEMPLATE POUR ANNONCE APPRENTISSAGE  -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
 

    <?php print $picture; ?>

    <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>
        <!-- ______________________ COLONNE 1 _______________________ -->
		
			
         <div id="colonne-1" class="col1_layout_2_6_4 detail-offre-apprentissage">
              <?php if ($title): ?>
                <h1 class="titre-offre-apprentissage"><?php print $title; ?></h1>
              <?php endif; ?>
            <?php print $left; ?>
          </div>
             <!-- /sidebar-left -->

		<!--fin du contenu gauche -->
      
   <!-- ______________________ COLONNE 2 _______________________ -->
      <div id="colonne-2" class="col2_layout_2_6_4 detail-offre-apprentissage">
  <!--Partie centrale -->

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
    
      
      <?php 
      //print $content;
      print $node->content['body']['#value']
              ?>
       
    
      <?php if ($centralBloc): ?>
                <div id="middleGalerie"><?php print $centralBloc; ?></div>
              <?php endif; ?>
                   
    </div>

    <?php if ($terms): ?>

      <div id="taxonomy">
    <?php //print Cyrano_PF_taxonomy_specifique($node,7); ?>

      </div>
    <?php endif;?>

    <?php if ($links): ?> 
      <div class="links"> <?php print $links; ?></div>
    <?php endif; ?>
      </div><!-- /fin colonne 2 centrale-->
      <!-- ______________________ COLONNE 3 _______________________ -->
                            
           <div id="colonne-3" class="col3_layout_2_6_4 detail-offre-apprentissage">
                                   <?php 
  //$theme_path = drupal_get_path('theme', 'NOM_THEME');
  global $theme_path;
include($theme_path .'/includes/inc_region_col_3.php');
?>
            </div>
        

  </div> <!-- /node-inner -->
</div> <!-- /node-->