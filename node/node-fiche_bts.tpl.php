<!-- ************************ NODE.TPL POUR FICHE BTS *****************-->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
 <!-- ______________________ COLONNE GAUCHE _______________________ -->


         <div id="left-content-fiche-bts">
            <?php if ($title): ?>
     <h1 class="titre-fiche-bts"><?php print $title; ?></h1>
     <?php endif; ?>
     
      <br clear="all"/>
      
      <?php if ($node->field_abreviation_bts[0]['view']): ?>
      <span id="abreviation-bts">
                 <?php  print $node->field_abreviation_bts[0]['view'] ?>
      </span>
             <?php endif; ?>

       <br clear="all"/>
      
      <?php if ($node->field_complement_fiche_bts[0]['view']): ?>
       <div class="complement-bts"><span><span><span>
                 <?php  print $node->field_complement_fiche_bts[0]['view'] ?>
               </span></span></span></div>
             <?php endif; ?>
    
      <br clear="all"/>

      
       

             <?php if ($node->field_intro_fiche_bts[0]['view']): ?>
        <div id="intro-fiche-bts">
          
           <?php if ($node->field_illus_fiche_bts[0]['view']): ?>
      <div id="illus-fiche-bts">
                 <?php  print $node->field_illus_fiche_bts[0]['view'] ?>
      </div>
             <?php endif; ?>
                 <?php  print $node->field_intro_fiche_bts[0]['view'] ?>
             
         
        </div>
             <?php endif; ?>
        <br clear="all"/>
  
      
                 <?php if ($left): ?>
            <?php print $left; ?>
                 <?php endif; ?>
  <br clear="all"/>
    

          </div>
             <!-- /sidebar-left -->

		<!--fin du contenu gauche -->
   <!--______________COLONNE CENTRALE________________ -->
   <div id="middle-content-fiche-bts">
    <?php print $picture; ?>

    <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>
      <table id="infos-pratiques-bts">
          <tbody>
              <tr>
                  <td class="col1">
                      <h4>Des liens...</h4>
                      <?php
 $theme_path = drupal_get_path('theme', 'cyrano_pf');
 include ($theme_path.'/includes/inc_fiche_bts_liste_liens.php');
 ?>
                  </td>
                  <td class="col2">
         <h4>En détail...</h4>
         <?php if ($node->field_detail_fiche_bts[0]['view']): ?>
        <div id="fiche-detaille-bts">
                <?php  print $node->field_detail_fiche_bts[0]['view'] ?>
            <?php  print $node->field_detail_fiche_bts[1]['view'] ?>
        </div>
   <?php endif; ?>
                  </td>
                  <td class="col3">
                      <h4>Utile...</h4>
                      <?php if ($terms): ?>

      <div id="taxonomy">
<?php print Cyrano_PF_print_terms($node);?>
      </div>
    <?php endif;?>
                  </td>
              </tr>

          </tbody>

      </table>


    
      
    <div class="bodyfield-content-bts">
     
      <?php
      
      $output = Cyrano_PF_split_bodycontent ($node->content['body']['#value']);
        print $output;?>

    </div>
 <br clear="all"/>
 <?php if ($node->field_info_plus_bts[0]['view']): ?>
  <div id="info-plus-fiche-bts">
      <h3>En savoir plus...</h3>
  <?php  print $node->field_info_plus_bts[0]['view'] ?>
  </div>
        <?php endif; ?> 
<!-- retour haut selon resolution de l'ecran -->
          <a href="#general" id="retour_haut">Haut de page</a>
    <?php if ($links): ?> 
      <div class="links"> <?php print $links; ?></div>
    <?php endif; ?>
      </div>

  </div> <!-- /node-inner -->
</div> <!-- /node-->