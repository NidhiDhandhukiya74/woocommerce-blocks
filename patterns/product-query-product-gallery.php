<?php
/**
 * Title: Product Gallery
 * Slug: woocommerce-blocks/product-query-product-gallery
 * Categories: WooCommerce
 * Block Types: core/query/woocommerce/product-query
 */
use Automattic\WooCommerce\Blocks\Patterns\PatternsHelper;

$content = PatternsHelper::get_pattern_content( 'woocommerce-blocks/product-query-product-gallery' );

$gallery_title = $content['titles'][0]['default'] ?? '';
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0px","bottom":"80px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:0px;margin-bottom:80px;padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)">
	<!-- wp:heading {"level":3,"align":"wide"} -->
	<h3 class="wp-block-heading alignwide"><?php echo esc_html( $gallery_title ); ?></h3>
	<!-- /wp:heading -->

	<!-- wp:woocommerce/product-collection {"query":{"perPage":6,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{},"parents":[],"isProductCollectionBlock":true,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":3},"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-woocommerce-product-collection alignwide">
			<!-- wp:woocommerce/product-template -->
				<!-- wp:woocommerce/product-image {"imageSizing":"thumbnail","isDescendentOfQueryLoop":true, "aspectRatio":"3/4"} /-->

				<!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"textAlign":"center"} /-->

				<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0.75rem","top":"0"}}},"fontSize":"medium","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

				<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","fontSize":"small"} /-->

				<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"fontSize":"small"} /-->
			<!-- /wp:woocommerce/product-template -->
		</div>
	<!-- /wp:woocommerce/product-collection -->
</div>
<!-- /wp:group -->
