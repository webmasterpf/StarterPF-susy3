<!-- ______________________ LAYOUT HOMEPAGE LARGE _______________________ -->
<?php
global $theme_path;
include ($theme_path . '/includes/inc_header.php');
?>  
<!-- ______________________ ANNONCE _______________________ -->

<?php if ($AnnonceAlaUne): ?>
    <div class="annonce_1 annonce_alaUne">
        <?php print $AnnonceAlaUne; ?>
    </div> <!-- /#content-top -->
<?php endif; ?>

<!-- ______________________ ANNONCE DEUIL _______________________ -->

<?php if ($AnnonceDeuil): ?>
    <div class="annonce_2">
        <?php print $AnnonceDeuil; ?>
    </div> <!-- /#content-top -->
<?php endif; ?>
<!-- ______________________ ZONE DIAPO PLEINE LARGEUR _______________________ -->

<?php if ($DiapoHPFull): ?>
    <div class="HPDiapo"><?php print $DiapoHPFull; ?></div>
<?php endif; ?>



<!-- ______________________  ACCES RUBRIQUES  _______________________ -->
<?php if ($RubriquesHP1): ?>
    <div class="acces_rubriques"><?php print $RubriquesHP1; ?></div>
<?php endif; ?>

<!-- ______________________  ACCES RUBRIQUES 2  _______________________ -->
<?php if ($RubriquesHP2): ?>
    <div class="acces_rubriques"><?php print $RubriquesHP2; ?></div>
<?php endif; ?>

<!-- ______________________  ACCES RUBRIQUES 3  _______________________ -->
<?php if ($RubriquesHP3): ?>
    <div class="acces_rubriques"><?php print $RubriquesHP3; ?></div>
<?php endif; ?>                 

<!-- ______________________ ACCES LYCEES _______________________ -->
<?php if ($AccesLycees): ?>
    <div class="acces_rubriques"><?php print $AccesLycees; ?></div>
<?php endif; ?>   
<!-- ______________________ ACCES LOGOS PARTENAIRES _______________________ -->
<?php if ($LogoPart): ?>
    <div class="logo_partenaires"><?php print $LogoPart; ?></div>
<?php endif; ?>   


<!-- ______________________ FOOTER _______________________ -->
<?php
global $theme_path;
include ($theme_path . '/includes/inc_footer.php');
?>      