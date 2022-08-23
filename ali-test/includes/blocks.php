<?php
/**
 * Functions for custom Gutenberg blocks
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package BaseTheme Package
 * @since 1.0.0
 */

/**
 * Register custom Gutenberg blocks
 */
add_action( 'acf/init', 'glide_theme_acf_init' );
function glide_theme_acf_init() {

	if ( function_exists( 'acf_register_block' ) ) {

		// Register a block - Spacer
		acf_register_block(
			array(
				'name'            => 'spacer',
				'title'           => __( 'Theme Spacer', 'basetheme_td' ),
				'description'     => __( 'A custom spacer block for theme.', 'basetheme_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M8 0H16V64H8V0Z" fill="#A50A09"/>
				<path d="M8 0H16V64H8V0Z" fill="#A50A09"/>
				<path d="M8 0H16V64H8V0Z" fill="#A50A09"/>
				<path d="M24 56L24 64L-3.49691e-07 64L0 56L24 56Z" fill="#A50A09"/>
				<path d="M24 56L24 64L-3.49691e-07 64L0 56L24 56Z" fill="#A50A09"/>
				<path d="M24 56L24 64L-3.49691e-07 64L0 56L24 56Z" fill="#A50A09"/>
				<path d="M24 0L24 8L-3.49691e-07 8L0 -1.04907e-06L24 0Z" fill="#A50A09"/>
				<path d="M24 0L24 8L-3.49691e-07 8L0 -1.04907e-06L24 0Z" fill="#A50A09"/>
				<path d="M24 0L24 8L-3.49691e-07 8L0 -1.04907e-06L24 0Z" fill="#A50A09"/>
				<path d="M64 0L64 4L36 4L36 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M64 0L64 4L36 4L36 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M64 0L64 4L36 4L36 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M50 16L50 20L36 20L36 16L50 16Z" fill="#A50A09"/>
				<path d="M50 16L50 20L36 20L36 16L50 16Z" fill="#A50A09"/>
				<path d="M50 16L50 20L36 20L36 16L50 16Z" fill="#A50A09"/>
				<path d="M64 8L64 12L36 12L36 8L64 8Z" fill="#A50A09"/>
				<path d="M64 8L64 12L36 12L36 8L64 8Z" fill="#A50A09"/>
				<path d="M64 8L64 12L36 12L36 8L64 8Z" fill="#A50A09"/>
				<path d="M64 44L64 48L36 48L36 44L64 44Z" fill="#A50A09"/>
				<path d="M64 44L64 48L36 48L36 44L64 44Z" fill="#A50A09"/>
				<path d="M64 44L64 48L36 48L36 44L64 44Z" fill="#A50A09"/>
				<path d="M50 60L50 64L36 64L36 60L50 60Z" fill="#A50A09"/>
				<path d="M50 60L50 64L36 64L36 60L50 60Z" fill="#A50A09"/>
				<path d="M50 60L50 64L36 64L36 60L50 60Z" fill="#A50A09"/>
				<path d="M64 52L64 56L36 56L36 52L64 52Z" fill="#A50A09"/>
				<path d="M64 52L64 56L36 56L36 52L64 52Z" fill="#A50A09"/>
				<path d="M64 52L64 56L36 56L36 52L64 52Z" fill="#A50A09"/>
				</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'Spacer Block' ),
				'align'           => 'full',
				'supports'        => array(
					'align' => array( 'full' ),
				),
			)
		);

		// Register a block - Button
		acf_register_block(
			array(
				'name'            => 'button',
				'title'           => __( 'Theme Buttons', 'basetheme_td' ),
				'description'     => __( 'A custom button block with theme styles.', 'basetheme_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M64 16L64 20L-3.73004e-07 20L0 16L64 16Z" fill="#A50A09"/>
				<path d="M64 16L64 20L-3.73004e-07 20L0 16L64 16Z" fill="#A50A09"/>
				<path d="M64 16L64 20L-3.73004e-07 20L0 16L64 16Z" fill="#A50A09"/>
				<path d="M64 8L64 12L-3.73004e-07 12L0 8L64 8Z" fill="#A50A09"/>
				<path d="M64 8L64 12L-3.73004e-07 12L0 8L64 8Z" fill="#A50A09"/>
				<path d="M64 8L64 12L-3.73004e-07 12L0 8L64 8Z" fill="#A50A09"/>
				<path d="M64 0L64 4L-3.73004e-07 4L0 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M64 0L64 4L-3.73004e-07 4L0 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M64 0L64 4L-3.73004e-07 4L0 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M64 44L64 48L-3.73004e-07 48L0 44L64 44Z" fill="#A50A09"/>
				<path d="M64 44L64 48L-3.73004e-07 48L0 44L64 44Z" fill="#A50A09"/>
				<path d="M64 44L64 48L-3.73004e-07 48L0 44L64 44Z" fill="#A50A09"/>
				<path d="M64 60L64 64L-3.73004e-07 64L0 60L64 60Z" fill="#A50A09"/>
				<path d="M64 60L64 64L-3.73004e-07 64L0 60L64 60Z" fill="#A50A09"/>
				<path d="M64 60L64 64L-3.73004e-07 64L0 60L64 60Z" fill="#A50A09"/>
				<path d="M64 52L64 56L-3.73004e-07 56L0 52L64 52Z" fill="#A50A09"/>
				<path d="M64 52L64 56L-3.73004e-07 56L0 52L64 52Z" fill="#A50A09"/>
				<path d="M64 52L64 56L-3.73004e-07 56L0 52L64 52Z" fill="#A50A09"/>
				<path d="M28 28L28 36L-7.46008e-07 36L0 28L28 28Z" fill="#A50A09"/>
				<path d="M28 28L28 36L-7.46008e-07 36L0 28L28 28Z" fill="#A50A09"/>
				<path d="M28 28L28 36L-7.46008e-07 36L0 28L28 28Z" fill="#A50A09"/>
				<path d="M64 28L64 36L36 36L36 28L64 28Z" fill="#A50A09"/>
				<path d="M64 28L64 36L36 36L36 28L64 28Z" fill="#A50A09"/>
				<path d="M64 28L64 36L36 36L36 28L64 28Z" fill="#A50A09"/>
				</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'Button' ),
				'align'           => 'wide',
				'supports'        => array(
					'align' => false,
				),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => esc_url( get_template_directory_uri() ) . '/assets/img/admin/default-block-preview.webp',
						),
					),
				),
			)
		);

		// Register a block - ACFBlock
		acf_register_block(
			array(
				'name'            => 'acfblock',
				'title'           => __( 'ACFBlock', 'basetheme_td' ),
				'description'     => __( 'A custom ACFBlock.', 'basetheme_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => 'images-alt2',
				'mode'            => 'edit',
				'keywords'        => array( 'ACFBlock' ),
				'align'           => 'wide',
				// calling assets js,css
				'enqueue_assets'  => function() {
					wp_enqueue_script( 'block-testimonial', get_template_directory_uri() . '/scripts/jquery.cycle2.min.js', array( 'jquery' ), '', true );
				},
				'supports'        => array(
					'align' => false,
				),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/default-block-preview.webp',
						),
					),
				),
			)
		);

		// Register a block - ACFBlock
		acf_register_block(
			array(
				'name'            => 'image-alongside-text',
				'title'           => __( 'Image Alongside Text', 'basetheme_td' ),
				'description'     => __( 'A custom image alongside text.', 'basetheme_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M60 40H40V60H60V40ZM36 36V64H64V36H36Z" fill="#A50A09"/>
				<path d="M46.0714 48L40 56.2143V60H60V56.5714L56.0714 51.9286L52.8571 55.5L46.0714 48Z" fill="#A50A09"/>
				<path d="M56 45.5C56 46.8807 54.8807 48 53.5 48C52.1193 48 51 46.8807 51 45.5C51 44.1193 52.1193 43 53.5 43C54.8807 43 56 44.1193 56 45.5Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M24 4H4V24H24V4ZM0 0V28H28V0H0Z" fill="#A50A09"/>
				<path d="M10.0714 12L4 20.2143V24H24V20.5714L20.0714 15.9286L16.8571 19.5L10.0714 12Z" fill="#A50A09"/>
				<path d="M22 9.5C22 10.8807 20.8807 12 19.5 12C18.1193 12 17 10.8807 17 9.5C17 8.11929 18.1193 7 19.5 7C20.8807 7 22 8.11929 22 9.5Z" fill="#A50A09"/>
				</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'image', 'along', 'side', 'text' ),
				'align'           => 'wide',
				'supports'        => array(
					'align' => false,
				),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/default-block-preview.webp',
						),
					),
				),
			)
		);

		// Register a block -  Image Along Text
		acf_register_block(
			array(
				'name'            => 'image-alongside-text',
				'title'           => __( 'Image Alongside Text', 'basetheme_td' ),
				'description'     => __( 'A custom image alongside text.', 'basetheme_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M42 4H22V24H42V4ZM18 0V28H46V0H18Z" fill="#862633"/>
<path d="M28.0714 12L22 20.2143V24H42V20.5714L38.0714 15.9286L34.8571 19.5L28.0714 12Z" fill="#862633"/>
<path d="M40 9.5C40 10.8807 38.8807 12 37.5 12C36.1193 12 35 10.8807 35 9.5C35 8.11929 36.1193 7 37.5 7C38.8807 7 40 8.11929 40 9.5Z" fill="#862633"/>
<path d="M64 36.0001L64 48.0001L-4.89568e-07 48.0001L0 36.0001L64 36.0001Z" fill="#862633"/>
<path d="M64 36.0001L64 48.0001L-4.89568e-07 48.0001L0 36.0001L64 36.0001Z" fill="#862633"/>
<path d="M64 36.0001L64 48.0001L-4.89568e-07 48.0001L0 36.0001L64 36.0001Z" fill="#862633"/>
<path d="M46 60.0001L46 64.0001L18 64.0001L18 60.0001L46 60.0001Z" fill="#862633"/>
<path d="M46 60.0001L46 64.0001L18 64.0001L18 60.0001L46 60.0001Z" fill="#862633"/>
<path d="M46 60.0001L46 64.0001L18 64.0001L18 60.0001L46 60.0001Z" fill="#862633"/>
<path d="M46 52.0001L46 56.0001L18 56.0001L18 52.0001L46 52.0001Z" fill="#862633"/>
<path d="M46 52.0001L46 56.0001L18 56.0001L18 52.0001L46 52.0001Z" fill="#862633"/>
<path d="M46 52.0001L46 56.0001L18 56.0001L18 52.0001L46 52.0001Z" fill="#862633"/>
</svg>
',
				'mode'            => 'edit',
				'keywords'        => array( 'image', 'along', 'side', 'text' ),
				'align'           => 'wide',
				'supports'        => array(
					'align' => false,
				),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/default-block-preview.webp',
						),
					),
				),
			)
		);

		// Register a block - ACFBlock
		acf_register_block(
			array(
				'name'            => 'image-alongside-text',
				'title'           => __( 'Image Alongside Text', 'basetheme_td' ),
				'description'     => __( 'A custom image alongside text.', 'basetheme_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M60 40H40V60H60V40ZM36 36V64H64V36H36Z" fill="#A50A09"/>
				<path d="M46.0714 48L40 56.2143V60H60V56.5714L56.0714 51.9286L52.8571 55.5L46.0714 48Z" fill="#A50A09"/>
				<path d="M56 45.5C56 46.8807 54.8807 48 53.5 48C52.1193 48 51 46.8807 51 45.5C51 44.1193 52.1193 43 53.5 43C54.8807 43 56 44.1193 56 45.5Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M24 4H4V24H24V4ZM0 0V28H28V0H0Z" fill="#A50A09"/>
				<path d="M10.0714 12L4 20.2143V24H24V20.5714L20.0714 15.9286L16.8571 19.5L10.0714 12Z" fill="#A50A09"/>
				<path d="M22 9.5C22 10.8807 20.8807 12 19.5 12C18.1193 12 17 10.8807 17 9.5C17 8.11929 18.1193 7 19.5 7C20.8807 7 22 8.11929 22 9.5Z" fill="#A50A09"/>
				</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'image', 'along', 'side', 'text' ),
				'align'           => 'wide',
				'supports'        => array(
					'align' => false,
				),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/default-block-preview.webp',
						),
					),
				),
			)
		);
		// Register a block - icon-list.
		acf_register_block(
			array(
				'name'            => 'iconlist',
				'title'           => __( 'Icon List', 'basetheme_td' ),
				'description'     => __( 'A custom icon list.', 'basetheme_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M60 4H40V24H60V4ZM36 0V28H64V0H36Z" fill="#862633"/>
				<path d="M46.0714 12L40 20.2143V24H60V20.5714L56.0714 15.9286L52.8571 19.5L46.0714 12Z" fill="#862633"/>
				<path d="M56 9.5C56 10.8807 54.8807 12 53.5 12C52.1193 12 51 10.8807 51 9.5C51 8.11929 52.1193 7 53.5 7C54.8807 7 56 8.11929 56 9.5Z" fill="#862633"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M24 4H4V24H24V4ZM0 0V28H28V0H0Z" fill="#862633"/>
				<path d="M10.0714 12L4 20.2143V24H24V20.5714L20.0714 15.9286L16.8571 19.5L10.0714 12Z" fill="#862633"/>
				<path d="M22 9.5C22 10.8807 20.8807 12 19.5 12C18.1193 12 17 10.8807 17 9.5C17 8.11929 18.1193 7 19.5 7C20.8807 7 22 8.11929 22 9.5Z" fill="#862633"/>
				<path d="M28 36L28 40L-1.63189e-07 40L0 36L28 36Z" fill="#862633"/>
				<path d="M28 36L28 40L-1.63189e-07 40L0 36L28 36Z" fill="#862633"/>
				<path d="M28 36L28 40L-1.63189e-07 40L0 36L28 36Z" fill="#862633"/>
				<path d="M64 36L64 40L36 40L36 36L64 36Z" fill="#862633"/>
				<path d="M64 36L64 40L36 40L36 36L64 36Z" fill="#862633"/>
				<path d="M64 36L64 40L36 40L36 36L64 36Z" fill="#862633"/>
				<path d="M24 56L24 64L16 64L16 56L24 56Z" fill="#862633"/>
				<path d="M24 56L24 64L16 64L16 56L24 56Z" fill="#862633"/>
				<path d="M24 56L24 64L16 64L16 56L24 56Z" fill="#862633"/>
				<path d="M48 56L48 64L40 64L40 56L48 56Z" fill="#862633"/>
				<path d="M48 56L48 64L40 64L40 56L48 56Z" fill="#862633"/>
				<path d="M48 56L48 64L40 64L40 56L48 56Z" fill="#862633"/>
				<path d="M36 56L36 64L28 64L28 56L36 56Z" fill="#862633"/>
				<path d="M36 56L36 64L28 64L28 56L36 56Z" fill="#862633"/>
				<path d="M36 56L36 64L28 64L28 56L36 56Z" fill="#862633"/>
				</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'icons', 'lists' ),
				'align'           => 'wide',
				'supports'        => array(
					'align' => false,
				),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/default-block-preview.webp',
						),
					),
				),
			)
		);

		// Register a block - icon-coloum.
		acf_register_block(
			array(
				'name'            => 'icon-colomn',
				'title'           => __( 'Icon Coloumn', 'basetheme_td' ),
				'description'     => __( 'A custom icon Coloums', 'basetheme_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M60 4H40V24H60V4ZM36 0V28H64V0H36Z" fill="#862633"/>
<path d="M46.0714 12L40 20.2143V24H60V20.5714L56.0714 15.9286L52.8571 19.5L46.0714 12Z" fill="#862633"/>
<path d="M56 9.5C56 10.8807 54.8807 12 53.5 12C52.1193 12 51 10.8807 51 9.5C51 8.11929 52.1193 7 53.5 7C54.8807 7 56 8.11929 56 9.5Z" fill="#862633"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M24 4H4V24H24V4ZM0 0V28H28V0H0Z" fill="#862633"/>
<path d="M10.0714 12L4 20.2143V24H24V20.5714L20.0714 15.9286L16.8571 19.5L10.0714 12Z" fill="#862633"/>
<path d="M22 9.5C22 10.8807 20.8807 12 19.5 12C18.1193 12 17 10.8807 17 9.5C17 8.11929 18.1193 7 19.5 7C20.8807 7 22 8.11929 22 9.5Z" fill="#862633"/>
<path d="M28 36L28 40L-1.63189e-07 40L0 36L28 36Z" fill="#862633"/>
<path d="M28 36L28 40L-1.63189e-07 40L0 36L28 36Z" fill="#862633"/>
<path d="M28 36L28 40L-1.63189e-07 40L0 36L28 36Z" fill="#862633"/>
<path d="M64 36L64 40L36 40L36 36L64 36Z" fill="#862633"/>
<path d="M64 36L64 40L36 40L36 36L64 36Z" fill="#862633"/>
<path d="M64 36L64 40L36 40L36 36L64 36Z" fill="#862633"/>
<path d="M24 56L24 64L16 64L16 56L24 56Z" fill="#862633"/>
<path d="M24 56L24 64L16 64L16 56L24 56Z" fill="#862633"/>
<path d="M24 56L24 64L16 64L16 56L24 56Z" fill="#862633"/>
<path d="M48 56L48 64L40 64L40 56L48 56Z" fill="#862633"/>
<path d="M48 56L48 64L40 64L40 56L48 56Z" fill="#862633"/>
<path d="M48 56L48 64L40 64L40 56L48 56Z" fill="#862633"/>
<path d="M36 56L36 64L28 64L28 56L36 56Z" fill="#862633"/>
<path d="M36 56L36 64L28 64L28 56L36 56Z" fill="#862633"/>
<path d="M36 56L36 64L28 64L28 56L36 56Z" fill="#862633"/>
</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'icon', 'coloums' ),
				'align'           => 'wide',
				'supports'        => array(
					'align' => false,
				),
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri() . '/assets/img/admin/default-block-preview.webp',
						),
					),
				),
			)
		);

	}
}
