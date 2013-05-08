<?php


// this is really a hack of a way to get this working but
// mb bc of namespaces just including another file isn't going to work

$shared_config = (dirname(dirname(dirname(dirname(dirname(__FILE__))))).'/zipit-config.php');
$contents = file_get_contents($shared_config);
$contents = trim($contents,'<?php');
eval($contents);


