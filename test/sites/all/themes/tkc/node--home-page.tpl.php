<?php $left_tab = $node->field_tab_left['und'][0]['entity']; ?>
<?php $center_tab = $node->field_tab_center['und'][0]['entity']; ?>
<?php $right_tab = $node->field_tab_right['und'][0]['entity']; ?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

    <?php print $user_picture; ?>

    <?php print render($title_prefix); ?>
    <?php if (!$page): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>
    <?php print render($title_suffix); ?>

    <div class="home-tabs">
     
    </div>
    <div class="content transparency"<?php print $content_attributes; ?>>
        <div class="image_print">
            <?php
            $background = '/sites/default/files/' . $field_background_image->field_background_image['und'][0]['filename'];
            print "<img typeof='foaf:Image' src='$background' width='330' height='246' alt='background'>";
            ?>
        </div>
        <?php
        print render($content['body']);
        ?>
        <div class="widgets_bar">
            <div class="widget_1">
                <?php print $field_widget_1[0]['entity']->body['und'][0]['safe_value']; ?>
            </div>
            <div class="widget_2">
                <?php print $field_widget_2[0]['entity']->body['und'][0]['safe_value']; ?>
            </div>
        </div>
    </div>
</div>
<script>
    jQuery(function ($) {

        $('.home-tabs .tab').each(function () {
            var $center = $('<div class="center"></div>');
//      $center.append($(this).children());
//      $(this).append($center);
            $(this).children().wrapAll('<div class="center"></div>');
            $(this).prepend('<div class="top"><div class="top-left"></div><div class="top-center"></div><div class="top-right"></div></div>');
            $(this).append('<div class="bottom"></div>');
        });

        $('.home-tabs .tab .title').toggle(
                function () {
                    var tab = $(this).parent().parent().get(0);
                    var $content = $('.tab-content', tab);
                    $content.show();
                    $content.data('oHeight', $content.height())
                            .css('height', 'auto')
                            .data('nHeight', $content.height())
                            .height($content.data('oHeight'));
                    $('.tab-content', tab).stop().animate({height: $('.tab-content', tab).data('nHeight'), opacity: 1}, 500);
                },
                function () {
                    var tab = $(this).parent().parent().get(0);
                    $('.tab-content', tab).stop().animate({height: 0, opacity: 0}, 500, 'swing', function () {
                        $(this).hide();
                    });
                }
        );
    });
</script>