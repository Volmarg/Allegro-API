<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

      <?php
      #this file simply handles the request from form input
      include_once ('api/Connection.php');
      include_once ('api/Requests.php');
      include_once ('files/csv.php');
      //--------------------------------------------------------------------------
      $csv=new csv();
      $allegroGet=new allegroApi();
      //--------------------------------------------------------------------------

      $itemsArray=$allegroGet->getSoldItems($user_login,$user_password,$country_code, $webapi_key,$local_version,$client);
      $csv->array2csv($itemsArray);
      ?>

  </body>
</html>
