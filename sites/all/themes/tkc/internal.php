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
          <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
  </div>
</div> <!-- /.section, /#content -->