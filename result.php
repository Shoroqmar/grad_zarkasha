<?php 
	require 'ifuser.php';
	require 'connect.php';

		if($_SERVER['REQUEST_METHOD']=='POST')
		{

			foreach ($_POST['sub'] as $selectedOption)
   			// echo $selectedOption."\n";
		}

			$background    = $_POST['background'];
			$maincolor     = $_POST['main'];
			$subcolor      = $_POST['sub'];
			$patterntype   = $_POST['pattern'];
			$material      = $_POST['mate'];
			$sleevlength   = $_POST['sleev'];
			$bouttomlength = $_POST['bouttom'];
		}
		else
		{
			header("location: account.php");
		}
