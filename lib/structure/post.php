<?php
/**
 * Description
 *
 * @package     Webbviken\Developers
 * @since       1.0.0
 * @author      jryden
 * @link        https://webbviken.se
 * @license     GNU General Public License 2.0+
 */
namespace Webbviken\Developers;


add_filter( 'genesis_author_box_gravatar_size', __NAMESPACE__ . '\setup_author_box_gravatar_size' );
/**
 * Modify size of the Gravatar in the author box.
 *
 * @since 1.0.0
 *
 * @param $size
 *
 * @return int
 */
function setup_author_box_gravatar_size( $size ) {

	return 90;

}