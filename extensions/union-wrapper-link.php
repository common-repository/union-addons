<?php

use Elementor\Controls_Manager;
use Elementor\Element_Base;

defined('ABSPATH') || die();

class Union_Wrapper_Link {

    public static function init() {
        add_action( 'elementor/element/column/section_advanced/after_section_end', [ __CLASS__, 'union_add_controls_section' ], 1 );
        add_action( 'elementor/element/section/section_advanced/after_section_end', [ __CLASS__, 'union_add_controls_section' ], 1 );
        add_action( 'elementor/element/common/_section_style/after_section_end', [ __CLASS__, 'union_add_controls_section' ], 1 );

        add_action( 'elementor/frontend/before_render', [ __CLASS__, 'before_section_render' ], 1 );
    }

    public static function union_add_controls_section( Element_Base $element) {
        $tabs = Controls_Manager::TAB_CONTENT;

        if ( 'section' === $element->get_name() || 'column' === $element->get_name() ) {
            $tabs = Controls_Manager::TAB_LAYOUT;
        }

        $element->start_controls_section(
            '_section_union_wrapper_link',
            [
                'label' => __( 'Union Wrapper Link', 'union-addons' ),
                'tab'   => $tabs,
            ]
        );

        $element->add_control(
            'union_element_link',
            [
                'label'       => __( 'Link', 'union-addons' ),
				'type'        => Controls_Manager::URL,
                'dynamic'     => [
                    'active' => true,
                ],
                'placeholder' => 'https://example.com',
            ]
        );

        $element->end_controls_section();
    }

    public static function before_section_render( Element_Base $element ) {
        $settings = $element->get_settings_for_display();
        $union_link  = $settings['union_element_link'];

        if ( $union_link && ! empty( $union_link['url'] ) ) {
            $element->add_render_attribute(
                '_wrapper',
                [
                    'data-union-element-link' => json_encode( $union_link ),
                    'style' => 'cursor: pointer'
                ]
            );
        }
    }
}

Union_Wrapper_Link::init();