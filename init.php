<?php defined('SYSPATH') or die('No direct script access.');

$config = Kohana::$config->load('rediska');
foreach ($config as $options)
{
	Rediska_Manager::add($options);
}
