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
 * @description a class that handles the information of
 * WordPress plugins.
 *
 */

class WordPressPlugin
{
    /**  */
    private $name;
    /**  */
    private $pluginURI;
    /**  */
    private $version;
    /**  */
    private $description;
    /**  */
    private $author;
    /**  */
    private $authorURI;
    /**  */
    private $textDomain;
    /**  */
    private $domainPath;
    /**  */
    private $network;
    /**  */
    private $title;
    /**  */
    private $authorName;

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
}

?>