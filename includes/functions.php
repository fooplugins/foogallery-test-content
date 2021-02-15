<?php

function foogallery_tc_import_gallery( $gallery_data, $attachment_mappings ) {
	$search_args = array(
		'title'  => $gallery_data['post_title'],
		'numberposts' => 1,
		'post_type'   => FOOGALLERY_CPT_GALLERY,
	);

	$items = $gallery_data['items'];
	unset( $gallery_data['items'] );

	$galleries = get_posts( $search_args );

	if ( $galleries ) {
		$gallery_id = $galleries[0]->ID;
		$imported = false;
	} else {
		$gallery_id = wp_insert_post( $gallery_data, true );
		$imported = true;
	}

	if ( !is_wp_error( $gallery_id ) ) {

		$attachments = array();

		//get the attachment ID's and set the attachment metadata
		foreach ( $items as $item ) {
			if ( array_key_exists( $item, $attachment_mappings ) ) {
				$attachments[] = $attachment_mappings[ $item ];
			}
		}

		update_post_meta( $gallery_id, FOOGALLERY_META_ATTACHMENTS, $attachments );

		return array(
			'id' => $gallery_id,
			'imported' => $imported
		);
	}

	return false;
}

function foogallery_tc_import_attachment( $attachment ) {

	$imported_attachments = get_option( 'foogallery_tc_attachments', array() );

	//check to see if the image has already been imported
	if ( array_key_exists( $attachment['key'], $imported_attachments ) ) {
		return array(
			'key' => $attachment['key'],
			'attachment_id' => $imported_attachments[ $attachment['key'] ],
			'imported' => false
		);
	}

	// Include image.php so we can call wp_generate_attachment_metadata()
	require_once( ABSPATH . 'wp-admin/includes/image.php' );

	// Get the contents of the picture
	$response = wp_remote_get( $attachment['url'] );
	$contents = wp_remote_retrieve_body( $response );

	// Upload and get file data
	$upload    = wp_upload_bits( basename( $attachment['url'] ), null, $contents );
	$guid      = $upload['url'];
	$file      = $upload['file'];
	$file_type = wp_check_filetype( basename( $file ), null );

	// Create attachment
	$attachment_args = array(
		'ID'             => 0,
		'guid'           => $guid,
		'post_title'     => $attachment['title'],
		'post_excerpt'   => $attachment['caption'],
		'post_content'   => $attachment['desc'],
		'post_date'      => '',
		'post_mime_type' => isset( $attachment['mime_type'] ) ? $attachment['mime_type'] : $file_type['type'],
	);

	if ( isset( $attachment['alt'] ) ) {
		$attachment_args['meta_input'] = array(
			'_wp_attachment_image_alt' => $attachment['alt']
		);
	}

	// Insert the attachment
	$attachment_id   = wp_insert_attachment( $attachment_args, $file, 0 );
	$attachment_data = wp_generate_attachment_metadata( $attachment_id, $file );
	wp_update_attachment_metadata( $attachment_id, $attachment_data );

	if ( isset( $attachment['tags'] ) ) {
		// Save tags
		wp_set_object_terms( $attachment_id, $attachment['tags'], FOOGALLERY_ATTACHMENT_TAXONOMY_TAG, false );
	}

	if ( isset( $attachment['categories'] ) ) {
		// Save categories
		wp_set_object_terms( $attachment_id, $attachment['categories'], FOOGALLERY_ATTACHMENT_TAXONOMY_CATEGORY, false );
	}

	$imported_attachments[$attachment['key']] = $attachment_id;

	update_option( 'foogallery_tc_attachments', $imported_attachments );

	return array(
		'key' => $attachment['key'],
		'attachment_id' => $attachment_id,
		'imported' => true
	);
}