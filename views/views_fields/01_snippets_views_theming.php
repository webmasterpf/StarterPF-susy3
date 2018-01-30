<!-- TEMPLATE DE VIEWS FIELDS CUSTOM BX SLIDER -->

<?php 

 //   print ' <div class="flexslider-thumbs"> <ul class="slides">';
//foreach ($fields as $id => $field): 
//   if (!empty($field->separator)): 
//   print $field->separator; 
//   endif; 

   //print $field->wrapper_prefix;
   
    //print $field->label_html;
    //print $field->content; 


    $imgurl = file_create_url($field->uri);  
    
    $img_thumb_filepath = strip_tags($fields['field_galerie_image_vdl_fid_1_value']->content);
    $img_slide_size = strip_tags($fields['field_galerie_image_vdl_fid_value']->content);
    $img_caption = strip_tags($fields['field_galerie_image_vdl_data_value']->content);
    $img_delta = strip_tags($fields['delta']->content);
    
    //print $field->wrapper_suffix; 

 ?>
 <ul class="bxslider">
           
              <?php
               foreach ($img_slide_size as $key => $lien) {
                    print '<li>'.$img_slide_size.'</li>';
               }
             
               ?> 

</ul>
    
<div id="bx-pager">
           <?php
               foreach ($img_thumb_filepath as $key => $lien) {
                    print '<a data-slide-index="'.$key.'" href="">'.$img_thumb_filepath.'</a>';
               }
               ?> 

</div>