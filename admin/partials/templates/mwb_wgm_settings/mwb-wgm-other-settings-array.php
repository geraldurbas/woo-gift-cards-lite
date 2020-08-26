<?php
/**
 * Exit if accessed directly
 *
 * @package    Woocommerce_gift_cards_lite
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit();
}

require_once MWB_WGC_DIRPATH . 'admin/partials/template_settings_function/class-woocommerce-giftcard-admin-settings.php';
$settings_obj = new Woocommerce_Giftcard_Admin_Settings();
 $mwb_wgm_other_setting = array(
	 array(
		 'title' => esc_html__( 'Disable Apply Coupon Fields', 'woo-gift-cards-lite' ),
		 'id' => 'mwb_wgm_additional_apply_coupon_disable',
		 'type' => 'checkbox',
		 'class' => 'input-text',
		 'desc_tip' => esc_html__( 'Check this if you want to disable Apply Coupon Fields if there only GifCard Products are in Cart/Checkout Page', 'woo-gift-cards-lite' ),
		 'desc' => esc_html__( 'Disable Apply Coupon Fields on Cart/Checkout page', 'woo-gift-cards-lite' ),
	 ),
	 array(
		 'title' => esc_html__( 'Disable Preview Button', 'woo-gift-cards-lite' ),
		 'id' => 'mwb_wgm_additional_preview_disable',
		 'type' => 'checkbox',
		 'class' => 'input-text',
		 'desc_tip' => esc_html__( 'Check this if you want to disable Preview Button At Front End', 'woo-gift-cards-lite' ),
		 'desc' => esc_html__( 'Disable Preview Button At Front End', 'woo-gift-cards-lite' ),
	 ),
 );
 $mwb_wgm_other_setting = apply_filters( 'mwb_wgm_other_setting', $mwb_wgm_other_setting );
