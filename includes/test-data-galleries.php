<?php

return array(
	array(
		'post_title'     => 'Test : Responsive : Basic',
		'post_status'    => 'publish',
		'post_type'      => FOOGALLERY_CPT_GALLERY,
		'items'          => array( 'logo1_png', 'logo2_png', 'logo3_png', 'logo4_png', 'logo5_png', 'logo6_jpg' ),
		'meta_input'     => array(
			FOOGALLERY_META_TEMPLATE => 'default',
			FOOGALLERY_META_SETTINGS => array(
				'foogallery_items_view'                   => 'preview',

				//General
				'default_thumbnail_dimensions'            => array(
                    'width' => '200',
                    'height' => '200'
				),
				'default_thumbnail_link' => 'image',
				'default_lightbox' => 'foogallery',
				'default_spacing' => 'fg-gutter-10',
				'default_alignment'                       => 'fg-center',

				//Appearance
				'default_theme'                           => 'fg-dark',
				'default_border_size'                     => 'fg-border-thin',
				'default_rounded_corners'                 => '',
				'default_drop_shadow'                     => 'fg-shadow-outline',
				'default_inner_shadow'                    => '',
				'default_loading_icon'                    => 'fg-loading-default',
				'default_loaded_effect'                   => 'fg-loaded-fade-in',
				'default_instagram' => '',

				//Captions
				'default_captions_type' => '',
				'default_caption_title_source'            => '',
				'default_caption_desc_source'             => '',
				'default_captions_limit_length' => '',

				'default_custom_settings'                 => '',

				'default_filtering_type'                  => '',
				'default_gutter_width'                    => '10',
				'default_hover_effect_caption_visibility' => 'fg-captions-bottom',
				'default_hover_effect_color'              => '',
				'default_hover_effect_icon'               => 'fg-hover-zoom',
				'default_hover_effect_preset'             => 'fg-custom',
				'default_hover_effect_scale'              => '',
				'default_hover_effect_transition'         => 'fg-hover-fade',

				'default_layout'                          => 'fixed',
				'default_lazyload'                        => '',


				'default_paging_type'                     => '',

				'default_state'                           => 'no',

				'default_video_autoplay'                  => 'yes',
				'default_video_hover_icon'                => 'fg-video-default',
				'default_video_size'                      => '640x360',
				'default_video_sticky_icon'               => '',
			),
		),
	),
	array(
		'post_title'     => 'Test : Responsive : Paging',
		'post_status'    => 'publish',
		'post_type'      => FOOGALLERY_CPT_GALLERY,
		'items'          => array( 'logo1_png', 'logo2_png', 'logo3_png', 'logo4_png', 'logo5_png', 'logo6_jpg' ),
		'meta_input'     => array(
			FOOGALLERY_META_TEMPLATE => 'default',
			FOOGALLERY_META_SETTINGS => array(
				'foogallery_items_view'                   => 'preview',

				//General
				'default_thumbnail_dimensions'            => array(
					'width' => '100',
					'height' => '100'
				),
				'default_thumbnail_link' => 'image',
				'default_lightbox' => 'foogallery',
				'default_spacing' => 'fg-gutter-10',
				'default_alignment'                       => 'fg-center',

				//Appearance
				'default_theme'                           => 'fg-light',
				'default_border_size'                     => 'fg-border-thin',
				'default_rounded_corners'                 => '',
				'default_drop_shadow'                     => 'fg-shadow-outline',
				'default_inner_shadow'                    => '',
				'default_loading_icon'                    => 'fg-loading-default',
				'default_loaded_effect'                   => 'fg-loaded-fade-in',
				'default_instagram' => '',

				//Captions
				'default_captions_type' => '',
				'default_caption_title_source'            => '',
				'default_caption_desc_source'             => '',
				'default_captions_limit_length' => '',

				'default_custom_settings'                 => '',

				'default_filtering_type'                  => '',
				'default_gutter_width'                    => '10',
				'default_hover_effect_caption_visibility' => 'fg-captions-bottom',
				'default_hover_effect_color'              => '',
				'default_hover_effect_icon'               => 'fg-hover-zoom',
				'default_hover_effect_preset'             => 'fg-custom',
				'default_hover_effect_scale'              => '',
				'default_hover_effect_transition'         => 'fg-hover-fade',

				'default_layout'                          => 'fixed',
				'default_lazyload'                        => '',

				'default_paging_type'                     => 'dots',
				'default_paging_size'                     => 2,

				'default_state'                           => 'no',

				'default_video_autoplay'                  => 'yes',
				'default_video_hover_icon'                => 'fg-video-default',
				'default_video_size'                      => '640x360',
				'default_video_sticky_icon'               => '',
			),
		),
	),
	array(
		'post_title'     => 'Test : Responsive : Filtering',
		'post_status'    => 'publish',
		'post_type'      => FOOGALLERY_CPT_GALLERY,
		'items'          => array( 'logo1_png', 'logo2_png', 'logo3_png', 'logo4_png', 'logo5_png', 'logo6_jpg' ),
		'meta_input'     => array(
			FOOGALLERY_META_TEMPLATE => 'default',
			FOOGALLERY_META_SETTINGS => array(
				'foogallery_items_view'                   => 'preview',

				//General
				'default_thumbnail_dimensions'            => array(
					'width' => '100',
					'height' => '100'
				),
				'default_thumbnail_link' => 'image',
				'default_lightbox' => 'foogallery',
				'default_spacing' => 'fg-gutter-10',
				'default_alignment'                       => 'fg-center',

				//Appearance
				'default_theme'                           => 'fg-light',
				'default_border_size'                     => 'fg-border-thin',
				'default_rounded_corners'                 => '',
				'default_drop_shadow'                     => 'fg-shadow-outline',
				'default_inner_shadow'                    => '',
				'default_loading_icon'                    => 'fg-loading-default',
				'default_loaded_effect'                   => 'fg-loaded-fade-in',
				'default_instagram' => '',

				//Captions
				'default_captions_type' => '',
				'default_caption_title_source'            => '',
				'default_caption_desc_source'             => '',
				'default_captions_limit_length' => '',

				'default_custom_settings'                 => '',

				'default_filtering_type'                  => 'simple',

				'default_gutter_width'                    => '10',
				'default_hover_effect_caption_visibility' => 'fg-captions-bottom',
				'default_hover_effect_color'              => '',
				'default_hover_effect_icon'               => 'fg-hover-zoom',
				'default_hover_effect_preset'             => 'fg-custom',
				'default_hover_effect_scale'              => '',
				'default_hover_effect_transition'         => 'fg-hover-fade',

				'default_layout'                          => 'fixed',
				'default_lazyload'                        => '',

				'default_paging_type'                     => '',
				'default_paging_size'                     => 2,

				'default_state'                           => 'no',

				'default_video_autoplay'                  => 'yes',
				'default_video_hover_icon'                => 'fg-video-default',
				'default_video_size'                      => '640x360',
				'default_video_sticky_icon'               => '',
			),
		),
	),
	array(
		'post_title'     => 'Test : Responsive : Paging + Filtering',
		'post_status'    => 'publish',
		'post_type'      => FOOGALLERY_CPT_GALLERY,
		'items'          => array( 'logo1_png', 'logo2_png', 'logo3_png', 'logo4_png', 'logo5_png', 'logo6_jpg' ),
		'meta_input'     => array(
			FOOGALLERY_META_TEMPLATE => 'default',
			FOOGALLERY_META_SETTINGS => array(
				'foogallery_items_view'                   => 'preview',

				//General
				'default_thumbnail_dimensions'            => array(
					'width' => '50',
					'height' => '50'
				),
				'default_thumbnail_link' => 'image',
				'default_lightbox' => 'foogallery',
				'default_spacing' => 'fg-gutter-10',
				'default_alignment'                       => 'fg-center',

				//Appearance
				'default_theme'                           => 'fg-dark',
				'default_border_size'                     => 'fg-border-thin',
				'default_rounded_corners'                 => '',
				'default_drop_shadow'                     => 'fg-shadow-outline',
				'default_inner_shadow'                    => '',
				'default_loading_icon'                    => 'fg-loading-default',
				'default_loaded_effect'                   => 'fg-loaded-fade-in',
				'default_instagram' => '',

				//Captions
				'default_captions_type' => '',
				'default_caption_title_source'            => '',
				'default_caption_desc_source'             => '',
				'default_captions_limit_length' => '',

				'default_custom_settings'                 => '',

				'default_filtering_type'                  => 'simple',

				'default_gutter_width'                    => '10',
				'default_hover_effect_caption_visibility' => 'fg-captions-bottom',
				'default_hover_effect_color'              => '',
				'default_hover_effect_icon'               => 'fg-hover-zoom',
				'default_hover_effect_preset'             => 'fg-custom',
				'default_hover_effect_scale'              => '',
				'default_hover_effect_transition'         => 'fg-hover-fade',

				'default_layout'                          => 'fixed',
				'default_lazyload'                        => '',

				'default_paging_type'                     => 'dots',
				'default_paging_size'                     => 2,

				'default_state'                           => 'no',

				'default_video_autoplay'                  => 'yes',
				'default_video_hover_icon'                => 'fg-video-default',
				'default_video_size'                      => '640x360',
				'default_video_sticky_icon'               => '',
			),
		),
	),
	array(
		'post_title'     => 'Test : EXIF',
		'post_status'    => 'publish',
		'post_type'      => FOOGALLERY_CPT_GALLERY,
		'items'          => array( 'exif-test1', 'exif-test2', 'exif-test3', 'exif-test4' ),
		'meta_input'     => array(
			FOOGALLERY_META_TEMPLATE => 'default',
			FOOGALLERY_META_SETTINGS => array(
				'foogallery_items_view'                   => 'preview',

				//General
				'default_thumbnail_dimensions'            => array(
					'width' => '150',
					'height' => '150'
				),
				'default_thumbnail_link' => 'image',
				'default_lightbox' => 'foogallery',
				'default_spacing' => 'fg-gutter-10',
				'default_alignment'                       => 'fg-center',

				//Appearance
				'default_theme'                           => 'fg-light',
				'default_border_size'                     => 'fg-border-thin',
				'default_rounded_corners'                 => '',
				'default_drop_shadow'                     => 'fg-shadow-outline',
				'default_inner_shadow'                    => '',
				'default_loading_icon'                    => 'fg-loading-default',
				'default_loaded_effect'                   => 'fg-loaded-fade-in',
				'default_instagram' => '',

				//Captions
				'default_captions_type' => '',
				'default_caption_title_source'            => '',
				'default_caption_desc_source'             => '',
				'default_captions_limit_length' => '',

				'default_custom_settings'                 => '',

				'default_filtering_type'                  => '',

				'default_gutter_width'                    => '10',
				'default_hover_effect_caption_visibility' => 'fg-captions-bottom',
				'default_hover_effect_color'              => '',
				'default_hover_effect_icon'               => 'fg-hover-zoom',
				'default_hover_effect_preset'             => 'fg-custom',
				'default_hover_effect_scale'              => '',
				'default_hover_effect_transition'         => 'fg-hover-fade',

				'default_layout'                          => 'fixed',
				'default_lazyload'                        => '',

				'default_paging_type'                     => '',
				'default_paging_size'                     => 2,

				'default_state'                           => 'no',

				'default_video_autoplay'                  => 'yes',
				'default_video_hover_icon'                => 'fg-video-default',
				'default_video_size'                      => '640x360',
				'default_video_sticky_icon'               => '',

				'default_exif_view_status' => 'yes',
				'default_exif_icon_position' => 'fg-exif-bottom-right',
				'default_exif_icon_theme' => 'fg-exif-dark'

			),
		),
	),
);