<?php

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

<h1>HealthyWP</h1>
<p style="font-size: 15px; font-style: italic; margin-top: 25px;">"Crowd sourcing WordPress plugins user experience. Building a healthier, <br>more secure Internet one WordPress installation at a time."</p>
<div id="wrapper">
	<div id="menu-item">Report Issue</div>
	<div id="menu-item">Check Compatibility</div>
	<div id="menu-item">Profile</div>
</div>

<h2>1. Check items to report compatibility.</h2>
<div id="wrapper">
	<div id="wrapper-item">
		<input type="checkbox" id="wpversion" name="plugin">
    	<label for="wpversion"><?php echo "WordPress Version: " . get_bloginfo('version'); ?></label>
    </div>
	<hr width="98%">
	<?php foreach ($plugins as $plugin) { ?>
	<div id="wrapper-item">
			<input type="checkbox" id="<?php echo($plugin['Name']); ?>" name="plugin">
	    	<label for="<?php echo($plugin['Name']); ?>"><?php echo($plugin['Name']); ?></label>
	</div>
	<?php } ?>
</div>

<h2>2. How compatible are they?</h2>
<div id="wrapper">
	<div id="likert">
		<div id="likert-item"><input type="radio" name="likert" value="-5"></div>
	  	<div id="likert-item"><input type="radio" name="likert" value="-4"></div>
	  	<div id="likert-item"><input type="radio" name="likert" value="-3"></div>
	  	<div id="likert-item"><input type="radio" name="likert" value="-2"></div>
	  	<div id="likert-item"><input type="radio" name="likert" value="-1"></div>
	  	<div id="likert-item"><input type="radio" name="likert" value="0"></div>
	  	<div id="likert-item"><input type="radio" name="likert" value="+1"></div>
	  	<div id="likert-item"><input type="radio" name="likert" value="+2"></div>
	  	<div id="likert-item"><input type="radio" name="likert" value="+3"></div>
	  	<div id="likert-item"><input type="radio" name="likert" value="+4"></div>
	  	<div id="likert-item"><input type="radio" name="likert" value="+5"></div>
	</div>
</div>

<h2>3. Compatibility / Incompatibility reasons.</h2>
<div id="wrapper">
	<div id="wrapper-item">
		<input type="checkbox" id="cat" name="cat">
    	<label for="cat">Category 1</label>
    </div>
    <div id="wrapper-item">
		<input type="checkbox" id="cat" name="cat">
    	<label for="cat">Category 2</label>
    </div>
    <div id="wrapper-item">
		<input type="checkbox" id="cat" name="cat">
    	<label for="cat">Category 3</label>
    </div>
    <div id="wrapper-item">
		<input type="checkbox" id="cat" name="cat">
    	<label for="cat">Category 4</label>
    </div>
    <div id="wrapper-item">
		<input type="checkbox" id="cat" name="cat">
    	<label for="cat">Category 5</label>
    </div>
    <div id="wrapper-item">
		<input type="checkbox" id="cat" name="cat">
    	<label for="cat">Category 6</label>
    </div>
</div>

<h2>4. (optional) Further analyze the issue.</h2>
<div id="wrapper">
	<div id="wrapper-item">
		<textarea rows="8" cols="80"></textarea>
	</div>
</div>

&nbsp;

<div id="wrapper">
		<center><button type="button">SUBMIT</button>
</div>

