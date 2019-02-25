<?php
declare(strict_types=1);

/**
 * Plugin Name:     Remove SendGrid Statistics
 * Plugin URI:      https://itinerisltd.github.io/remove-sendgrid-statistics/
 * Description:     Remove SendGrid Statistics
 * Version:         0.1.0
 * Author:          Itineris Limited
 * Author URI:      https://www.itineris.co.uk/
 * Text Domain:     itineris
 */

namespace Itineris\RemoveSendGridStatistics;

add_action('plugins_loaded', function (): void {
    remove_action('init', ['Sendgrid_Statistics', 'set_up_menu']);
});
