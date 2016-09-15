<div class="widgets_bar top">
  <div class="widget_1">
    <?php print $field_widget_1[0]['entity']->body['und'][0]['safe_value']; ?>
  </div>
  <div class="widget_2">
    <?php print $field_widget_2[0]['entity']->body['und'][0]['safe_value']; ?>
  </div>
</div>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <?php if($field_widgets_position[0]['value'] == 'right'):?>
  <div class="widgets_bar right">
    <div class="widget_1">
      <?php print $field_widget_1[0]['entity']->body['und'][0]['safe_value']; ?>
    </div>
    <div class="widget_2">
      <?php print $field_widget_2[0]['entity']->body['und'][0]['safe_value']; ?>
    </div>
  </div>
  <?php endif; ?>
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
<?php 
if(!empty($node->field_image_content) && $node->field_image_content_lightbox['und'][0]['value'] == 'yes'){
    print "<div id='image_content'>";
    print "<a href='".file_create_url($node->field_image_content['und'][0]['uri'])."' class='fancybox'>".theme_image_style(array('style_name' =>'image_content','path'=>$node->field_image_content['und'][0]['uri'],'alt'=>$node->field_image_content['und'][0]['alt'],'title'=>$node->field_image_content['und'][0]['title'], 'height'=>NULL, 'width' => NULL))."</a>";
    print "</div>";
} 
elseif(!empty($node->field_image_content)){
        print "<div id='image_content'>";
    print theme_image_style(array('style_name' =>'image_content','path'=>$node->field_image_content['und'][0]['uri'],'alt'=>$node->field_image_content['und'][0]['alt'],'title'=>$node->field_image_content['und'][0]['title'], 'height'=>NULL, 'width' => NULL));
    print "</div>";
}
?>
<script>
    jQuery('.fancybox').fancybox();
</script>

  <div class="content"<?php print $content_attributes; ?>>
    <?php print render($content['body']); ?>
  </div>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</div>
<?php if($field_widgets_position[0]['value'] == 'bottom'):?>
<div class="widgets_bar bottom">
  <div class="widget_1">
    <?php print $field_widget_1[0]['entity']->body['und'][0]['safe_value']; ?>
  </div>
  <div class="widget_2">
    <?php print $field_widget_2[0]['entity']->body['und'][0]['safe_value']; ?>
  </div>
</div>
<?php endif; ?>

<!-- Google Code for Contact Us Form Conversion Page -->
<script type="text/javascript">
  /* <![CDATA[ */
var google_conversion_id = 875165629;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "JH0bCOvviGoQve-noQM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/875165629/?label=JH0bCOvviGoQve-noQM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>