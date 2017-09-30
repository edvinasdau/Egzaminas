<?php

	if (isset($_POST['submit'])){

		session_start();


		if(isset($_POST['username']) && isset($_POST['password'])){
	# yra ivesti prisijungimo duomenys
			if($_POST['username'] == "imone" && $_POST['password'] == "kodas") {
		#vartotojo vardas ir slaptazodis tinka
				header('Location: 11.php');
		}		
	}
?>
