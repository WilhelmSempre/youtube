<?php
declare(strict_types=1);

ini_set('display_errors', 'on');
error_reporting(E_ALL);

use WilhelmSempre\Youtube\YouTube;

require_once 'vendor/autoload.php';

$youtube = new YouTube();
$information = $youtube->processVideo('https://www.youtube.com/watch?v=xeyUAVRZoVk');
var_dump($information);
