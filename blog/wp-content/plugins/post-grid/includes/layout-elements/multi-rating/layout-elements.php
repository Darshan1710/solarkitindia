<?php
if ( ! defined('ABSPATH')) exit;  // if direct access


add_filter('post_grid_layout_elements','post_grid_pro_multi_rating_layout_elements');

function post_grid_pro_multi_rating_layout_elements($elements_group){

    $elements_group['star_rating']['items']['multi_rating'] = array('name' =>__('Multi Rating','post-grid'));

    return $elements_group;
}


add_action('post_grid_layout_element_option_multi_rating','post_grid_layout_element_option_multi_rating');
function post_grid_layout_element_option_multi_rating($parameters){

    $settings_tabs_field = new settings_tabs_field();

    $input_name = isset($parameters['input_name']) ? $parameters['input_name'] : '{input_name}';
    $element_data = isset($parameters['element_data']) ? $parameters['element_data'] : array();
    $element_index = isset($parameters['index']) ? $parameters['index'] : '';

    $display_item = isset($element_data['display_item']) ? $element_data['display_item'] : '';
    $no_rating_results_text = isset($element_data['no_rating_results_text']) ? $element_data['no_rating_results_text'] : '';

    $color = isset($element_data['color']) ? $element_data['color'] : '';
    $font_size = isset($element_data['font_size']) ? $element_data['font_size'] : '';
    $margin = isset($element_data['margin']) ? $element_data['margin'] : '';
    $text_align = isset($element_data['text_align']) ? $element_data['text_align'] : '';

    $css = isset($element_data['css']) ? $element_data['css'] : '';
    $css_hover = isset($element_data['css_hover']) ? $element_data['css_hover'] : '';



    ?>
    <div class="item">
        <div class="element-title header ">
            <span class="remove" onclick="jQuery(this).parent().parent().remove()"><i class="fas fa-times"></i></span>
            <span class="sort"><i class="fas fa-sort"></i></span>

            <span class="expand"><?php echo __('Multi Rating','post-grid'); ?></span>
        </div>
        <div class="element-options options">

            <?php

            $args = array(
                'id'		=> 'display_item',
                'css_id'		=> $element_index.'_text_align',
                'parent' => $input_name.'[multi_rating]',
                'title'		=> __('Display item','post-grid'),
                'details'	=> __('Choose display items.','post-grid'),
                'type'		=> 'select',
                'value'		=> $display_item,
                'default'		=> 'result',
                'args'		=> array('result'=> __('Result', 'post-grid'),'rating_button'=> __('Rating button', 'post-grid'),'both'=> __('Both', 'post-grid') ),
            );

            $settings_tabs_field->generate_field($args);

            $args = array(
                'id'		=> 'no_rating_results_text',
                'css_id'		=> $element_index.'_multi_rating',
                'parent' => $input_name.'[multi_rating]',
                'title'		=> __('No rating text','post-grid'),
                'details'	=> __('Custom text.','post-grid'),
                'type'		=> 'text',
                'value'		=> $no_rating_results_text,
                'default'		=> '',
            );

            $settings_tabs_field->generate_field($args);

            $args = array(
                'id'		=> 'color',
                'css_id'		=> $element_index.'_multi_rating',
                'parent' => $input_name.'[multi_rating]',
                'title'		=> __('Color','post-grid'),
                'details'	=> __('Title text color.','post-grid'),
                'type'		=> 'colorpicker',
                'value'		=> $color,
                'default'		=> '',
            );

            $settings_tabs_field->generate_field($args);

            $args = array(
                'id'		=> 'font_size',
                'css_id'		=> $element_index.'_font_size',
                'parent' => $input_name.'[multi_rating]',
                'title'		=> __('Font size','post-grid'),
                'details'	=> __('Set font size.','post-grid'),
                'type'		=> 'text',
                'value'		=> $font_size,
                'default'		=> '',
                'placeholder'		=> '14px',
            );

            $settings_tabs_field->generate_field($args);



            $args = array(
                'id'		=> 'margin',
                'css_id'		=> $element_index.'_margin',
                'parent' => $input_name.'[multi_rating]',
                'title'		=> __('Margin','post-grid'),
                'details'	=> __('Set margin.','post-grid'),
                'type'		=> 'text',
                'value'		=> $margin,
                'default'		=> '',
                'placeholder'		=> '5px 0',
            );

            $settings_tabs_field->generate_field($args);


            $args = array(
                'id'		=> 'text_align',
                'css_id'		=> $element_index.'_text_align',
                'parent' => $input_name.'[multi_rating]',
                'title'		=> __('Text align','post-grid'),
                'details'	=> __('Choose text align.','post-grid'),
                'type'		=> 'select',
                'value'		=> $text_align,
                'default'		=> 'left',
                'args'		=> array('left'=> __('Left', 'post-grid'),'right'=> __('Right', 'post-grid'),'center'=> __('Center', 'post-grid') ),
            );

            $settings_tabs_field->generate_field($args);


            $args = array(
                'id'		=> 'css',
                'css_id'		=> $element_index.'_css',
                'parent' => $input_name.'[multi_rating]',
                'title'		=> __('Custom CSS','post-grid'),
                'details'	=> __('Set csutom CSS.','post-grid'),
                'type'		=> 'textarea',
                'value'		=> $css,
                'default'		=> '',
                'placeholder'		=> '',
            );

            $settings_tabs_field->generate_field($args);

            $args = array(
                'id'		=> 'css_hover',
                'css_id'		=> $element_index.'_css_hover',
                'parent' => $input_name.'[multi_rating]',
                'title'		=> __('Hover CSS','post-grid'),
                'details'	=> __('Set hover custom CSS.','post-grid'),
                'type'		=> 'textarea',
                'value'		=> $css_hover,
                'default'		=> '',
                'placeholder'		=> '',
            );

            $settings_tabs_field->generate_field($args);


            ob_start();
            ?>
            <textarea readonly type="text"  onclick="this.select();">.element_<?php echo esc_attr($element_index); ?>{}</textarea>
            <?php

            $html = ob_get_clean();

            $args = array(
                'id'		=> 'use_css',
                'title'		=> __('Use of CSS','post-grid'),
                'details'	=> __('Use following class selector to add custom CSS for this element.','post-grid'),
                'type'		=> 'custom_html',
                'html'		=> $html,

            );

            $settings_tabs_field->generate_field($args);

            ?>

        </div>
    </div>
    <?php

}



