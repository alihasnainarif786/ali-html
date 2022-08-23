<?php
/**
 * Block Name: Image Alongside Text
 *
 * The template for displaying the custom gutenberg block named Image Alongside Text.
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package BaseTheme Package
 * @since 1.0.0
 */


// Get all the fields from ACF for this block ID

$block_fields = get_fields_escaped( $block['id'] );
// $block_fields = get_fields_escaped( $block['id'] ,'sanitize_text_field' ); // if want to remove all html


// Set the block name for it's ID & class from it's file name
$block_glide_name = $block['name'];
$block_glide_name = str_replace( 'acf/', '', $block_glide_name );

// Set the preview thumbnail for this block for gutenberg editor view.
if ( isset( $block['data']['preview_image_help'] ) ) {    /* rendering in inserter preview  */
	echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
}

// create align class ("alignwide") from block setting ("wide").
$align_class = $block['align'] ? 'align' . $block['align'] : '';

// Get the class name for the block to be used for it.
$class_name = ( isset( $block['className'] ) ) ? $block['className'] : null;

// Making the unique ID for the block.
$id = 'block-' . $block_glide_name . '-' . $block['id'];

// Making the unique ID for the block.
if ( $block['name'] ) {
	$block_name = $block['name'];
	$block_name = str_replace( '/', '-', $block_name );
	$name       = 'block-' . $block_name;
}

// Block variables

$basetheme_blk_IAST_ttl      = $block_fields['basetheme_blk_IAST_ttl'];
$basetheme_blk_IAST_txt      = $block_fields['basetheme_blk_IAST_txt'];
$basetheme_blk_IAST_var      = $block_fields['basetheme_blk_IAST_var'];
$imagebasetheme_blk_IAST_img = $block_fields['imagebasetheme_blk_IAST_img'];

$basetheme_blk_IAST_img_colleges_ = $block_fields['basetheme_blk_IAST_img_colleges_'];
$basetheme_blk_IAST_img_colleges_ = $block_fields['basetheme_blk_IAST_img_colleges_'];
$imagebasetheme_blk_IAST_imgs     = $block_fields['imagebasetheme_blk_IAST_imgs'];


// if ( $basetheme_blk_IAST_var == 'left' ) {
// $basetheme_blk_IAST_var = 'image-at-left';
// }elseif($basetheme_blk_IAST_var == 'right') {
// $basetheme_blk_IAST_var = 'image-at-right';
// }


?>
<div id="<?php echo $id; ?>"
	class="<?php echo $align_class . ' ' . $class_name . ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">
	<?php if ( $basetheme_blk_IAST_ttl ) { ?>
	<div class="image-alongside-text">
		<div class="iast-heading">
			<h1><?php echo $basetheme_blk_IAST_ttl; ?></h1>
		</div>
		<?php } ?>
		<?php if ( $basetheme_blk_IAST_txt ) { ?>
		<div class="iast-description">
			<P> <?php $basetheme_blk_IAST_txt; ?></P>
		</div>
		<?php } ?>
		<?php
		if ( $basetheme_blk_IAST_var == 'left' ) {

			?>
			<?php
			if ( $imagebasetheme_blk_IAST_imgs ) {
				?>
		<div class="fix">
				<?php
				foreach ( $imagebasetheme_blk_IAST_imgs as  $key => $fix ) {
					$key++;
					$heading = $fix['heading'];
					$text    = $fix['text'];
					$prefix  = $fix['prefix'];
					$postfix = $fix['postfix'];
					$kicker  = $fix['kicker'];
					echo $text;

					?>
					<?php if ( $heading ) { ?>
			<div class="fix-heading">
				<h3><?php echo $heading; ?></h3>
			</div>
			<?php } ?>
					<?php if ( $prefix || $postfix ) { ?>
			<div class="counter">
				<p> <?php echo $prefix . $key; ?></p>
				<p><?php echo $postfix . $key; ?></p>
			</div>
			<?php } ?>
					<?php if ( $kicker ) { ?>
			<div class="fix-detail">
				<p><?php echo $kicker; ?></p>
			</div>
						<?php
					}
				}
				?>
		</div>
		<?php } ?>
			<?php if ( $imagebasetheme_blk_IAST_img ) { ?>
		<div class="image">
				<?php echo wp_get_attachment_image( $imagebasetheme_blk_IAST_img, 'thumb_400' ); ?>
		</div>
		<br>
		<br>
		<br>
				<?php
			}
		}
		if ( $basetheme_blk_IAST_var == 'right' ) {
			if ( $basetheme_blk_IAST_img_colleges_ ) {
				foreach ( $basetheme_blk_IAST_img_colleges_ as $val ) {
					$images_colleges = $val['images_colleges'];
					?>
		<div class="image-college">
					<?php
					echo wp_get_attachment_image( $images_colleges, 'thumb_400' );

					?>
		</div>
					<?php

				}
			}
		}
		?>

	</div>
</div>
