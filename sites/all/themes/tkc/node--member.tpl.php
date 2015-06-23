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
    <div class="right-bar">
      <?php print render($content['field_member_name']); ?>
      <?php print render($content['field_member_title']); ?>
        <?php print "<div class='field-collection-container clearfix'><div class='field field-name-field-member-tabs field-type-field-collection field-label-hidden'><div class='field-items'><div class='field-item even'><div class='field-collection-view clearfix view-mode-full'><div class='entity entity-field-collection-item field-collection-item-field-member-tabs clearfix' about='/?q=field-collection/field-member-tabs/8' typeof=''><div class='content'><div class='field field-name-field-tab-title field-type-text field-label-hidden'><div class='field-items'><div class='field-item even about'>About me</div></div></div> </div></div></div></div><div class='field-item odd active'><div class='field-collection-view clearfix view-mode-full'><div class='entity entity-field-collection-item field-collection-item-field-member-tabs clearfix' about='/?q=field-collection/field-member-tabs/9' typeof=''><div class='content'><div class='field field-name-field-tab-title field-type-text field-label-hidden'><div class='field-items'><div class='field-item even experience'>Experience</div></div></div></div></div></div></div><div class='field-item even'><div class='field-collection-view clearfix view-mode-full'><div class='entity entity-field-collection-item field-collection-item-field-member-tabs clearfix' about='/?q=field-collection/field-member-tabs/10' typeof=''><div class='content'><div class='field field-name-field-tab-title field-type-text field-label-hidden'><div class='field-items'><div class='field-item even work'>Work</div></div></div></div></div></div></div></div></div></div>"; ?>
        <?php print render($content['field_about_me']); ?>
        <?php print render($content['field_experience']); ?>
        <?php
        print "<div id='gwork_contaner'>";
        print "<div id='gwork'>";
        
        print "<ul class='content'>";
        foreach($node->field_works_reference['und'] as $key => $value){
            $nodo = node_load($node->field_works_reference['und'][$key]['nid']);
            
            print "<li class='field'><a href='/node/".drupal_get_path_alias($nodo->nid)."'>";
                    print "<div class='photo'>";
                    $urlf = custom_flickr_primaryphoto($nodo->field_flickr_set_id['und'][0]['value']);
                    print theme('imagecache_external', array('path' => $urlf, 'style_name'=> 'gallerymember'));
                    print "</div>";
                    print "<div id='photo_title'>".$nodo->title."</div>";
            print "</a></li>";
        }
        print "</ul>";
        print "<div class='page_navigation'></div>";
        print "</div>";
        print "</div>";
        ?>
        <div class="tab-content"></div>
    </div>
    <div class="left-bar">
      <?php print render($content['field_photo']); ?>
    </div>
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
      jQuery('.field-name-field-member-tabs > .field-items > .field-item').eq(1).css('display','none');
      jQuery('.field-name-field-member-tabs > .field-items > .field-item').eq(2).css('display','none');
 					
        jQuery('.field-name-field-member-tabs>.field-items>.field-item').removeClass('active');
        jQuery('.field-name-field-member-tabs> .field-items  .field-item.about').addClass('active');
        jQuery('.tab-content').html(jQuery('.field-name-field-about-me').html());
        jQuery('.tab-content').stop().css({opacity: 0}).animate({opacity: 1})
      
      jQuery('.field-name-field-member-tabs> .field-items  .field-item.experience').click(function(){
        jQuery('.tab-content').html(" ");    
        jQuery('.field-name-field-member-tabs>.field-items .field-item').removeClass('active');
        jQuery(this).addClass('active');
        jQuery('.tab-content').html(jQuery('.field-name-field-experience').html());
        jQuery('.tab-content').stop().css({opacity: 0}).animate({opacity: 1})
        
      });
  
      jQuery('.field-name-field-member-tabs> .field-items  .field-item.about').click(function(){
          
        jQuery('.field-name-field-member-tabs>.field-items .field-item').removeClass('active');
        jQuery(this).addClass('active');
        jQuery('.tab-content').html(jQuery('.field-name-field-about-me').html());
        jQuery('.tab-content').stop().css({opacity: 0}).animate({opacity: 1})
        
      }); 
      
      jQuery('.field-name-field-member-tabs> .field-items  .field-item.work').click(function(){
          
        jQuery('.field-name-field-member-tabs>.field-items .field-item').removeClass('active');
        jQuery(this).addClass('active');
        jQuery('.tab-content').html(jQuery('#gwork_contaner').html());
        jQuery('.tab-content').stop().css({opacity: 0}).animate({opacity: 1})
        jQuery('.tab-content #gwork').pajinate({items_per_page : 6});
      }); 
    
  });
</script>