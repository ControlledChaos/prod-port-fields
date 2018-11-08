<?php
/**
 * Admin notice that this plugin needs its parent plugin.
 *
 * @package    Production_Portfolios_Fields
 * @subpackage Includes
 *
 * @since      5.7.7
 * @author     Greg Sweet <greg@productionportfolios.com>
 */

namespace Production_Portfolios_Fields\Includes;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>
<div class="notice notice-error">
	<?php
	echo sprintf(
		'<p>%1s</p>',
		esc_html__( 'Production Portfolios Fields needs the Production Portfolios to be installed and activated.', 'prod-port-fields' )
	); ?>
</div>