<?php
/**
 * Plugin Name:     Without Category 42
 * Plugin URI:      https://github.com/pixolin/withoutcat42
 * Description:     Zeigt auf der Beitragsseite alle Beiträge außer Kategorie 42
 * Author:          Bego Mario Garde
 * Author URI:      https://pixolin.de
 * Text Domain:     withoutcat42
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Withoutcat42
 */

namespace Pixolin\withoutcat42;

/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) {
	return;
}

function exclude_category( $query ) {
	if ( $query->is_home() && $query->is_main_query() ) {
		$query->set( 'cat', '-21' );
	}
}
add_action( 'pre_get_posts', 'Pixolin\withoutcat42\exclude_category' );
