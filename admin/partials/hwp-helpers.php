<?php
include_once('hwp-wordpress-plugin.php');

if ( ! function_exists( 'get_plugins' ) ) {
	require_once ABSPATH . 'wp-admin/includes/plugin.php';
}
$plugins_list = get_plugins();
$plugins = array();

foreach ($plugins_list as $plugin) {
	$thePlugin = new WordPressPlugin($plugin['Name'], $plugin['PluginURI'], $plugin['Version'], $plugin['Description'], $plugin['Author'], $plugin['AuthorURI'], $plugin['TextDomain'], $plugin['DomainPath'], $plugin['Network'], $plugin['Title'], $plugin['AuthorName']);
	$plugins[] = $thePlugin;
	
}
//var_dump($plugins);die;

function findHealthyPluginByTextDomain($textDomain) {
	global $plugins;
	$found = false;
	$theone;

	var_dump($plugins);die;

	foreach ($plugins as $plugin) {
		if($plugin->getTextDomain() == $textDomain) {
			$found = true;
			$theone = $plugin;
		}
	}

	if($found) 
		return $theone;
	else
		return "-999";
}

function rankPlugin($textDomain) {
	global $plugins;

	$pluginCount = count($plugins['all']); 
	$thePlugin = findHealthyPluginByTextDomain($textDomain);
	var_dump($thePlugin);die;

	//XXX: Realistic number or configurable
	/*if($thePlugin->getTotalReports() < 100) {
		return "<b><font color=\"black\">&#x25cf; N/A</font></b>";
	} else {
		if( ( $thePlugin->getNumberOfIncompatiblePlugins() / $pluginCount * 100 ) >= 80 ) {
			return "<b><font color=\"red\">&#x25cf; Incompatible</font></b>";
		} elseif( ( $thePlugin->getNumberOfIncompatiblePlugins() / $pluginCount * 100 ) >= 50 ) {
			return "<b><font color=\"orange\">&#x25cf; Potentially Incompatible</font></b>";
		} esle {
			return "<b><font color=\"green\">&#x25cf; Compatible</font></b>";
		}
	}*/
}

?>