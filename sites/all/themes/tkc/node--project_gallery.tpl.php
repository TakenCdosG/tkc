<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix);?>

  <?php if ($display_submitted): ?>
    <div class="submitted">
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>

  <div class="content bottom"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
    ?>
<div class="fotor" data-maxwidth="1200" data-maxheight="800" data-width="100%" data-keyboard="true" data-fit="cover" data-thumbs="false">
  <?php
  $images = $node->field_images['und'];
  foreach($images as $image){
      $url = $image['uri'];
      $variables = array('style_name'=>'projectgallery','path'=>$url, 'width' => NULL,'height' => NULL, );
      print theme_image_style($variables );  
  }
  ?>
    </div>
    <div class="clearfix"></div> 
  </div>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</div>
<script>
  jQuery(function($){
    $('.fotor').fotorama();

                    jQuery('i').empty();
});
</script>