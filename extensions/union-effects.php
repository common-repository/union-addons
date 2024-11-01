<?php

use Elementor\Controls_Manager;
use Elementor\Element_Base;

defined( 'ABSPATH' ) || die();

class Union_Effects {

	public static function init() {
		add_action( 'elementor/element/common/_section_style/after_section_end', [ __CLASS__, 'add_controls_section' ], 1 );
	}

	public static function add_controls_section( Element_Base $element ) {
		$element->start_controls_section(
			'_section_union_effects',
			[
				'label' => __( 'Union Effects', 'union-addons' ),
				'tab' => Controls_Manager::TAB_ADVANCED,
			]
		);


		self::union_add_loop_effects( $element );



        $element->add_control(
            'union_effects_divider_1',
            [
                'type' => Controls_Manager::DIVIDER,
            ]
        );



        self::union_add_css_transform( $element );


		$element->end_controls_section();
	}

	public static function union_add_loop_effects( Element_Base $element ) {
		$element->add_control(
			'union_loop_fx',
			[
				'label' => __( 'Loop Effects', 'union-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'frontend_available' => true,
			]
		);

		$element->add_control(
			'union_loop_fx_translate_toggle',
			[
				'label' => __( 'Translate', 'union-addons' ),
				'type' => Controls_Manager::POPOVER_TOGGLE,
				'return_value' => 'yes',
				'frontend_available' => true,
				'condition' => [
					'union_loop_fx' => 'yes',
				]
			]
		);

		$element->start_popover();

		$element->add_control(
			'union_loop_fx_translate_x',
			[
				'label' => __( 'Translate X', 'union-addons' ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'sizes' => [
						'from' => 0,
						'to' => 5,
					],
					'unit' => 'px',
				],
				'range' => [
					'px' => [
						'min' => -100,
						'max' => 100,
					]
				],
				'labels' => [
					__( 'From', 'union-addons' ),
					__( 'To', 'union-addons' ),
				],
				'scales' => 1,
				'handles' => 'range',
				'condition' => [
					'union_loop_fx_translate_toggle' => 'yes',
					'union_loop_fx' => 'yes',
				],
				'render_type' => 'none',
				'frontend_available' => true,
			]
		);

		$element->add_control(
			'union_loop_fx_translate_y',
			[
				'label' => __( 'Translate Y', 'union-addons' ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'sizes' => [
						'from' => 0,
						'to' => 5,
					],
					'unit' => 'px',
				],
				'range' => [
					'px' => [
						'min' => -100,
						'max' => 100,
					]
				],
				'labels' => [
					__( 'From', 'union-addons' ),
					__( 'To', 'union-addons' ),
				],
				'scales' => 1,
				'handles' => 'range',
				'condition' => [
					'union_loop_fx_translate_toggle' => 'yes',
					'union_loop_fx' => 'yes',
				],
				'render_type' => 'none',
				'frontend_available' => true,
			]
		);

		$element->add_control(
			'union_loop_fx_translate_duration',
			[
				'label' => __( 'Duration', 'union-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 100
					]
				],
				'default' => [
					'size' => 1000,
				],
				'condition' => [
					'union_loop_fx_translate_toggle' => 'yes',
					'union_loop_fx' => 'yes',
				],
				'render_type' => 'none',
				'frontend_available' => true,
			]
		);

		$element->add_control(
			'union_loop_fx_translate_delay',
			[
				'label' => __( 'Delay', 'union-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 5000,
						'step' => 100
					]
				],
				'condition' => [
					'union_loop_fx_translate_toggle' => 'yes',
					'union_loop_fx' => 'yes',
				],
				'render_type' => 'none',
				'frontend_available' => true,
			]
		);

		$element->end_popover();

		$element->add_control(
			'union_loop_fx_rotate_toggle',
			[
				'label' => __( 'Rotate', 'union-addons' ),
				'type' => Controls_Manager::POPOVER_TOGGLE,
				'return_value' => 'yes',
				'frontend_available' => true,
				'condition' => [
					'union_loop_fx' => 'yes',
				]
			]
		);

		$element->start_popover();

