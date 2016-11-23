  <?php $node_global = node_load(3)?>
  <?php foreach($node_global->field_logos[LANGUAGE_NONE] as $logoItem){
          $logos[] = entity_load('field_collection_item', array($logoItem['value']));
        };
  ?>
  <?php $has_header_image = false; 
  $has_header_image_mobile = false; ?>
  <?php if(isset($node) && property_exists($node, 'field_header_image') && $node->field_header_image['und'][0]['uri']) $has_header_image = true;?>
<?php if(isset($node) && property_exists($node, 'field_header_image_mobile') && $node->field_header_image_mobile['und'][0]['uri']) $has_header_image_mobile = true;?>
  <div id="page-wrapper"><div id="page" class="<?php print !$has_header_image_mobile?'nohas-header-image-mobile ':''; ?>" >
      <div class="top-wrapper <?php print $has_header_image?'has-header-image ':'';  ?>">
    <div id="header"><div class="section clearfix">

      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?><div id="text_width"></div>
        <div class="header-right">
          <ul class="social-icons">
            <li class="facebook">
              <a href="<?php print $node_global->field_facebook_link[LANGUAGE_NONE][0]['url']; ?>" target="_blank">
                <img src="<?php print base_path().path_to_theme().'/images/facebook_icon.png' ?>"/>
              </a>
            </li>
              <li class="twitter">
                  <a href="<?php print $node_global->field_twitter_link[LANGUAGE_NONE][0]['url']; ?>" target="_blank">
                      <img src="<?php print base_path().path_to_theme().'/images/twitter_icon.jpg' ?>"/>
                  </a>
              </li>
            
            <li class="pinterest">
              <a href="<?php print $node_global->field_pinterest_link[LANGUAGE_NONE][0]['url']; ?>" target="_blank">
                <img src="<?php print base_path().path_to_theme().'/images/pinterest_icon.png' ?>"/>
              </a>
            </li>
            <li class="photo">
              <a href="<?php print $node_global->field_photo_link[LANGUAGE_NONE][0]['url']; ?>" target="_blank">
                <img src="<?php print base_path().path_to_theme().'/images/photo_icon.png' ?>"/>
              </a>
            </li>
            <li class="linkedin">
              <a href="<?php print $node_global->field_linkedin_link[LANGUAGE_NONE][0]['url']; ?>" target="_blank">
                <img src="<?php print base_path().path_to_theme().'/images/linkedin_icon.png' ?>"/>
              </a>
            </li>
            <li class="houzz">
              <a href="<?php print $node_global->field_houzz_link[LANGUAGE_NONE][0]['url']; ?>" target="_blank">
                <img src="<?php print base_path().path_to_theme().'/images/houzz.png' ?>"/>
              </a>
            </li>
            <li class="google_plus last">
              <a href="<?php print $node_global->field_google_plus_link[LANGUAGE_NONE][0]['url']; ?>" rel="publisher" target="_blank">
                <img src="<?php print base_path().path_to_theme().'/images/google_plus_icon.png' ?>"/>
              </a>
            </li>
          </ul>
          <div class="phone">
            <?php print $node_global->field_phone[LANGUAGE_NONE][0]['safe_value']; ?>
          </div>
          <form class="subscribe" action="http://thinkcreativegroup.createsend.com/t/y/s/cjuhld/" method="post">
              <input id="fieldEmail" name="cm-cjuhld-cjuhld" type="email" required />
              <button type="submit">Subscribe</button>
          </form>
        </div>
      <?php print render($page['header']); ?>

    </div></div> <!-- /.section, /#header -->

    <?php if ($main_menu || $secondary_menu): ?>
      <div id="navigation"><div class="section">
        <?php // print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')))); ?>
          <?php print render($main_menu_expanded); ?> 
        <?php //print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Secondary menu'))); ?>
      </div>
      <div class="hidden-menu">
        <div id="hidden-menu">
          <span class="button">MENU</span>
          <ul class="transparency">
              <?php print render($main_menu_expanded); ?> 
          </ul>
        </div>
      </div>
      </div> <!-- /.section, /#navigation -->
    <?php endif; ?>

    </div>

    <?php  if($has_header_image):?>
      <div id="header-image">
          <?php print theme('image', array('path' => $node->field_header_image['und'][0]['uri'], 'width' => null, 'height' => null)); ?>
      </div>   
     <?php endif; ?>

     
    <?php  if($has_header_image_mobile):?>
        <div id="header-image-mobile">
        <?php print theme('image', array('path' => $node->field_header_image_mobile['und'][0]['uri'], 'width' => null, 'height' => null)); ?>
        </div>
    <?php endif; ?>
      
      
    <?php print $messages; ?>
        

    <div id="main-wrapper">
        
      <div id="main" class="clearfix">
        <?php if (drupal_is_front_page()) {include('frontpage.php');} else {include('internal.php');} ?>
      </div>
        
    </div> <!-- /#main, /#main-wrapper -->

    <div id="footer" class="transparency">
      <div class="section desktop">
        <?php print $node_global->field_footer_text[LANGUAGE_NONE]['0']['safe_value']; ?>
      </div>
      <div class="section mobile">
        <?php print $node_global->field_footer_text_mobile[LANGUAGE_NONE]['0']['safe_value']; ?>
      </div>
    </div> <!-- /.section, /#footer -->

  </div>
  </div> <!-- /#page, /#page-wrapper -->
  <?php if (drupal_is_front_page()): ?>
  <div id="background-image-wrapper">
    <div id="background-image" class="fotorama2" data-width="100%" data-ratio="1280/760" data-max-width="100%" data-autoplay="true">
      <?php
        /*
          $randonnum = rand(0,count($node_global->field_backgrounds[LANGUAGE_NONE]) -1 );
          $image_back = $node_global->field_backgrounds[LANGUAGE_NONE][$randonnum]['uri'];
          print theme('image', array('path'=>$image_back, 'height' => null, 'width' => null));
        */
        $backgrounds = isset($node_global->field_backgrounds['und'])?$node_global->field_backgrounds['und']:array();
        foreach ($backgrounds as $key => $background){
          $image_back = $background['uri'];
          print theme('image', array('path'=>$image_back, 'height' => null, 'width' => null));
        }
      ?>
    </div>
  </div>
  <?php endif; ?>
  <script>
    
    jQuery('.transparency').css('opacity', 0.95);
    jQuery(function($){        
    var liwidths = [40,128,113,160,153,148,198,71];
    jQuery('#navigation .section > ul > li > a').eq(0).css('width','97px');
    jQuery('#navigation .section > ul > li > a').eq(1).css('width','82px');
    jQuery('#navigation .section > ul > li > a').eq(2).css('width','129px');
    jQuery('#navigation .section > ul > li > a').eq(3).css('width','122px');
    jQuery('#navigation .section > ul > li > a').eq(4).css('width','117px');
    jQuery('#navigation .section > ul > li > a').eq(5).css('width','167px');
    jQuery('#navigation .section > ul > li > a').eq(6).css('width','40px');
    
/*NAVIGATION*/
    function w_navigation(){
       // jQuery('.phone').text(jQuery(window).width());
        var i=2;
        var n_width = [0,0,0,0,0,0];
        
        while(i<=liwidths.length-1){
            var j=0;
            if(i<liwidths.length-1){j=1}
            while(j<=i){
            n_width[i-2] =  n_width[i-2] + liwidths[j];
            j++;
            }
            i++;
            
        }
return(n_width);
    } 
    
    function menu_resize(){
        
        /** MENU RESET  **/
         jQuery('#navigation .section > ul > li').css('display','block');
         jQuery('#navigation .section > ul > li').not('.last').find('> a').css('border-right','1px solid #BECBC8');

         

         
        var breakpoints = w_navigation();
        var w_width = jQuery(window).width();
        h = k = breakpoints.length-1;
        var b_points_state;
        
        
        /** SHOW OR HIDE ITEMS **/
        while(2<=h){
            if(breakpoints[h]>w_width){
                jQuery('#navigation .section > ul > li > a').removeClass('last');
               jQuery('#hidden-menu > ul > ul > ul > li').eq(h+1).css('display','block'); 
               jQuery('#hidden-menu > ul > ul > ul > li').eq(h).css('display','block'); 
               var fd = jQuery('#navigation .section > ul > li').eq(h+1);
               var sd = jQuery('#navigation .section > ul > li').eq(h);
                fd.css('display','none');
                sd.css('display','none');
                if(h==5){var sw = breakpoints[h]-fd.width()-sd.width()-40;}else{var sw = breakpoints[h]-fd.width()-sd.width();}
                jQuery('#navigation .section > ul > li > a').eq(h-1).css('border-right','1px solid #829c95');
                jQuery('#navigation .section > ul > li > a').eq(h-1).addClass('last');
                                 /** MENU MOBILE **/
                if(w_width<=431){
                    jQuery('#navigation .section').css('width','60%');
                    jQuery('#navigation .section > ul > li').eq(0).css('width','50%');
                    jQuery('#navigation .section > ul > li').eq(1).css('width','50%');
                    jQuery('#navigation .section > ul > li > a').eq(0).css('width','auto');
                    jQuery('#navigation .section > ul > li > a').eq(1).css('width','auto');
                    jQuery('.hidden-menu').css('width','40%');
                }else{
                    jQuery('#navigation .section > ul > li').eq(0).css('width','auto');
                    jQuery('#navigation .section > ul > li').eq(1).css('width','auto');
                    jQuery('#navigation .section > ul > li > a').eq(0).css('width','97px');
                    jQuery('#navigation .section > ul > li > a').eq(1).css('width','82px');
                    jQuery('#navigation .section').css('width',sw);
                    jQuery('#navigation .hidden-menu').css('width',w_width-sw);
                        }   
        }
            b_points_state = h;
           h--; 
        }
        /** CHECK IF IS  MENU VIEW - FULL OR NOT  **/
        if(breakpoints[k]<=w_width){
        jQuery('#navigation .section > ul > li > a').removeClass('last');
        jQuery('#navigation .section > ul.menu').css('padding-left','40px');
        jQuery('#hidden-menu').css('display','none');
        jQuery('#navigation .section').css('width','100%');
        
        jQuery('#navigation li').each(function(){
                if(jQuery(this).children('ul.menu').length > 0)
                {
                    jQuery(this).find('> a').attr('href',jQuery(this).find('li').eq(0).find('> a').attr('href'));
                }

            });
        
        }else{
            jQuery('#navigation .section > ul.menu').css('padding','0px');
            jQuery('#hidden-menu').css('display','block');  
             /** SUB MENUS  **/
            jQuery('#navigation li').each(function(){
                if(jQuery(this).children('ul.menu').length > 0)
                {
                    jQuery(this).find('> a').removeAttr('href');
                }

            });
    }
  
    
    }

    
    
     function NaviUpAll(){
         jQuery('#navigation .section > ul.menu > li').find('ul.menu').css('display','none');
         jQuery('#navigation .section > ul.menu > li').css('background-color','transparent');
         jQuery('#navigation .section > ul > li > a').not('.last').css('border-right','1px solid #BECBC8');
         jQuery('#navigation .section > ul > li.last > a').css('border-right','1px solid #829c95');
         jQuery('#navigation .section > ul > li > a.last').css('border-right','1px solid #829c95');
     }
     function MenuHideUp(){
         jQuery('#hidden-menu > ul').slideUp(500);
     }
                /** Section menu  **/
    function clickhover(){
        if(jQuery(this).find('ul.menu').is(':visible')){
          jQuery(this).find('ul.menu').css('display','none'); 
          NaviUpAll();
      }else{
        NaviUpAll();
        MenuHideUp();
        jQuery(this).find('ul.menu').css({'opacity':'0.95','height':'auto'});
        jQuery(this).find('ul.menu').css('display','block');
        jQuery(this).css('background-color','#617D75');
        jQuery(this).not('.last').find('> a').css('border-right','1px solid  #617D75');
        jQuery(this).prev().find('> a').css('border-right','1px solid  transparent');
        }
    }
    jQuery('#navigation .section > ul.menu > li').hover(clickhover);
                /** Hidden menu  **/
                
      jQuery('#hidden-menu .button').click(function(){
        if(jQuery('#hidden-menu > ul').is(':visible')) {
            MenuHideUp();
        }else {
              jQuery('#hidden-menu >ul').slideDown(500);
              NaviUpAll();
             }
      });
            jQuery('#hidden-menu  ul li').click(function(){
        if(jQuery(this).find('ul').is(':visible')) {
            jQuery(this).find('ul').css('display','none');
        }else {
              jQuery('#hidden-menu  ul li ul').css('display','none');
              jQuery(this).find('ul').css('display','block');              
             }
      });
/*END NAVIGATION MENU*/
       
      $('#footer .logo .gray-logo').css('opacity', 0.5);
      
      //FOOTER LOGOS
      $('#footer .logo').hover(function(){
        $('.gray-logo', this).stop(true, true).animate({opacity: 0});
        $('.color-logo', this).stop(true, true).fadeIn();
      }, 
      function(){
        $('.gray-logo', this).stop(true, true).animate({opacity: 0.5});
        $('.color-logo', this).stop(true, true).fadeOut();      
      });
      
      /*BACKGROUND*/
      function setBackgroundSize(){
        
        var height = $('body').outerHeight() - $('#footer').position().top;
        

        $('#background-image-wrapper').css('height', $('#page-wrapper').height());
        $('#background-image').css({position: 'relative', left: 0});       
        $('#background-image img').css({'height': 'auto', 'width': '100%'});

        if($('#background-image img').height() < $('#page').height()){
          $('#background-image img').css({'height': '100%', 'width': 'auto'});
          // $('#background-image').css({position: 'relative', left: -($('#background-image img').width()/2-$('#page-wrapper').width()/2)});
        }
     }


     /*Footer*/
     function resizeFooter(){
       $('#footer').height('auto'); 
       if($('#footer').offset().top + $('#footer').outerHeight(true) < $(window).height()){
         // $('#footer').height($(window).height()-$('#footer').offset().top);
       } else {
         
       }
     }

      
      /*HEADER IMAGE*/
      function setHeaderImageSize(){
        var $wrapper = $('#header-image');
        var $headerImg = $('#header-image img');
        var $height = $headerImg.height();

        if($height <= 555){
          $($headerImg).css({height: 365, width: 'auto'});
          difLeft = ($headerImg.width() - $wrapper.width())/2; 
          $headerImg.css({left: -difLeft});
        }
        if($wrapper.width() > $headerImg.width()){
          $($headerImg).css({height: 'auto', width: '100%'});
          $headerImg.css({left: 0});
        }
      }
      
      $(window).resize(function(){
         resizeFooter();
          setBackgroundSize();
          setHeaderImageSize();
           menu_resize();
      });
      
      $('#background-image img').load(function(){
        setBackgroundSize();
      });
        $('#header-image img').load(function(){
        setHeaderImageSize();
      });
          
     
      menu_resize();
      setBackgroundSize();
      setHeaderImageSize();
      resizeFooter();
       
      
      
    });
  </script>

  
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
