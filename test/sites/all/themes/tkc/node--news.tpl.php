<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="content"<?php print $content_attributes; ?>>
    <?php 
    if($field_news_photo[0]['uri']){
        print theme_image_style(array('style_name' => 'news_full_image', 'path'=>$field_news_photo[0]['uri'], 'width' => null, 'height' => null)); 
        }?>
    <div class="body-wrapper">
      <?php print render($content['field_date']); ?>
      <h1 class="title"><?php print $title; ?></h1>
      <?php print render($content['body']); ?>
      <a class="back" href="/node/23"><?php print t('< BACK TO NEWS');?></a>
    </div>
  </div>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</div>