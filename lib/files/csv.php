<?php

class csv{

  function array2csv($array)
  {
    #Open file
    $file = fopen("../../output/file.csv","w");

    #Add headers
    $headers=array('Link:','Tytuł:','Ilość Wyświetleń:');
    array_unshift($array,$headers);

    foreach ($array as $num=>$line){

        #charset
        foreach($line as $id=>$element){
          $line[$id]=mb_convert_encoding($element, "UTF-8", "auto");
        }
        #add to csv
        fputcsv($file,$line,';');
      }
    #close file
    fclose($file);

  }

}




?>
