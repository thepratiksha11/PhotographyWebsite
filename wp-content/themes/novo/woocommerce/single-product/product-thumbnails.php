<?php
/**
 * Single Product Thumbnails
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-thumbnails.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     4.2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $post, $product, $woocommerce;

$attachment_ids = $product->get_gallery_image_ids();

if ( $attachment_ids ) {
	$loop 		= 0;
	$columns 	= 4;
	?>
	<div class="thumbnails <?php echo 'columns-' . $columns; ?>"><?php

		if(function_exists('get_field') && get_field('product_video_url') && class_exists('VideoUrlParser')) {
			echo '<a class="" href="#" data-type="video" data-size="960x640" data-video="<div class=&quot;wrapper&quot;><div class=&quot;video-wrapper&quot;><iframe class=&quot;pswp__video&quot; width=&quot;1920&quot; height=&quot;1080&quot; src=&quot;'.VideoUrlParser::get_url_embed(get_field('product_video_url')).'&amp;controls=0&amp;showinfo=0&quot; frameborder=&quot;0&quot; allowfullscreen></iframe></div></div>"><span style="background-image: url('.VideoUrlParser::get_cover(get_field('product_video_url')).');"></span><i class="music-and-multimedia-play-button"></i></a>';
		}

		foreach ( $attachment_ids as $attachment_id ) {

			$classes = array( 'zoom' );

			if ( ( $loop + 1 ) % $columns === 0 ) {
				$classes[] = 'last';
			}

			$image_class = implode( ' ', $classes );
			$props       = wc_get_product_attachment_props( $attachment_id, $post );

			if ( ! $props['url'] ) {
				continue;
			}

			$image_array = wp_get_attachment_image_src( $attachment_id , 'full' );

			echo apply_filters(
				'woocommerce_single_product_image_thumbnail_html',
				sprintf(
					'<a href="%s" class="%s" title="%s" data-size="%s"><span style="background-image: url(%s)"></span></a>',
					esc_url( $props['url'] ),
					esc_attr( $image_class.' popup-item' ),
					esc_attr( $props['caption'] ),
					esc_attr( $image_array[1].'x'.$image_array[2] ),
					wp_get_attachment_image_src( $attachment_id, apply_filters( 'single_product_small_thumbnail_size', 'shop_thumbnail' ))[0]
				),
				$attachment_id,
				$post->ID,
				esc_attr( $image_class )
			);

			$loop++;
		}

	?></div>
	<?php
}
