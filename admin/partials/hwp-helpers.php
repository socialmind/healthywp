<?php
include_once('hwp-wordpress-plugin.php');

function getHealthyPlugins() {
	$plugins_list = get_plugins();
	$plugins = array();
	foreach ($plugins_list as $plugin) {
		var_dump($plugin);die;
		$thePlugin = new WordPressPlugin($plugin['Name'], $plugin['PluginURI'], $plugin['Version'], $plugin['Description'], $plugin['Author'], $plugin['AuthorURI'], $plugin['TextDomain'], $plugin['DomainPath'], $plugin['Network'], $plugin['Title'], $plugin['AuthorName']);
		array_push($plugins, $thePlugin);
	}
	return $plugins;

	return "testme";
}

?>