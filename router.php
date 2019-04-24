<?php 
switch ($_SERVER['PATH_INFO']) {
	case '/login':
	require_once "controller/loginController.php";
	$loginctrl = new loginController();
	echo $loginctrl->view_login();
	exit();
	
	case '/signup':
	require_once "controller/loginController.php";
	$signupctrl = new loginController();
	echo $signupctrl->view_signup();
	exit();

	case '/homepage':
	require_once "controller/loginController.php";
	$login = new loginController();
	echo $login->login();
	exit();

	case '/logout':
	require_once "controller/loginController.php";
	$logout = new loginController();
	echo $logout->logout();
	exit();

}




?>