		$element->add_control(
			'union_loop_fx_rotate_x',
			[
				'label' => __( 'Rotate X', 'union-addons' ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'sizes' => [
						'from' => 0,
						'to' => 45,
					],
					'unit' => 'px',
				],
				'range' => [
					'px' => [
						'min' => -180,
						'max' => 180,
					]
				],
				'labels' => [
					__( 'From', 'union-addons' ),
					__( 'To', 'union-addons' ),
				],
				'scales' => 1,
				'handles' => 'range',
				'condition' => [
					'union_loop_fx_rotate_toggle' => 'yes',
					'union_loop_fx' => 'yes',
				],
				'render_type' => 'none',
				'frontend_available' => true,
			]
		);

		$element->add_control(
			'union_loop_fx_rotate_y',
			[
				'label' => __( 'Rotate Y', 'union-addons' ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'sizes' => [
						'from' => 0,
						'to' => 45,
					],
					'unit' => 'px',
				],
				'range' => [
					'px' => [
						'min' => -180,
						'max' => 180,
					]
				],
				'labels' => [
					__( 'From', 'union-addons' ),
					__( 'To', 'union-addons' ),
				],
				'scales' => 1,
				'handles' => 'range',
				'condition' => [
					'union_loop_fx_rotate_toggle' => 'yes',
					'union_loop_fx' => 'yes',
				],
				'render_type' => 'none',
				'frontend_available' => true,
			]
		);

		$element->add_control(
			'union_loop_fx_rotate_z',
			[
				'label' => __( 'Rotate Z', 'union-addons' ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'sizes' => [
						'from' => 0,
						'to' => 45,
					],
					'unit' => 'px',
				],
				'range' => [
					'px' => [
						'min' => -180,
						'max' => 180,
					]
				],
				'labels' => [
					__( 'From', 'union-addons' ),
					__( 'To', 'union-addons' ),
				],
				'scales' => 1,
				'handles' => 'range',
				'condition' => [
					'union_loop_fx_rotate_toggle' => 'yes',
					'union_loop_fx' => 'yes',
				],
				'render_type' => 'none',
				'frontend_available' => true,
			]
		);

