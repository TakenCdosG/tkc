<div class="widgets_bar top">
  <div class="widget_1">
    <?php print $field_widget_1[0]['entity']->body['und'][0]['safe_value']; ?>
  </div>
  <div class="widget_2">
    <?php print $field_widget_2[0]['entity']->body['und'][0]['safe_value']; ?>
  </div>
</div>
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

  <div class="content"<?php print $content_attributes; ?>>
    <div class="right">
      <?php print render($content['body']); ?>
    </div>
    <div class="left">
      <?php print render($content['field_address']); ?>
    </div>
  </div>
</div>
<div class="widgets_bar bottom">
  <div class="widget_1">
    <?php print $field_widget_1[0]['entity']->body['und'][0]['safe_value']; ?>
  </div>
  <div class="widget_2">
    <?php print $field_widget_2[0]['entity']->body['und'][0]['safe_value']; ?>
  </div>
</div>