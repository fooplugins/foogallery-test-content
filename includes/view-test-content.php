<?php

if ( isset( $_POST['foogallery_test_content_generate'] ) ) {
	if ( check_admin_referer( 'foogallery_test_content_generate', 'foogallery_test_content_generate' ) ) {

		//import all the images first, so that we can get attachment ID's
		$image_data = include( FOOGALLERY_TC_PATH . 'includes/test-data-images.php' );

		$images_imported = 0;
		$attachment_mappings = array();

		foreach ( $image_data as $attachment_data ) {
			$result = foogallery_tc_import_attachment( $attachment_data );
			if ( $result['imported'] ) {
				$images_imported++;
			}
			$attachment_mappings[ $result['key'] ] = intval( $result['attachment_id'] );
		}

		$gallery_data = include( FOOGALLERY_TC_PATH . 'includes/test-data-galleries.php' );

		$galleries_generated = 0;

		foreach ( $gallery_data as $post_data ) {
			//create the post
			$result = foogallery_tc_import_gallery( $post_data, $attachment_mappings );
			if ( $result !== false ) {
				if ( $result['imported'] ) {
					$galleries_generated++;
				}
			}
		}

		$message = sprintf( __( '%s images have been imported. %s galleries have been generated.', 'foogallery_tc' ), $images_imported, $galleries_generated );
	}
} else {
	//initial page load
}
?>
<style>
	.spinner.shown {
		display: inline !important;
		margin: 0;
	}
</style>
<div>
	<h2><?php _e( 'FooGallery Test Content Generator', 'foogallery_tc' ); ?></h2>

	<div class="foogallery-help">
		<?php _e( 'This will import images and generate test galleries that can be used to test the different FooGallery scenarios.', 'foogallery_tc' ); ?>
		<?php printf( __( 'Some test images are provided by %s', 'foogallery_tc' ), '<a href="https://pixabay.com/" target="_blank">Pixabay</a>.' ); ?>
	</div>

	<br /><br />

	<form id="demo_content_form" method="POST">
		<?php wp_nonce_field( 'foogallery_test_content_generate', 'foogallery_test_content_generate' ); ?>
		<input type="submit" class="button button-primary" name="btn_run" value="<?php _e( 'Run', 'foogallery' ); ?>">
	</form>
	<?php if ( isset( $message ) ) { ?>
	<p>
		<?php echo $message; ?>
	</p>
	<?php } ?>
</div>
