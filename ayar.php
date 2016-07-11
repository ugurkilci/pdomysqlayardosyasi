<?php
	
	$host = "localhost";
	$dbname = "veritabaniadi";
	$root = "sitenizinkullaniciadi";
	$password = "parolaniz-sifreniz";
	
	try{
		$vt = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8;","$root","$password");
	}catch(PDOExeption $ugur){
		echo $ugur->getMessage();
	}

?>