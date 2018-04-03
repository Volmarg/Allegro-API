<?php

	#Connection data
	$url = "http://webapi.allegro.pl/uploader.php?wsdl";
	$user_login = $_GET['login'];
	$user_password =  $_GET['password'];
	$country_code = 1;
	$webapi_key = "";


	#Connect to Soap
	$client = new SoapClient($url);

	#Grab data for login
	$varQuery = $client->doQuerySysStatus(4, $country_code, $webapi_key)  ;
	$allegroVer=$varQuery['ver-key'];
	$local_version = $allegroVer;
	$client->soap_defencoding = 'UTF-8';
	$client->decode_utf8 = false;

?>
