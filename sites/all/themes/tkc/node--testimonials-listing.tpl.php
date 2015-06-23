<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <!--<h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>-->
    <span <?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></span>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <div class="content"<?php print $content_attributes; ?>>
    
    <?php foreach($field_testimonials as $testimonial): ?>
      <div class="testitmonial">
        <h3>
        <?php print $testimonial['entity']->title; ?>
        </h3>
        <span class="city">
        <?php print $testimonial['entity']->field_testimonial_city['und'][0]['safe_value']; ?>
        </span>
        <?php print $testimonial['entity']->body['und'][0]['safe_value']; ?>
      </div>
    <?php endforeach; ?>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      //print render($content);
    ?>
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