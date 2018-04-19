<!-- ______________________ PAGE BASE TPL _______________________ -->
<?php
global $theme_path;
include ($theme_path . '/includes/inc_header.php');
?>  

<!-- ______________________ CONTENT INNER GLOBAL _______________________ -->

<div class="content-inner">

    <!-- ______________________ CONTENT TOP NODE_______________________ -->
    <?php if ($content_top_node): ?>
        <div id="content-top-node">
            <?php print $content_top_node; ?>
        </div> <!-- /#content-top-node -->
    <?php endif; ?>

    <div class="content-top">
        <?php print $breadcrumb; ?>

        <?php print $content_top; ?>
    </div> <!-- /#content-top -->


    <?php if ($mission || $messages || $help || $tabs): ?>
        <div id="content-header">              

            <?php if ($mission): ?>
                <div id="mission"><?php print $mission; ?></div>
            <?php endif; ?>

            <?php print $messages; ?>

            <?php print $help; ?> 

            <?php if ($tabs): ?>
                <div class="tabs"><?php print $tabs; ?></div>
            <?php endif; ?>

        </div> <!-- /#content-header -->
    <?php endif; ?>
    <!-- ______________________ CONTENU CENTRAL _______________________ -->
    <article class="middle-content">
        <?php if ($title): ?>
            <h1 class="title titre_page_tpl"><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print $content; ?>
        <?php print $feed_icons; ?>
    </article> <!-- /#content-area -->

    <!-- ______________________  ACCES RUBRIQUES 3 - CONTACT  _______________________ -->
<?php if ($RubriquesHP3): ?>
    <div class="acces_rubriques"><?php print $RubriquesHP3; ?></div>
<?php endif; ?> 

<!-- ______________________ ACCES LOGOS PARTENAIRES _______________________ -->
<?php if ($LogoPart): ?>
    <div class="logo_partenaires"><?php print $LogoPart; ?></div>
<?php endif; ?>   

<!-- ______________________ CONTENU BAS _______________________ -->

<?php if ($content_bottom): ?>
    <div class="content-bottom">
        <?php print $content_bottom; ?>
    </div><!-- /#content-bottom -->
<?php endif; ?>
    
</div> <!-- /content-inner /content -->


<?php
global $theme_path;
include ($theme_path . '/includes/inc_footer.php');
?>                