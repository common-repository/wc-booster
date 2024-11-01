<?php
/**
 * Checkout coupon form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-coupon.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined( 'ABSPATH' ) || exit;

if ( ! wc_coupons_enabled() ) { // @codingStandardsIgnoreLine.
	return;
}

?>
<div class="woocommerce-form-coupon-toggle">
	<a href="#" class="wc-booster-showcoupon"><?php esc_html_e( 'Use coupon', 'wc-booster' ); ?></a>
</div>

<form class="wc-booster-checkout-coupon woocommerce-form-coupon" method="post" style="display:none">

	<p class="form-row form-row-first">
		<label for="coupon_code" class="screen-reader-text">
            <?php esc_html_e( 'Coupon:', 'wc-booster' ); ?>
        </label>
		<input type="text" name="coupon_code" class="input-text" placeholder="<?php esc_attr_e( 'Coupon code', 'wc-booster' ); ?>" id="coupon_code" value="" />
	</p>

	<p class="form-row form-row-last">
		<button type="submit" class="button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'wc-booster' ); ?>"><?php esc_html_e( 'Apply coupon', 'wc-booster' ); ?></button>
	</p>

	<div class="clear"></div>
</form>
