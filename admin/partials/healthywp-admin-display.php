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
<br><br>

<h2>Step 1: Choose the plugin(s) that cause the conflict.</h2>
<?php foreach ($plugins as $plugin) { ?>
	<input type="checkbox" id="<?php echo($plugin['Name']); ?>" name="plugin">
    <label for="<?php echo($plugin['Name']); ?>"><?php echo($plugin['Name']); ?></label><br>
<?php } ?>

<h2>Step 2: Describe the issue.</h2>
<textarea rows="4" cols="50">
...
</textarea> 
<br>

<h2>Step 3: Submit!</h2>
<button type="button">Tnx :)</button> 


