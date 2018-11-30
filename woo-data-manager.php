<?php
/**
 * Plugin Name:     Woocommerce Data Manager
 * Plugin URI:      http://asaferamos.com
 * Description:     Data Manager for Woocommerce
 * Author:          Asafe Ramos
 * Author URI:      http://asaferamos.com
 * Text Domain:     woocommerce-data-manager
 * Version:         0.1.0
 *
 * @package         Woocommerce_Data_Manager
 */

class WooDataManager{
	public function __construct() {
		add_action( 'admin_menu', array( $this, 'admin_menu' ) );
	}

	public function admin_menu() {
		$page = add_submenu_page(
            'woocommerce',
            __('Data Manager', 'woo_data_manager'),
            __('Data Manager', 'woo_data_manager'),
            apply_filters('woocommerce_csv_order_role', 'manage_woocommerce'),
            'woo_data_manager',
            array($this, 'output')
        );
	}

	public function output() {
		echo 'Data Manager';
	}
}

new WooDataManager();