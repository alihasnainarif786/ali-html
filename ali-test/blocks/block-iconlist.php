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
 $basetheme_blk_il_ttl   = ( $block_fields['basetheme_blk_il_ttl'] );
 $basetheme_blk_IAST_rep = ( $block_fields['basetheme_blk_IAST_rep'] );

?>
<div id="<?php echo $id; ?>"
	class="<?php echo $align_class . ' ' . $class_name . ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">

	<?php if ( $basetheme_blk_il_ttl ) { ?>
	<div class="title">
		<h1><?php echo $basetheme_blk_il_ttl; ?></h1>
		<?php if ( $basetheme_blk_IAST_rep ) { ?>
		<div class="block-icions">
			<?php
			foreach ( $basetheme_blk_IAST_rep as  $icions ) {
				$heading = $icions['heading'];
				$icons   = $icions['icons'];
				?>
				<?php if ( $heading ) { ?>
			<div class="heading-logo">
				<h2><?php echo $heading; ?></h2>
			</div> <?php } ?>
				<?php if ( $icons ) { ?>
					<?php
					foreach ( $icons as $icon ) {
						$image  = $icon['image'];
						$kicker = $icon['kicker'];
						?>
						<?php if ( $image ) { ?>
			<div class="socialmedia-logo">
							<?php echo wp_get_attachment_image( $image, 'thumb_300' ); ?>
				<div class="kikker">
					<p><?php echo $kicker; ?></p>
				</div>
				<?php	} ?>
				<?php	} ?>
				<?php	} ?>
			</div>

		</div>
		<?php } ?>
	</div>
	<?php } ?>
	<?php } ?>
</div>
