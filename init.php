<?php defined('SYSPATH') or die('No direct script access.');

// auto autoloader
require DOCROOT.'../../vendor/rediska-0.5.6/library/Rediska.php';

$config = Kohana::$config->load('rediska');
foreach ($config as $options)
{
	Rediska_Manager::add($options);
}
