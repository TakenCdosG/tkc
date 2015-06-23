<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <!--<h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>-->
    <span <?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></span>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <div class="content"<?php print $content_attributes; ?>>
      
   <div class="content body-products"<?php print $content_attributes; ?>>
    <?php print render($content['body']); ?>
  </div>
    
    <?php foreach($field_products as $product): ?>
      <div class="product">        
        <?php $product_image_link = entity_load('field_collection_item', array($product['entity']->field_product_image_link['und'][0]['value'])); ?>
        <?php $product_image_link = $product_image_link[$product['entity']->field_product_image_link['und'][0]['value']]; ?>
        <?php if($product_image_link->field_url['und'][0]['url']): ?>
          <a target="_blank" href="<?php print $product_image_link->field_url['und'][0]['url']; ?>"> <?php print theme_image_style(array('style_name' =>'product_full_image',  'path'=>$product_image_link->field_product_image['und'][0]['uri'], 'height'=>null, 'width' => null)); ?></a>
        <?php else: ?>
          <?php print theme_image_style(array('style_name' =>'product_full_image',  'path'=>$product_image_link->field_product_image['und'][0]['uri'], 'height'=>null, 'width' => null)); ?>
        <?php endif; ?>
        <?php print $product['entity']->body['und'][0]['safe_value']; ?>
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