<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($display_submitted): ?>
    <div class="submitted">
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>

  <div class="content"<?php print $content_attributes; ?> style="width: 100%">
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
    ?>
<div class="fotor">
      <?php foreach($field_gallery_photo as $photo): ?>
        <a href="<?php print file_create_url($photo['uri']) ;?>"></a>
      <?php endforeach; ?>
    </div>
  </div>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</div>
<script>
  jQuery(function($){
    $('.fotor').fotorama({nav: "thumbs", zoomToFit:'false', cropToFit: 'true', width: '100%',"ratio":"1920/1053", thumbHeight: '48'});
  });
</script>