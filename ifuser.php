<?php 
	session_start();
	if(!isset($_SESSION['email']) AND !isset($_SESSION['password']))
	{
		header("LOCATION: account.php");
	}