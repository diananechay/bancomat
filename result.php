<?php
  session_start();
  $CassNom = array(500,200,100,50,20,10,5);//номинал
  $value = $_POST['value'];
  $kol=1; //! количество купюр
  do {
    if ($value < 0) {
        echo "Wrong data! Value can not be less than 0 !!!";
        continue;
     }
     if (0 != $value %5) {
         echo "Wrong data! Value not multiple 5!";
         continue;
     }
      if ($value > 5000) {
          echo "Wrong data! Value can not be more than 5000 !!!";
          continue;
      }

      for ( $i = 0; $i < 7; ++$i) {
       $kol = $value / $CassNom[$i];
       $kol= floor($kol);
          if($kol!=0)
          {
                echo  "<br/>".$kol." x ".$CassNom[$i] ;
          }
        $value -=  $kol * $CassNom[$i];
      }
 } while (false);
?>

