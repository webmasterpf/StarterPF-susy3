<?php

/* 
 * Snippet pour réorganiser la sortie d'un affichage d'une vue au niveau des champs : views-view-fields.tpl.php
 */
?>

 <?php foreach ($row->field_galerie_image_vdl_fid as $img) : ?>
        
        <?php $img_medium = image_style_url('Site-CE-480x350-flexslider', $img['raw']['uri']); ?>
        
        <a class="cloud-zoom-gallery <?php ($count == 0)? print ' selected ': NULL; ?>" 
           
           data-thumb="<?php print $img_medium; ?>'" 
           href ="<?php print $img_medium; ?>">
            <span class="vs-thumb">
              <?php print $img_medium; ?>
            </span>
        </a>
        <?php $count ++; ?>
      <?php endforeach; ?>

//////////////////////////////////////
<?php
$field_galerie_image_vdl = field_get_items('node', $node, 'field_galerie_image_vdl'); 
 $image_url = file_create_url($field_video_image[0]['uri']);  
 print $image_url;
 
/////////////////////////////////////
//Affiche URL/sites/all/
$file = $fields['field_galerie_image_vdl_fid'];
print file_create_url($file->uri);  

//////
//Affichage d'un block selon url,pour views page display
// Dans un champ php

$url = request_uri();
if (strpos($url, "terme_contenu_dans_url")) {
return TRUE;
}

//Texte notice pour champ choix de la galerie
Choisir ici le type de galerie désiré pour afficher les images précédemment envoyées sur le serveur;
Choix 1 : galerie d'image slider avec zoom (périmé);
Choix 2 : vignettes d'images avec zoom (périmé);
Choix 3 : galerie d'images FlexSlider Classic;
Choix 5 : galerie d'images FlexSlider Caroussel;
Choix 6 : galerie d'images BxSlider Basic;
Choix 4  : galerie d'images BxSlider Caroussel;