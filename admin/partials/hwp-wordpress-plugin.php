<?php
/**
 * WordPress Plugin Class
 *
 * @version v0.8 (May 2, 2018)
 * @copyright Social Mind <info@socialmind.gr>
 * @license GNU GPL v3.0.
 *
 * @author Apostolos Kritikos <kritikos@socialmind.gr>
 *
 * @package healthywp
 *
 * @description this is an extended version of the WordPress plugin class that includes information
 * from HealthyWP.
 *
 */

class WordPressPlugin
{
    /** The mane of the plugin. This is a WordPress property. */
    private $name;
    /** The unique resource identifier (URI) of the plugin. This is a WordPress property. */
    private $pluginURI;
    /** The version of the plugin. This is a WordPress property. */
    private $version;
    /** The description of the plugin. This is a WordPress property. */
    private $description;
    /** The author of the plugin. This is a WordPress property. */
    private $author;
    /** The plugin author's unique resource identifier (URI). This is a WordPress property. */
    private $authorURI;
    /** The text domain of the plugin. This is a WordPress property. */
    private $textDomain;
    /** The domain path of the plugin. This is a WordPress property. */
    private $domainPath;
    /** The network property of the plugin. This is a WordPress property. */
    private $network;
    /** The title of the plugin. This is a WordPress property. */
    private $title;
    /** The plugin author's name. This is a WordPress property. */
    private $authorName;
    /** Total reports of the plugin. This is a HealthyWP property. */
    private $totalReports;
    /** Number of compatible plugins reported. This is a HealthyWP property. */
    private $numberOfCompatiblePlugins;
    /** Number of incompatible plugins reported. This is a HealthyWP property. */
    private $numberOfIncompatiblePlugins;

    /**
     * Constructor
     */
    public function __construct($name, $pluginURI, $version, $description, $author, $authorURI, $textDomain, $domainPath, $network, $title, $authorName)
    {
        $this->name = $name;
        $this->pluginURI = $pluginURI;
        $this->version = $version;
        $this->description = $description;
        $this->author = $author;
        $this->authorURI = $authorURI;
        $this->textDomain = $textDomain;
        $this->domainPath = $domainPath;
        $this->network = $network;
        $this->title = $title;
        $this->authorName = $authorName;

        //XXX: Get from DB
        $this->totalReports = 0;
        //XXX: Get from DB
        $this->numberOfCompatiblePlugins = 0;
        //XXX: Get from DB
        $this->numberOfIncompatiblePlugins = 0;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getPluginURI(){
        return $this->pluginURI;
    }

    public function setPluginURI($pluginURI){
        $this->pluginURI = $pluginURI;
    }

    public function getVersion(){
        return $this->version;
    }

    public function setVersion($version){
        $this->version = $version;
    }

    public function getDescription(){
        return $this->description;
    }

    public function setDescription($description){
        $this->description = $description;
    }

    public function getAuthor(){
        return $this->author;
    }

    public function setAuthor($author){
        $this->author = $author;
    }

    public function getAuthorURI(){
        return $this->authorURI;
    }

    public function setAuthorURI($authorURI){
        $this->authorURI = $authorURI;
    }

    public function getTextDomain(){
        return $this->textDomain;
    }

    public function setTextDomain($textDomain){
        $this->textDomain = $textDomain;
    }

    public function getDomainPath(){
        return $this->domainPath;
    }

    public function setDomainPath($domainPath){
        $this->domainPath = $domainPath;
    }

    public function getNetwork(){
        return $this->network;
    }

    public function setNetwork($network){
        $this->network = $network;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function getAuthorName(){
        return $this->authorName;
    }

    public function setAuthorName($authorName){
        $this->authorName = $authorName;
    }

    public function getTotalReports(){
        return $this->totalReports;
    }

    public function setTotalReports($totalReports){
        $this->totalReports = $totalReports;
    }

    public function getNumberOfCompatiblePlugins(){
        return $this->numberOfCompatiblePlugins;
    }

    public function setNumberOfCompatiblePlugins($numberOfCompatiblePlugins){
        $this->numberOfCompatiblePlugins = $numberOfCompatiblePlugins;
    }

    public function getNumberOfIncompatiblePlugins(){
        return $this->numberOfIncompatiblePlugins;
    }

    public function setNumberOfIncompatiblePlugins($numberOfIncompatiblePlugins){
        $this->numberOfIncompatiblePlugins = $numberOfIncompatiblePlugins;
    }

}
?>
