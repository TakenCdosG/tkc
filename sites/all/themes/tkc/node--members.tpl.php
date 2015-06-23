<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <!--<h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>-->
    <span <?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></span>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <div class="content"<?php print $content_attributes; ?>>
    
    <?php foreach($field_members as $member): ?>
      <div class="member">
        <a href="<?php print url('node/'.$member['entity']->nid); ?>"><h3><?php print $member['entity']->field_member_name['und'][0]['value']; ?></h3></a>
        <a href="<?php print url('node/'.$member['entity']->nid); ?>" ><?php print theme_image_style(array('style_name' =>'member_listing_photo',  'path'=>$member['entity']->field_photo['und'][0]['uri'], 'height'=>null, 'width' => null)); ?></a>
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
<script>
  jQuery(function($){
    $('.field-name-field-member-tabs>.field-items>.field-item').each(function(index){
      if(index == 0){
        $('.field-name-field-member-tabs>.field-items>.field-item').removeClass('active');
        $(this).addClass('active');
        $('.tab-content').html($('.field-name-field-tab-body',this).html());
        $('.tab-content').stop().css({opacity: 0}).animate({opacity: 1})
      }
      $(this).click(function(){
        $('.field-name-field-member-tabs>.field-items>.field-item').removeClass('active');
        $(this).addClass('active');
        $('.tab-content').html($('.field-name-field-tab-body',this).html());   
        $('.tab-content').stop().css({opacity: 0}).animate({opacity: 1})
      });
    });
  });
</script>