add_action('post_grid_layout_element_multi_rating', 'post_grid_layout_element_multi_rating');
function post_grid_layout_element_multi_rating($args){

    $element  = isset($args['element']) ? $args['element'] : array();
    $elementIndex  = isset($args['index']) ? $args['index'] : '';
    $post_id = isset($args['post_id']) ? $args['post_id'] : '';

    if(empty($post_id)) return;

    $title = get_the_title($post_id);

    $custom_class = isset($element['custom_class']) ? $element['custom_class'] : '';
    $display_item = isset($element['display_item']) ? $element['display_item'] : 'result';
    $no_rating_results_text = isset($element['no_rating_results_text']) ? $element['no_rating_results_text'] : '';


    // if(!empty($acf_value)):

    ?>
    <div class="element element_<?php echo esc_attr($elementIndex); ?> <?php echo esc_attr($custom_class); ?> multi_rating ">
        <?php
        if($display_item =='result'){
            echo do_shortcode("[mr_rating_result post_id='".esc_attr($post_id)."' no_rating_results_text='".esc_attr($no_rating_results_text)."']");

        }elseif ($display_item =='rating_button'){
            echo do_shortcode("[mr_rating_form post_id='".esc_attr($post_id)."]");

        }elseif ($display_item =='both'){
            echo do_shortcode("[mr_rating_result post_id='".esc_attr($post_id)."' no_rating_results_text='".esc_attr($no_rating_results_text)."']");
            echo do_shortcode("[mr_rating_form post_id='".esc_attr($post_id)."']");
        }

        ?>

    </div>
    <?php
    // endif;

}



add_action('post_grid_layout_element_css_multi_rating', 'post_grid_layout_element_css_multi_rating', 10);
function post_grid_layout_element_css_multi_rating($args){


    $index = isset($args['index']) ? $args['index'] : '';
    $element = isset($args['element']) ? $args['element'] : array();
    $layout_id = isset($args['layout_id']) ? $args['layout_id'] : '';

    $color = isset($element['color']) ? $element['color'] : '';
    $font_size = isset($element['font_size']) ? $element['font_size'] : '';
    $margin = isset($element['margin']) ? $element['margin'] : '';
    $text_align = isset($element['text_align']) ? $element['text_align'] : 'left';

    $css = isset($element['css']) ? $element['css'] : '';
    $css_hover = isset($element['css_hover']) ? $element['css_hover'] : '';

    ?>
    <style type="text/css">
        .layout-<?php echo esc_attr($layout_id); ?> .element_<?php echo esc_attr($index); ?>{
        <?php if(!empty($color)): ?>
            color: <?php echo esc_attr($color); ?>;
        <?php endif; ?>
        <?php if(!empty($font_size)): ?>
            font-size: <?php echo esc_attr($font_size); ?>;
        <?php endif; ?>

        <?php if(!empty($margin)): ?>
            margin: <?php echo esc_attr($margin); ?>;
        <?php endif; ?>
        <?php if(!empty($text_align)): ?>
            text-align: <?php echo esc_attr($text_align); ?>;
        <?php endif; ?>
        <?php if(!empty($css)): ?>
        <?php echo esc_attr($css); ?>
        <?php endif; ?>
        }
        <?php if(!empty($css_hover)): ?>
        .layout-<?php echo esc_attr($layout_id); ?> .element_<?php echo esc_attr($index); ?>:hover{
        <?php echo esc_attr($css_hover); ?>
        }
        <?php endif; ?>
    </style>
    <?php
}
