<!-- ************************ NODE.TPL POUR FICHE BTS *****************-->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
      
       
  
 <!--______________ BLOC 1 ________________ -->
 <div id="bloc-1" class="layout_2col_4_8_bloc1 fiche-bts layout_2col_items_4_8">
     <?php if ($title): ?>
     <h1 class="titre-fiche-bts"><?php print $title; ?></h1>
     <?php endif; ?>
     
      
      
      <?php if ($node->field_abreviation_bts[0]['view']): ?>
      <span id="abreviation-bts">
                 <?php  print $node->field_abreviation_bts[0]['view'] ?>
      </span>
             <?php endif; ?>

      
      
      <?php if ($node->field_complement_fiche_bts[0]['view']): ?>
       <div class="complement-bts"><span><span><span>
                 <?php  print $node->field_complement_fiche_bts[0]['view'] ?>
               </span></span></span></div>
             <?php endif; ?>
     <?php if ($node->field_illus_fiche_bts[0]['view']): ?>
      <div id="illus-fiche-bts">
                 <?php  print $node->field_illus_fiche_bts[0]['view'] ?>
      </div>
             <?php endif; ?>
     </div> <!--Fin Bloc 1-->

     <!--______________ BLOC 2 ________________ -->
     <div id="bloc-2" class="layout_2col_4_8_bloc2 fiche-bts layout_2col_items_4_8">
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
 $theme_path = drupal_get_path('theme', 'susy2_pf_cyrano');
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

          </div> <!--Fin Bloc -->
     
     <!--______________ BLOC 3 ________________ -->
     <div id="bloc-3" class="layout_2col_4_8_bloc3 fiche-bts layout_2col_items_4_8">
          <?php if ($node->field_intro_fiche_bts[0]['view']): ?>
        <div id="intro-fiche-bts">
         
                 <?php  print $node->field_intro_fiche_bts[0]['view'] ?>
            
        </div>
             <?php endif; ?>
     </div> <!--Fin Bloc -->

     <!--______________ BLOC 4 ________________ -->
     <div id="bloc-4" class="layout_2col_4_8_bloc4 fiche-bts layout_2col_items_4_8">
             
    <div class="bodyfield-content-bts">
     
      <?php
      
      $output = susy2_pf_cyrano_split_bodycontent ($node->content['body']['#value']);
        print $output;?>

    </div>
 <br clear="all"/>
 <?php if ($node->field_info_plus_bts[0]['view']): ?>
  <div id="info-plus-fiche-bts">
      <h3>En savoir plus...</h3>
  <?php  print $node->field_info_plus_bts[0]['view'] ?>
  </div>
        <?php endif; ?> 

    <?php if ($links): ?> 
      <div class="links"> <?php print $links; ?></div>
    <?php endif; ?>
        </div> <!--Fin Bloc -->
      
  

  </div> <!-- /node-inner -->
</div> <!-- /node-->