<?php
/* Ce template permet la création d'un layout multicolonne pour les pages de base, en permettant la disposition facile
 * des champs CCK custom, si nécessaires pour une page de base.
*/?>
<!--______________NODE TPL POUR PAGE.TPL CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
    <div class="node-inner">
        
            <?php print $picture; ?>

            <?php if ($submitted): ?>
            <span class="submitted"><?php print $submitted; ?></span>
            <?php endif; ?>

            <div class="content">
                <?php   print $node->content['body']['#value'];/*déplacer le contenu dans la colonne désirée*/ ?>
                <h1>The 10 column complex nested grid AG test</h1>

<div class="ag ag1">
  <h2>AG 1</h2>
</div>
<!-- /ag1 -->

<!-- ag3 to ag7 are nested within ag2.-->
<div class="ag ag2">
  <h2>AG 2</h2>
  <div class="ag ag4">
    <h2>AG 4</h2>
  </div>
  <div class="ag ag5">
    <h2>AG 5</h2>
  </div>
  <div class="ag ag6">
    <h2>AG 6</h2>
  </div>

  <!-- ag8, ag9 and ag10 are nested within ag7 -->
  <div class="ag ag7">
    <h2>AG 7</h2>
    <div class="ag ag8">
      <h2>AG 8</h2>
    </div>
    <div class="ag ag9">
      <h2>AG 9</h2>
    </div>
    <div class="ag ag10">
      <h2>AG 10</h2>
    </div>
  </div>
  <!-- /ag7 -->
</div>
<!-- /ag2 -->

<div class="ag ag3">
  <h2>AG 3</h2>
</div>
<!-- /ag3 -->
            </div>

        </div>

       

        <?php if ($terms): ?>
        <div class="taxonomy"><?php //print $terms; ?></div>
        <?php endif;?>

        <?php if ($links): ?>
        <div class="links"> <?php //print $links; ?></div>
        <?php endif; ?>

    </div> <!-- /node-inner -->
</div> <!-- /node-->