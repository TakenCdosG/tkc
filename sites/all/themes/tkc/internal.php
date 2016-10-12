<div class="content-header">
  <?php print render($title_prefix); ?>
  <?php if($node->type !== 'news'): ?>
  <?php if ($title): ?><div class="title"><h1 class="title-wrapper" id="page-title"><?php print $title; ?></h1></div><?php endif; ?>
  <?php else: ?>
  <div class="title"><h1 class="title-wrapper" id="page-title"><?php print t('NEWS & ANNOUNCEMENTS');?></h1></div>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
</div>
<div id="content" class="column">
    <div class="section">
      <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
      <a id="main-content"></a>
      <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
      <?php print $breadcrumb; ?> 
      <?php if ($node->type == 'project_gallery' or $node->type == 'category_gallery'): ?>
      <div class="gallery_list_select">
          <div>
                <script type="text/javascript">
                    function navigateTo(sel, target, newWindow) {
                        var url = sel.options[sel.selectedIndex].value;
                        if (newWindow) {
                            window.open(url, target, '--- attributes here, see below ---');
                        } else {
                            window[target].location.href = url;
                        }
                    }
                </script>
                <select onchange="navigateTo(this, 'window', false)" name="gallery_list" form="gallery_list">         
                  <?php
                    $nodes = node_load_multiple(NULL, array("title" => "Gallery", "type" => "gallery_landing"));
                    $nodenid = current($nodes);
                    $node = node_load($nodenid->nid);
                    $nodos = $node->field_categories['und'];
                    foreach ($nodos as $nodo) {
                        //$nodeurl = url('node/'. $nodo['nid']); 
                        $title = node_load($nodo['nid']);
                        print '<option value="'.$nodeurl.'">'. $title->title .'</option>';
                    }
                  ?>  
                </select>   
          </div>
      </div>
      <?php endif; ?>
        <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
  </div>
</div> <!-- /.section, /#content -->