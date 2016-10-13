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

  <div class="content bottom"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      
      print "<div id='gwork'>";
      print "<ul class='content'>";
      
      foreach ($node->field_project_galleries['und'] as $key => $value){
          
          $nodo = node_load($node->field_project_galleries['und'][$key]['nid']);
                
            print "<li class='field'><a href='/node/".drupal_get_path_alias($nodo->nid)."'>";
                    print "<div class='photo'>";
                    $url = $nodo->field_images['und'][0]['uri'];
                    print "<div class='img_container' style='background-image: url(" . file_create_url($url) . ")'></div>";
                    print "</div>";
                    print "<div id='photo_title'>".$nodo->title."</div>";
            print "</a></li>";
             
      }
      print "</ul>";
      print "</div>";
    ?>
      <div class="clearfix"></div>   
  </div>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</div>