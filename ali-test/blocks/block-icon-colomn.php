<?php
/**
 * Block Name: BlockName
 *
 * The template for displaying the custom gutenberg block named BlockName.
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package BaseTheme Package
 * @since 1.0.0
 */

// Get all the fields from ACF for this block ID
// $block_fields = get_fields( $block['id'] );
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
// $custom_field_of_block = html_entity_decode($block_fields['custom_field_of_block']); // for keeping html from input
// $custom_field_of_block = html_entity_remove($block_fields['custom_field_of_block']); // for removing html from input
$basetheme_blk_icb_ttl  = ( $block_fields['basetheme_blk_icb_ttl'] );
$basetheme_blk_icb_txt  = html_entity_decode( $block_fields['basetheme_blk_icb_txt'] );
$basetheme_blk_icb_rep  = ( $block_fields['basetheme_blk_icb_rep'] );
$basetheme_blk_icb_txt2 = ( $block_fields['basetheme_blk_icb_txt2'] );
?>
<div id="<?php echo $id; ?>"
	class="<?php echo $align_class . ' ' . $class_name . ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">




	<?php if ( $basetheme_blk_icb_ttl ) { ?>
	<div class="heading">
		<h1><?php echo $basetheme_blk_icb_ttl; ?></h1>
	</div> <?php } ?>
	<?php
	if ( $basetheme_blk_icb_txt || $basetheme_blk_icb_txt2 ) {
		;
		?>
	<div class="descrption">
		<div class="heading2">
			<h2><?php echo $basetheme_blk_icb_txt2; ?></h2>
			<div class="content">
				<p>
					<?php echo $basetheme_blk_icb_txt; ?>
				</p>
			</div>
		</div>

	</div> <?php } ?>
	<?php if ( $basetheme_blk_icb_rep ) { ?>
	<div class="blocks">
		<?php
		foreach ( $basetheme_blk_icb_rep as $value ) {
			$heading = $value['heading'];
			$text    = $value['text'];
			$icon    = $value['icon'];
			$button  = $value['button'];
			?>
		<div class="block">
			<?php if ( $icon ) { ?>
			<div class="block-logo">
				<?php echo wp_get_attachment_image( $icon, 'thumb_32_32' ); ?>
			</div><?php } ?>
			<?php if ( $heading ) { ?>
			<div class="block-heading">
				<h3><?php echo $heading; ?></h3>
			</div><?php } ?>
			<?php if ( $text ) { ?>
			<div class="block-descrition">
				<p>
					<?php echo $text; ?>
				</p>
			</div><?php } ?>
			<?php if ( $button ) { ?>
			<div class="block-btn">
				<?php
									echo glide_acf_button( $button, 'button' );

				?>
			</div>
			<?php } ?>
		</div>
		<?php } ?>
	</div>
	<?php } ?>
	<div class="detail">
		<p>
			<?php echo $basetheme_blk_icb_txt; ?>
		</p>
	</div>


</div>
