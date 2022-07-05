//Get image cat for this product
			$terms = get_the_terms( $post->ID, 'product_cat' );
			foreach ( $terms as $term )
			{
				$category_thumbnail = get_woocommerce_term_meta($term->term_id, 'thumbnail_id', true);
				$image = wp_get_attachment_url($category_thumbnail);
			}
			if($category_thumbnail)
			{
				echo '<div class="logoCatSingleProduct">
						 <img src="'.$image.'" alt="Logo '.$term->name.'">
					</div>';
			}
