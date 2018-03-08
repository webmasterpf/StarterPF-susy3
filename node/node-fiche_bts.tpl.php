<?php /* Ce template permet la création d'un layout multicolonne pour les pages de base, en permettant la disposition facile
 * des champs CCK custom, si nécessaires pour une page de base.

 */ ?>

<!-- ************************ NODE.TPL POUR FICHE BTS *****************-->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
    <div class="node-inner">

        <!--______________ ILLUSTRATION et TITRE ________________ -->
        <div id="zone-illustration" class="fiche-formation fiche-bts">
   

            <?php
            if ($node->field_illus_fiche_bts[0]['view']
                OR
                $title
            ):
                ?>
                <div id="illustration-pleinepage" class="illustration-fiche">
                    <h1 class="titre_overlay titre_page"><?php print $title; ?></h1>
                <?php print $node->field_illus_fiche_bts[0]['view'] ?>
                </div>
<?php endif; ?>


        </div><!-- /zone-illustration -->   

        <!--______________ ZONE 1 ________________ -->
        <div id="zone-1" class="zone_layout_max_centre fiche-bts">
          <?php print $picture; ?>

<?php if ($submitted): ?>
                <span class="submitted"><?php print $submitted; ?></span>
<?php endif; ?>

                
                   <?php
            if ($node->field_complement_fiche_bts[0]['view']):
                print '<div class="complement-bts"><span><span><span>'.$node->field_complement_fiche_bts[0]['view'].'</span></span></span></div>';
            endif;
            ?>
                
            <?php
            if ($node->field_intro_fiche_bts[0]['view']):
                print '<div class="intro-fiche-bts">'.$node->field_intro_fiche_bts[0]['view'].'</div>';
            endif;
            ?>


            <?php
            if ($node->field_abreviation_bts[0]['view']):
                print '<span id="abreviation-bts">'.$node->field_abreviation_bts[0]['view'].'</span>';
            endif;
            ?>

         
        </div><!--  /zone-1-->
<div id="zone-2" class="zone_layout_max fiche-bts">
                      <?php if ($node->field_diapo_lycee_type[0]['view']): ?>
                 <aside class="galerie">
                    <?php  print $node->field_diapo_lycee_type[0]['view'];?>
            </aside>
            <?php endif;?>
                
</div> <!-- /zone-2 -->
    <div id="zone-3" class="zone_layout_max_centre fiche-bts">
                <div class="content">

                
                <?php   print $node->content['body']['#value'];/*déplacer le contenu dans la colonne désirée*/ ?>
                </div>
                
            <table id="infos-pratiques-bts">
                <tbody>
                    <tr>
                        <td class="col1">
                            <h4>Des liens...</h4>
<?php
global $theme_path;
include ($theme_path . '/includes/dedicates_inc/inc_fiche_bts_liste_liens.php');
?>
                        </td>
                        <td class="col2">
                            <h4>En détail...</h4>
                            <?php
global $theme_path;
include ($theme_path . '/includes/dedicates_inc/inc_fiche_bts_liste_fiches_details.php');
?>
                            <?php if ($node->field_detail_fiche_bts[0]['view']): ?>
                                <div id="fiche-detaille-bts">
    <?php print $node->field_detail_fiche_bts[0]['view'] ?>
    <?php print $node->field_detail_fiche_bts[1]['view'] ?>
                                </div>
                            <?php endif; ?>
                        </td>
                        <td class="col3">
                            <h4>Utile...</h4>
                            <?php if ($terms): ?>

                                <div id="taxonomy">
    <?php print Cyrano_PF_print_terms($node); ?>
                                </div>
<?php endif; ?>
                        </td>
                    </tr>

                </tbody>
              
            </table>
           <?php if ($node->field_info_plus_bts[0]['view']): ?>
                <div id="info-plus-fiche-bts">
                    <h3>En savoir plus...</h3>
                <?php print $node->field_info_plus_bts[0]['view'] ?>
                </div>
            <?php endif; ?> 

<?php if ($links): ?> 
                <div class="links"> <?php print $links; ?></div>
<?php endif; ?>
                
                
        </div> <!--/zone-3-->


    </div> <!-- /node-inner -->
</div> <!-- /node-->