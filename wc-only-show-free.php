<?php

/**
 * Plugin Name: Remove Woocommerce Free Shipping
 * Plugin URI: http://brandonshutter.com
 * Description: Unsets the Free Shipping Module
 * Author: Brandon Shutter
 * Author URI: http://brandonshutter.com/
 * Version: 1.0
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 *
 */
 
/**
 * woocommerce_package_rates is a 2.1+ hook
 */
add_filter( 'woocommerce_package_rates', 'bs_hide_free_shipping_when_free_is_available', 10, 2 );
 
/**
 * Hide free shipping when free shipping is available
 */

function bs_hide_free_shipping_when_free_is_available( $rates ) {
 	
 	// Only modify rates if free_shipping is present
  	if ( isset( $rates['free_shipping'] ) ) {

  		unset( $rates['free_shipping'] );
	}
	
	return $rates;
}