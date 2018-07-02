<?php
/**
 * @package     local_ldap
 * @copyright   2017, John Maydew <jdmayd@essex.ac.uk>
 */

defined('MOODLE_INTERNAL') || die();

// don't forget to bump this in case of change in local/db ...
$plugin->version    = 2017082300;        // The current plugin version (Date: YYYYMMDDXX)

$plugin->requires   = 2011112900;        // Requires this Moodle version (Moodle 2.0 )
$plugin->component  = 'local_ldap';       // Full name of the plugin (used for diagnostics)
$plugin->maturity   = MATURITY_STABLE;
$plugin->dependencies = array( 'auth_ldap' => ANY_VERSION );

?>
