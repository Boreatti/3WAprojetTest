<?php
include('../script/init.php');
include('functionAdmin.php');

if(!isset($_SESSION['connected']) || (!$_SESSION['connected'])){
	header('Location: login.php');
	die;
}