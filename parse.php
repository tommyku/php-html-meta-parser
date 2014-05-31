<?php

require_once("meta.php");

$meta = new Meta("http://tommyku.com");
$meta->parse(); // load the webpage and read the meta tags
$metaData = $meta->finalize();

print_r($metaData);