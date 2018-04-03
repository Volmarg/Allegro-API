<?php

class allegroApi{
  function getSoldItems($user_login,$user_password,$country_code, $webapi_key,$local_version,$client){

    $varSession = $client->doLogin($user_login,$user_password,$country_code, $webapi_key,$local_version,1,1);
    $idSesji=$varSession['session-handle-part'];

    #Calculate sell items amout
    $itemsListing=$client->doGetMySellItems($idSesji);
    $amount=$itemsListing['sell-items-counter'];

    #Get sold items list
    $limiter=1;
    $offset=0;
    $looper= ceil($amount/$limiter); #This part is for creating my own array since Api handles max ~100 items
    $allAuctions=array(); #This var holds all products on account

    for($x=0;$x<$looper;$x++){

      $aukcje=$client->doMyAccount2($idSesji,"sell",$offset,'',$limiter); #this one takes part of items from account and put it to array with all items
      $allAuctions[$x]=$aukcje;
      $offset+=$limiter;
    }

    #@$lngIlosc = $client->doMyAccountItemsCount($idSesji, "sold", $varTMP);

    #Display content
    $counter=0;
    foreach($allAuctions as $singleAuction){
      foreach($singleAuction as $num=>$single){

        #Create link
        $link='http://allegro.pl/i'.$single->{'my-account-array'}[0].'.html';
        #Throw out
        #echo '<b> Link: </b>  <a href="'.$link.'"/>'.$link.'</a>';
        #echo '</br><b> Aukcja: </b>  '.$single->{'my-account-array'}[9];
        #echo '</br><b> Liczba wyświetleń: </b>  '.$single->{'my-account-array'}[33];
        #echo '</br>'.'</br>';

        #Build array
        $rows[$counter]=array($link,$single->{'my-account-array'}[9],$single->{'my-account-array'}[33]);
        $counter++;
      }
    }

    #Return content
    return $rows;
  }

  /*
  --- ID AUKCJI ---
  [9] - nazwa aukcji
  [33] - liczba wyswietlen
  [0] - id aukcji
  */
}

?>
