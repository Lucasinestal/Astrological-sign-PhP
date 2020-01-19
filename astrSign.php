<?php

//Generate a timestamp using mt_rand.
$timestamp = mt_rand(1, time());
 
//Format that timestamp into a readable date string.
$randomDate = date("Y-n-j", $timestamp);
 
//Print it out.
echo $randomDate . PHP_EOL;

// Calculate what star sign date belongs to and print it.
$day = date('j', strtotime($randomDate));
$month = date('n', strtotime($randomDate));

   if($month == 12 && $day >= 22 || $month == 1 &&  $day <= 19){
     echo "Stenbocken – Capricornus";
   }
   else if($month == 1 && $day >= 20 || $month == 2 &&  $day <= 18){
     echo "Vattumannen – Aquarius";
   }
   else if($month == 2 && $day >= 19 || $month == 3 &&  $day <= 20){
    echo "Fiskarna – Pisces";
  }
  else if($month == 3 && $day >= 21 || $month == 4 &&  $day <= 19){
    echo "Väduren – Aries";
  }
  else if($month == 4 && $day >= 20 || $month == 5 &&  $day <= 21){
    echo "Oxen – Taurus";
  }
  else if($month == 5 && $day >= 22 || $month == 6 &&  $day <= 21){
    echo "Tvillingarna – Gemini";
  }
  else if($month == 6 && $day >= 22 || $month == 7 &&  $day <= 22){
    echo "Kräftan – Cancer";
  }
  else if($month == 7 && $day >= 23 || $month == 8 &&  $day <= 22){
    echo "Lejonet – Leo";
  }
  else if($month == 8 && $day >= 23 || $month == 9 &&  $day <= 22){
    echo "Jungfrun – Virgo";
  }
  else if($month == 9 && $day >= 23 || $month == 10 &&  $day <= 22){
    echo "Vågen – Libra";
  }
  else if($month == 10 && $day >= 23 || $month == 11 &&  $day <= 22){
    echo "Skorpionen – Scorpio";
  }
  else if($month == 11 && $day >= 23 || $month == 12 &&  $day <= 21){
    echo "Skytten – Sagittarius";
  }
?>
