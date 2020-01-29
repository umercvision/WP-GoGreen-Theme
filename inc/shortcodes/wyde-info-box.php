<?php
/***************************************** 
/* INFO BOX
/*****************************************/
$icon_picker_options = apply_filters('wyde_iconpicker_options', array());

vc_map( array(
        'name' => esc_html__('Info Box', 'gogreen'),
        'description' => esc_html__('Content box with icon.', 'gogreen'),
        'base' => 'wyde_info_box',
        'controls' => 'full',
        'icon' =>  'wyde-icon info-box-icon', 
        'weight'    => 900,
        'category' => esc_html__('Wyde', 'gogreen'),
        'params' => array(
                array(
                    'param_name' => 'title',
                    'type' => 'textfield',                    
                    'heading' => esc_html__('Title', 'gogreen'),                    
                    'admin_label' => true, 
                    'description' => esc_html__('Set info box title.', 'gogreen')
                ),
                array(
                    'param_name' => 'content',
                    'type' => 'textarea_html',
                    'heading' => esc_html__('Content', 'gogreen'),                    
                    'description' => esc_html__('Enter your content.', 'gogreen')
                ),
                $icon_picker_options[0],
                $icon_picker_options[1],
                $icon_picker_options[2],
                $icon_picker_options[3],
                $icon_picker_options[4],
                $icon_picker_options[5],                
                array(
                    'param_name' => 'icon_size',
                    'type' => 'dropdown',
                    'heading' => esc_html__('Icon Size', 'gogreen'),                    
                    'value' => array(
                        esc_html__('Small', 'gogreen') => 'small', 
                        esc_html__('Medium', 'gogreen') => 'medium', 
                        esc_html__('Large', 'gogreen') => 'large'
                    ),
                    'description' => esc_html__('Select icon size.', 'gogreen')
                ),
                array(
                    'param_name' => 'icon_position',
                    'type' => 'dropdown',
                    'heading' => esc_html__('Icon Position', 'gogreen'),                    
                    'value' => array(
                        esc_html__('Top', 'gogreen') => 'top', 
                        esc_html__('Left', 'gogreen') => 'left', 
                        esc_html__('Right', 'gogreen') => 'right', 
                    ),
                    'description' => esc_html__('Select icon position.', 'gogreen'),
                    'dependency' => array(
		                'element' => 'icon_size',
		                'value' => array('small', 'medium')
	                )
                ),
                array(
                    'param_name' => 'icon_style',
                    'type' => 'dropdown',
                    'heading' => esc_html__('Border Style', 'gogreen'),                    
                    'value' => array(
                        esc_html__('None', 'gogreen') => 'none', 
                        esc_html__('Circle', 'gogreen') => 'circle', 
                    ),
                    'description' => esc_html__('Select icon border style.', 'gogreen'),
                    'dependency' => array(
		                'element' => 'icon_size',
		                'value' => array('small', 'medium')
	                )
                ),
                array(
                    'param_name' => 'color',
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Color', 'gogreen'),                    
                    'value' => '',
                    'description' => esc_html__('Select an icon color.', 'gogreen')
                ),
                array(
                    'param_name' => 'link',
			        'type' => 'vc_link',
			        'heading' => esc_html__( 'URL (Link)', 'gogreen' ),			        
			        'description' => esc_html__( 'Set a Read More link.', 'gogreen' )
		        ),
                array(
                    'param_name' => 'animation',
                    'type' => 'wyde_animation',
                    'heading' => esc_html__('Animation', 'gogreen'),                    
                    'description' => esc_html__('Select a CSS3 Animation that applies to this element.', 'gogreen')
                ),
                array(
                    'param_name' => 'animation_delay',
                    'type' => 'textfield',
                    'heading' => esc_html__('Animation Delay', 'gogreen'),                
                    'description' => esc_html__('Defines when the animation will start (in seconds). Example: 0.5, 1, 2, ...', 'gogreen'),
                    'dependency' => array(
		                'element' => 'animation',
		                'not_empty' => true
	                )
                ),
		        array(
                    'param_name' => 'el_class',
			        'type' => 'textfield',
			        'heading' => esc_html__( 'Extra CSS Class', 'gogreen' ),			        
			        'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'gogreen' )
		        ),
		        array(
                    'param_name' => 'css',
			        'type' => 'css_editor',
			        'heading' => esc_html__( 'CSS', 'gogreen' ),			        
			        'group' => esc_html__( 'Design Options', 'gogreen' )
		        )
    )
) );