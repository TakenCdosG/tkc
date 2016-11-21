<?php
/**
 * Override or insert variables into the node template.
 */
function tkc_preprocess_node(&$variables) {
  if ($variables['view_mode'] == 'full' && node_is_page($variables['node'])) {
    $variables['classes_array'][] = 'node-full';
  }
}

function tkc_form_comment_form_alter(&$form, &$form_state) {
  $form['comment_body']['#after_build'][] = 'politometro_customize_comment_form'; 
  $form['subject'] = null;
  $form['author']['_author'] = null;
  $form['actions']['preview'] = null;
}

function tkc_customize_comment_form(&$form) {
  $form[LANGUAGE_NONE][0]['format']['#access'] = FALSE;
  return $form;  
}

function tkc_preprocess_page(&$variables) {
  // Get the entire main menu tree
  $main_menu_tree = menu_tree_all_data('main-menu');

  // Add the rendered output to the $main_menu_expanded variable
  $variables['main_menu_expanded'] = menu_tree_output($main_menu_tree);
  
  $nid = current_node();
    
    if($nid == 31){ 
        drupal_add_js(path_to_theme()."/js/functions.js");
        
    }
  
  
}


function tkc_breadcrumb($variables) {
    
     $node = node_load(arg(1));
    
  $breadcrumb = $variables['breadcrumb'];

  if (!empty($breadcrumb)) {
    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';

    $output .= '<div class="breadcrumb">' . implode(' » ', $breadcrumb) . ' » <a href="/'.drupal_get_path_alias($node->id).'">'.$node->title.'</a></div>';
    return $output;
  }
  }
  
  
  
?>