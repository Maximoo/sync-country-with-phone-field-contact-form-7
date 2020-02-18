<?php
/**
 * Plugin Name: Sync Country with Phone Field Contact Form 7
 * Plugin URI:  https://github.com/Maximoo/sync-country-with-phone-field-contact-form-7
 * Description: Sync the countrytext field with the phonetext field in Contact Form 7
 * Version:     1.0
 * Author:      Maximo_o
 * Author URI:  https://github.com/Maximoo
 * Donate link: https://github.com/Maximoo
 * License:     GPLv3
 * Text Domain: sync-country-with-phone-field-contact-form-7
 *
 * @link https://github.com/Maximoo
 *
 * @package sync-country-with-phone-field-contact-form-7
 * @version 1.0
 */

/**
 * Copyright (c) 2020 Maximo_o (email : deluzmax@gmail.com)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 3 or, at
 * your discretion, any later version, as published by the Free
 * Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

add_action(
	'plugins_loaded', function () {
		wp_enqueue_script( 'sync_country_with_phone_field_contact_form_7-script', plugin_dir_url( __FILE__ ) . 'script.min.js', array( 'nbcpf-intlTelInput-script','nbcpf-countryFlag-script' ) );
	}
);