<?php

/*
Plugin Name: Test Git And Debug
Description: Тест для git и debug
Version: 1.0
Author: HataStyle
*/

if ( ! defined('ABSPATH'))
	exit();

include ('class_privet.php');

$privet = new privet();
$privet->set( 5 );
$privet->choose( 10 );