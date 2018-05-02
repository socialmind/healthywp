<?php
include_once('healthywp-admin-functions.php');

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://socialmind.gr/?lang=en
 * @since      1.0.0
 *
 * @package    Healthywp
 * @subpackage Healthywp/admin/partials
 */

$plugins = get_plugins();
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<h1>HealthyWP :: Plug-in Observatory!</h1>
<h3>this is where magic is going to happen</h3>
<ul>

<?php foreach ($plugins as $plugin) {
	echo "<li>" . $plugin['Name'] . "</li>";
} ?>

</ul>

