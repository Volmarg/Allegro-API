<?php
ob_start(); #used cuz of the xml utf 8 problem. Headers fix it but then headers cant be sand after output so this allows to do so

      #this file simply handles the request from form input
      include_once ('../api/Connection.php');
      include_once ('../api/Requests.php');
      include_once ('../files/csv.php');
      //--------------------------------------------------------------------------
      $csv=new csv();
      $allegroGet=new allegroApi();
      //--------------------------------------------------------------------------

      $itemsArray=$allegroGet->getSoldItems($user_login,$user_password,$country_code, $webapi_key,$local_version,$client);
      $csv->array2csv($itemsArray);


      #download the file - fix for utf8 problem
      header('Content-Description: File Transfer');
      header('Content-Type: application/octet-stream');
      header('Content-Disposition: attachment; filename=file.csv');
      header('Content-Transfer-Encoding: binary');
      header('Expires: 0');
      header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
      header('Pragma: public');
      echo "\xEF\xBB\xBF"; // UTF-8 BOM

      $file = file_get_contents("../../output/file.csv");
      echo $file;
      exit();

ob_end_flush();



      ?>