		$element->add_control(
			'union_loop_fx_rotate_duration',
			[
				'label' => __( 'Duration', 'union-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 100
					]
				],
				'default' => [
					'size' => 1000,
				],
				'condition' => [
					'union_loop_fx_rotate_toggle' => 'yes',
					'union_loop_fx' => 'yes',
				],
				'render_type' => 'none',
				'frontend_available' => true,
			]
		);

		$element->add_control(
			'union_loop_fx_rotate_delay',
			[
				'label' => __( 'Delay', 'union-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 5000,
						'step' => 100
					]
				],
				'condition' => [
					'union_loop_fx_rotate_toggle' => 'yes',
					'union_loop_fx' => 'yes',
				],
				'render_type' => 'none',
				'frontend_available' => true,
			]
		);

		$element->end_popover();

		$element->add_control(
			'union_loop_fx_spin_toggle',
			[
				'label' => __( 'Spin', 'union-addons' ),
				'type' => Controls_Manager::POPOVER_TOGGLE,
				'return_value' => 'yes',
				'frontend_available' => true,
				'condition' => [
					'union_loop_fx' => 'yes',
				]
			]
		);

		$element->start_popover();

		$element->add_control(
			'union_loop_fx_spin_align',
			[
				'label' => __( 'Rotation', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'plugin-domain' ),
						'icon' => 'fa fa-arrow-left',
					],
					'right' => [
						'title' => __( 'Right', 'plugin-domain' ),
						'icon' => 'fa fa-arrow-right',
					],
				],
				'default' => 'right',
				'toggle' => true,
				'condition' => [
					'union_loop_fx_spin_toggle' => 'yes',
					'union_loop_fx' => 'yes',
				],
				'render_type' => 'none',
				'frontend_available' => true,
			]
		);

		$element->add_control(
			'union_loop_fx_spin_duration',
			[
				'label' => __( 'Duration', 'union-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 100
					]
				],
				'default' => [
					'size' => 1000,
				],
				'condition' => [
					'union_loop_fx_spin_toggle' => 'yes',
					'union_loop_fx' => 'yes',
				],
				'render_type' => 'none',
				'frontend_available' => true,
			]
		);
		
		$element->end_popover();

		$element->add_control(
			'union_loop_fx_scale_toggle',
			[
				'label' => __( 'Scale', 'union-addons' ),
				'type' => Controls_Manager::POPOVER_TOGGLE,
				'return_value' => 'yes',
				'frontend_available' => true,
				'condition' => [
					'union_loop_fx' => 'yes',
				]
			]
		);

		$element->start_popover();

		$element->add_control(
			'union_loop_fx_scale_x',
			[
				'label' => __( 'Scale X', 'union-addons' ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'sizes' => [
						'from' => 1,
						'to' => 1.2,
					],
					'unit' => 'px',
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 5,
						'step' => .1
					]
				],
				'labels' => [
					__( 'From', 'union-addons' ),
					__( 'To', 'union-addons' ),
				],
				'scales' => 1,
				'handles' => 'range',
				'condition' => [
					'union_loop_fx_scale_toggle' => 'yes',
					'union_loop_fx' => 'yes',
				],
				'render_type' => 'none',
				'frontend_available' => true,
			]
		);

		$element->add_control(
			'union_loop_fx_scale_y',
			[
				'label' => __( 'Scale Y', 'union-addons' ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'sizes' => [
						'from' => 1,
						'to' => 1.2,
					],
					'unit' => 'px',
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 5,
						'step' => .1
					]
				],
				'labels' => [
					__( 'From', 'union-addons' ),
					__( 'To', 'union-addons' ),
				],
				'scales' => 1,
				'handles' => 'range',
				'condition' => [
					'union_loop_fx_scale_toggle' => 'yes',
					'union_loop_fx' => 'yes',
				],
				'render_type' => 'none',
				'frontend_available' => true,
			]
		);

		$element->add_control(
			'union_loop_fx_scale_duration',
			[
				'label' => __( 'Duration', 'union-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 100
					]
				],
				'default' => [
					'size' => 1000,
				],
				'condition' => [
					'union_loop_fx_scale_toggle' => 'yes',
					'union_loop_fx' => 'yes',
				],
				'render_type' => 'none',
				'frontend_available' => true,
			]
		);

		$element->add_control(
			'union_loop_fx_scale_delay',
			[
				'label' => __( 'Delay', 'union-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 5000,
						'step' => 100
					]
				],
				'condition' => [
					'union_loop_fx_scale_toggle' => 'yes',
					'union_loop_fx' => 'yes',
				],
				'render_type' => 'none',
				'frontend_available' => true,
			]
		);

		$element->end_popover();
	}

	/**
	 * Register transform controls
	 *
	 * @param Element_Base $element
	 * @return void
	 */
	public static function union_add_css_transform( Element_Base $element ) {
		$element->add_control(
			'union_transform_fx',
			[
				'label' => __( 'CSS Transform', 'union-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'prefix_class' => 'union-css-transform-',
			]
		);

		$element->start_controls_tabs(
			'_tabs_union_transform',
			[
				'condition' => [
					'union_transform_fx' => 'yes',
				],
			]
		);

		$element->start_controls_tab(
			'_tabs_union_transform_normal',
			[
				'label' => __( 'Normal', 'union-addons' ),
				'condition' => [
					'union_transform_fx' => 'yes',
				],
			]
		);

		$element->add_control(
			'union_transform_fx_translate_toggle',
			[
				'label' => __( 'Translate', 'union-addons' ),
				'type' => Controls_Manager::POPOVER_TOGGLE,
				'return_value' => 'yes',
				'condition' => [
					'union_transform_fx' => 'yes',
				],
			]
		);

		$element->start_popover();

		$element->add_responsive_control(
			'union_transform_fx_translate_x',
			[
				'label' => __( 'Translate X', 'union-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
					]
				],
				'condition' => [
					'union_transform_fx_translate_toggle' => 'yes',
					'union_transform_fx' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}}' => '--union-tfx-translate-x: {{SIZE}}px;'
				],
			]
		);

		$element->add_responsive_control(
			'union_transform_fx_translate_y',
			[
				'label' => __( 'Translate Y', 'union-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
					]
				],
				'condition' => [
					'union_transform_fx_translate_toggle' => 'yes',
					'union_transform_fx' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}}' => '--union-tfx-translate-y: {{SIZE}}px;'
				],
			]
		);

		$element->end_popover();

		$element->add_control(
			'union_transform_fx_rotate_toggle',
			[
				'label' => __( 'Rotate', 'union-addons' ),
				'type' => Controls_Manager::POPOVER_TOGGLE,
				'condition' => [
					'union_transform_fx' => 'yes',
				],
			]
		);

		$element->start_popover();

		$element->add_control(
			'union_transform_fx_rotate_mode',
			[
				'label' => __( 'Mode', 'union-addons' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'compact' => [
						'title' => __( 'Compact', 'union-addons' ),
						'icon' => 'eicon-plus-circle',
					],
					'loose' => [
						'title' => __( 'Loose', 'union-addons' ),
						'icon' => 'eicon-minus-circle',
					],
				],
				'default' => 'loose',
				'toggle' => false
			]
		);

		$element->add_control(
			'union_transform_fx_rotate_hr',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$element->add_responsive_control(
			'union_transform_fx_rotate_x',
			[
				'label' => __( 'Rotate X', 'union-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => -180,
						'max' => 180,
					]
				],
				'condition' => [
					'union_transform_fx_rotate_toggle' => 'yes',
					'union_transform_fx' => 'yes',
					'union_transform_fx_rotate_mode' => 'loose'
				],
				'selectors' => [
					'{{WRAPPER}}' => '--union-tfx-rotate-x: {{SIZE}}deg;'
				],
			]
		);

		$element->add_responsive_control(
			'union_transform_fx_rotate_y',
			[
				'label' => __( 'Rotate Y', 'union-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => -180,
						'max' => 180,
					]
				],
				'condition' => [
					'union_transform_fx_rotate_toggle' => 'yes',
					'union_transform_fx' => 'yes',
					'union_transform_fx_rotate_mode' => 'loose'
				],
				'selectors' => [
					'{{WRAPPER}}' => '--union-tfx-rotate-y: {{SIZE}}deg;'
				],
			]
		);

		$element->add_responsive_control(
			'union_transform_fx_rotate_z',
			[
				'label' => __( 'Rotate (Z)', 'union-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => -180,
						'max' => 180,
					]
				],
				'condition' => [
					'union_transform_fx_rotate_toggle' => 'yes',
					'union_transform_fx' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}}' => '--union-tfx-rotate-z: {{SIZE}}deg;'
				],
			]
		);

		$element->end_popover();

		$element->add_control(
			'union_transform_fx_scale_toggle',
			[
				'label' => __( 'Scale', 'union-addons' ),
				'type' => Controls_Manager::POPOVER_TOGGLE,
				'return_value' => 'yes',
				'condition' => [
					'union_transform_fx' => 'yes',
				],
			]
		);

		$element->start_popover();

		$element->add_control(
			'union_transform_fx_scale_mode',
			[
				'label' => __( 'Mode', 'union-addons' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'compact' => [
						'title' => __( 'Compact', 'union-addons' ),
						'icon' => 'eicon-plus-circle',
					],
					'loose' => [
						'title' => __( 'Loose', 'union-addons' ),
						'icon' => 'eicon-minus-circle',
					],
				],
				'default' => 'loose',
				'toggle' => false
			]
		);

		$element->add_control(
			'union_transform_fx_scale_hr',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$element->add_responsive_control(
			'union_transform_fx_scale_x',
			[
				'label' => __( 'Scale (X)', 'union-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'default' => [
					'size' => 1
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 5,
						'step' => .1
					]
				],
				'condition' => [
					'union_transform_fx_scale_toggle' => 'yes',
					'union_transform_fx' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}}' => '--union-tfx-scale-x: {{SIZE}}; --union-tfx-scale-y: {{SIZE}};'
				],
			]
		);

		$element->add_responsive_control(
			'union_transform_fx_scale_y',
			[
				'label' => __( 'Scale Y', 'union-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'default' => [
					'size' => 1
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 5,
						'step' => .1
					]
				],
				'condition' => [
					'union_transform_fx_scale_toggle' => 'yes',
					'union_transform_fx' => 'yes',
					'union_transform_fx_scale_mode' => 'loose',
				],
				'selectors' => [
					'{{WRAPPER}}' => '--union-tfx-scale-y: {{SIZE}};'
				],
			]
		);

		$element->end_popover();

		$element->add_control(
			'union_transform_fx_skew_toggle',
			[
				'label' => __( 'Skew', 'union-addons' ),
				'type' => Controls_Manager::POPOVER_TOGGLE,
				'return_value' => 'yes',
				'condition' => [
					'union_transform_fx' => 'yes',
				],
			]
		);

		$element->start_popover();

		$element->add_responsive_control(
			'union_transform_fx_skew_x',
			[
				'label' => __( 'Skew X', 'union-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['deg'],
				'range' => [
					'px' => [
						'min' => -180,
						'max' => 180,
					]
				],
				'condition' => [
					'union_transform_fx_skew_toggle' => 'yes',
					'union_transform_fx' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}}' => '--union-tfx-skew-x: {{SIZE}}deg;'
				],
			]
		);

		$element->add_responsive_control(
			'union_transform_fx_skew_y',
			[
				'label' => __( 'Skew Y', 'union-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['deg'],
				'range' => [
					'px' => [
						'min' => -180,
						'max' => 180,
					]
				],
				'condition' => [
					'union_transform_fx_skew_toggle' => 'yes',
					'union_transform_fx' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}}' => '--union-tfx-skew-y: {{SIZE}}deg;'
				],
			]
		);

		$element->end_popover();

		$element->end_controls_tab();

		$element->start_controls_tab(
            '_tabs_union_transform_hover',
            [
				'label' => __( 'Hover', 'union-addons' ),
				'condition' => [
					'union_transform_fx' => 'yes',
				],
            ]
		);

		$element->add_control(
			'union_transform_fx_translate_toggle_hover',
			[
				'label' => __( 'Translate', 'union-addons' ),
				'type' => Controls_Manager::POPOVER_TOGGLE,
				'return_value' => 'yes',
				'condition' => [
					'union_transform_fx' => 'yes',
				],
			]
		);

		$element->start_popover();

		$element->add_responsive_control(
			'union_transform_fx_translate_x_hover',
			[
				'label' => __( 'Translate X', 'union-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
					]
				],
				'condition' => [
					'union_transform_fx_translate_toggle_hover' => 'yes',
					'union_transform_fx' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}}' => '--union-tfx-translate-x-hover: {{SIZE}}px;'
				],
			]
		);

		$element->add_responsive_control(
			'union_transform_fx_translate_y_hover',
			[
				'label' => __( 'Translate Y', 'union-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
					]
				],
				'condition' => [
					'union_transform_fx_translate_toggle_hover' => 'yes',
					'union_transform_fx' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}}' => '--union-tfx-translate-y-hover: {{SIZE}}px;'
				],
			]
		);

		$element->end_popover();

		$element->add_control(
			'union_transform_fx_rotate_toggle_hover',
			[
				'label' => __( 'Rotate', 'union-addons' ),
				'type' => Controls_Manager::POPOVER_TOGGLE,
				'condition' => [
					'union_transform_fx' => 'yes',
				],
			]
		);

		$element->start_popover();

		$element->add_control(
			'union_transform_fx_rotate_mode_hover',
			[
				'label' => __( 'Mode', 'union-addons' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'compact' => [
						'title' => __( 'Compact', 'union-addons' ),
						'icon' => 'eicon-plus-circle',
					],
					'loose' => [
						'title' => __( 'Loose', 'union-addons' ),
						'icon' => 'eicon-minus-circle',
					],
				],
				'default' => 'loose',
				'toggle' => false
			]
		);

		$element->add_control(
			'union_transform_fx_rotate_hr_hover',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$element->add_responsive_control(
			'union_transform_fx_rotate_x_hover',
			[
				'label' => __( 'Rotate X', 'union-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => -180,
						'max' => 180,
					]
				],
				'condition' => [
					'union_transform_fx_rotate_toggle_hover' => 'yes',
					'union_transform_fx' => 'yes',
					'union_transform_fx_rotate_mode_hover' => 'loose'
				],
				'selectors' => [
					'{{WRAPPER}}' => '--union-tfx-rotate-x-hover: {{SIZE}}deg;'
				],
			]
		);

		$element->add_responsive_control(
			'union_transform_fx_rotate_y_hover',
			[
				'label' => __( 'Rotate Y', 'union-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => -180,
						'max' => 180,
					]
				],
				'condition' => [
					'union_transform_fx_rotate_toggle_hover' => 'yes',
					'union_transform_fx' => 'yes',
					'union_transform_fx_rotate_mode_hover' => 'loose'
				],
				'selectors' => [
					'{{WRAPPER}}' => '--union-tfx-rotate-y-hover: {{SIZE}}deg;'
				],
			]
		);

		$element->add_responsive_control(
			'union_transform_fx_rotate_z_hover',
			[
				'label' => __( 'Rotate (Z)', 'union-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => -180,
						'max' => 180,
					]
				],
				'condition' => [
					'union_transform_fx_rotate_toggle_hover' => 'yes',
					'union_transform_fx' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}}' => '--union-tfx-rotate-z-hover: {{SIZE}}deg;'
				],
			]
		);

		$element->end_popover();

		$element->add_control(
			'union_transform_fx_scale_toggle_hover',
			[
				'label' => __( 'Scale', 'union-addons' ),
				'type' => Controls_Manager::POPOVER_TOGGLE,
				'return_value' => 'yes',
				'condition' => [
					'union_transform_fx' => 'yes',
				],
			]
		);

		$element->start_popover();

		$element->add_control(
			'union_transform_fx_scale_mode_hover',
			[
				'label' => __( 'Mode', 'union-addons' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'compact' => [
						'title' => __( 'Compact', 'union-addons' ),
						'icon' => 'eicon-plus-circle',
					],
					'loose' => [
						'title' => __( 'Loose', 'union-addons' ),
						'icon' => 'eicon-minus-circle',
					],
				],
				'default' => 'loose',
				'toggle' => false
			]
		);

		$element->add_control(
			'union_transform_fx_scale_hr_hover',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$element->add_responsive_control(
			'union_transform_fx_scale_x_hover',
			[
				'label' => __( 'Scale (X)', 'union-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'default' => [
					'size' => 1
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 5,
						'step' => .1
					]
				],
				'condition' => [
					'union_transform_fx_scale_toggle_hover' => 'yes',
					'union_transform_fx' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}}' => '--union-tfx-scale-x-hover: {{SIZE}}; --union-tfx-scale-y-hover: {{SIZE}};'
				],
			]
		);

		$element->add_responsive_control(
			'union_transform_fx_scale_y_hover',
			[
				'label' => __( 'Scale Y', 'union-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'default' => [
					'size' => 1
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 5,
						'step' => .1
					]
				],
				'condition' => [
					'union_transform_fx_scale_toggle_hover' => 'yes',
					'union_transform_fx' => 'yes',
					'union_transform_fx_scale_mode_hover' => 'loose',
				],
				'selectors' => [
					'{{WRAPPER}}' => '--union-tfx-scale-y-hover: {{SIZE}};'
				],
			]
		);

		$element->end_popover();

		$element->add_control(
			'union_transform_fx_skew_toggle_hover',
			[
				'label' => __( 'Skew', 'union-addons' ),
				'type' => Controls_Manager::POPOVER_TOGGLE,
				'return_value' => 'yes',
				'condition' => [
					'union_transform_fx' => 'yes',
				],
			]
		);

		$element->start_popover();

		$element->add_responsive_control(
			'union_transform_fx_skew_x_hover',
			[
				'label' => __( 'Skew X', 'union-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['deg'],
				'range' => [
					'px' => [
						'min' => -180,
						'max' => 180,
					]
				],
				'condition' => [
					'union_transform_fx_skew_toggle_hover' => 'yes',
					'union_transform_fx' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}}' => '--union-tfx-skew-x-hover: {{SIZE}}deg;'
				],
			]
		);

		$element->add_responsive_control(
			'union_transform_fx_skew_y_hover',
			[
				'label' => __( 'Skew Y', 'union-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['deg'],
				'range' => [
					'px' => [
						'min' => -180,
						'max' => 180,
					]
				],
				'condition' => [
					'union_transform_fx_skew_toggle_hover' => 'yes',
					'union_transform_fx' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}}' => '--union-tfx-skew-y-hover: {{SIZE}}deg;'
				],
			]
		);

		$element->end_popover();

		$element->add_control(
			'union_transform_fx_transition_duration',
			[
				'label' => __( 'Transition Duration', 'union-addons' ),
				'type' => Controls_Manager::SLIDER,
				'separator' => 'before',
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 3,
						'step' => .1,
					]
				],
				'condition' => [
					'union_transform_fx' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}}' => '--union-tfx-transition-duration: {{SIZE}}s;'
				],
			]
		);

		$element->end_controls_tab();

		$element->end_controls_tabs();
	}
}

Union_Effects::init();
