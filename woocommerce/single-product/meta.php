<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
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
 * @version     3.0.0
 NM: Modified */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
?>
<div id="nm-product-meta" class="product_meta">
    
    <div class="nm-row">
    	<div class="col-xs-12">

            <?php do_action( 'woocommerce_product_meta_start' ); ?>

            <?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>

                <?php if ( $sku = $product->get_sku() ) : ?>
                	<span class="sku_wrapper"><?php esc_html_e( 'SKU:', 'woocommerce' ); ?> <span class="sku" itemprop="sku"><?php echo $sku; ?></span></span>
        		<?php endif; ?>

            <?php endif; ?>

            <?php echo wc_get_product_category_list( $product->get_id(), ', ', '<span class="posted_in">' . _n( 'Category:', 'Categories:', count( $product->get_category_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>

            <?php echo wc_get_product_tag_list( $product->get_id(), ', ', '<span class="tagged_as">' . _n( 'Tag:', 'Tags:', count( $product->get_tag_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>

            <?php do_action( 'woocommerce_product_meta_end' ); ?>
            
        </div>
    </div>

</div>