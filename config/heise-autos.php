<?php

include(__DIR__ . "/heise.php");

$config['author']		= "Sven Fischer";
$config['author_url']	= "http://blog.strubbl.de/";
$config['url']			= "http://www.heise.de/autos/rss/news-atom.xml";
$config['content'] = array("#<section id=\"artikel_text\">\s*<!--googleon: index-->(.*)<!--googleoff: index-->#Uis", 1);

?>
