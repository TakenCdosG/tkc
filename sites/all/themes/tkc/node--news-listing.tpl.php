<div class="widgets_bar top">
  <div class="widget_1">
    <?php print $field_widget_1[0]['entity']->body['und'][0]['safe_value']; ?>
  </div>
  <div class="widget_2">
    <?php print $field_widget_2[0]['entity']->body['und'][0]['safe_value']; ?>
  </div>
</div>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <div class="content"<?php print $content_attributes; ?>>
    <?php print render($content['body']); ?>
    <?php print views_embed_view('news_page', 'default'); ?>
  </div>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</div>
<div class="widgets_bar bottom">
  <div class="widget_1">
    <?php print $field_widget_1[0]['entity']->body['und'][0]['safe_value']; ?>
  </div>
  <div class="widget_2">
    <?php print $field_widget_2[0]['entity']->body['und'][0]['safe_value']; ?>
  </div>
</div>