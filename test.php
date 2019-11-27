<?php
session_start();
//builder laden
include_once './resources/builder.php';
$temp = trim($_SERVER['REQUEST_URI'], '/');
$url = explode('/', $temp);
if (!empty($url[1])) {
	$url[1] = strtolower($url[1]);
	switch ($url[1]) {
		case 'home':
			build('home.php');
			break;
		case 'datenschutzerklaerung':
			build('datenschutzerklaerung.php');
			break;
} else {
	build('home.php');
}
