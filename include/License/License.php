<?php namespace EmailLog\License;

defined( 'ABSPATH' ) || exit; // Exit if accessed directly.

/**
 * EmailLog License.
 *
 * @since 2.0.0
 */
class License extends BaseLicense {

	/**
	 * Is the license activated and valid?
	 *
	 * @return bool True if license is active, False otherwise.
	 */
	public function is_valid() {
		// TODO: Implement is_valid() method.
		return false;
	}

	/**
	 * Get the license key.
	 *
	 * @return string License Key.
	 */
	public function get_license_key() {
		return $this->license_key;
	}
}
