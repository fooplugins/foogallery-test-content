<?php
if ( isset( $_POST['foogallery_test_content_generate'] ) ) {
	if ( check_admin_referer( 'foogallery_test_content_generate', 'foogallery_test_content_generate' ) ) {

		$action  = isset( $_POST['generate'] ) ? 'generate' : 'clean';

		$gallery_data = include( FOOGALLERY_TC_PATH . 'includes/test-data-galleries.php' );

		if ( $action === 'generate' ) {

			//import all the images first, so that we can get attachment ID's
			$image_data = include( FOOGALLERY_TC_PATH . 'includes/test-data-images.php' );

			$images_imported     = 0;
			$attachment_mappings = array();

			foreach ( $image_data as $attachment_data ) {
				$result = foogallery_tc_import_attachment( $attachment_data );
				if ( $result['imported'] ) {
					$images_imported++;
				}
				$attachment_mappings[ $result['key'] ] = intval( $result['attachment_id'] );
			}

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
		} else {
			//clean all data that might have been imported previously

			$imported_galleries = get_option( 'foogallery_tc_galleries', array() );
			foreach ( $imported_galleries as $gallery_id ) {
				wp_delete_post( $gallery_id, true );
			}
			delete_option( 'foogallery_tc_galleries' );

			$imported_attachments = get_option( 'foogallery_tc_attachments', array() );
			foreach ( $imported_attachments as $attachment_id ) {
				wp_delete_attachment( $attachment_id, true );
			}
			delete_option( 'foogallery_tc_attachments' );

			$message = sprintf( __( '%s images have been deleted! %s galleries have been deleted!', 'foogallery_tc' ), count( $imported_attachments ), count( $imported_galleries ) );
		}
	}
} else {
	//initial page load
}
?>
<div>
	<h2><?php _e( 'FooGallery Test Content Generator', 'foogallery_tc' ); ?></h2>

	<div class="foogallery-help">
		<?php _e( 'You are able to generate test images and galleries that can be used to test the different FooGallery scenarios.', 'foogallery_tc' ); ?>
	</div>

	<br /><br />

	<form id="demo_content_form" method="POST">
		<?php wp_nonce_field( 'foogallery_test_content_generate', 'foogallery_test_content_generate' ); ?>
		<input type="submit" class="button button-primary" name="generate" value="<?php _e( 'Generate Test Content', 'foogallery' ); ?>">
		<input type="submit" class="button button-primary" name="clean" value="<?php _e( 'Remove All Test Content', 'foogallery' ); ?>">
	</form>
	<?php if ( isset( $message ) ) { ?>
	<p>
		<?php echo $message; ?>
	</p>
	<?php } ?>
</div>
