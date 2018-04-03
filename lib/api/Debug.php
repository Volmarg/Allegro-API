<?php
@include_once 'connection.php';


print_r($client);
$varQuery = $client->doQuerySysStatus(4, $country_code, $webapi_key)  ;
// $version = $client->doQueryAllSysStatus($country_code,  $webapi_key);
//echo "</br>version</br>" ;
// print_r($version);
echo "</br>varQuery</br>";
print_r($varQuery) ;


echo "</br>varQuery['ver-key']</br>";
print_r($varQuery['ver-key']);
$allegroVer=$varQuery['ver-key'];
echo "</br>allegroVer</br>";
	 print_r($allegroVer);
//   print_r($version[0]['program-version']);
//$allegroVer=$version[0]=>ver-key;
//print_r($var_Query[0]);
//  print_r($allegroVer);
$local_version = $allegroVer;
$client->soap_defencoding = 'UTF-8';
$client->decode_utf8 = false;


?>
