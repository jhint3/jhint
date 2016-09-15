<?php
   $age = 5;
   
   if ($age < 18)  {
	   //true - onväiksem kui 18
	   echo "alaealine";
	   
   } else {
	   //muul juhul
	   echo "täisealine";
   
   }





?>

<br>

<?php

   for($i = 1; $i < $age; $i = $i + 1) {
	   
	   echo "palju";
	   
   }
   
   echo "õnne!";




?>

<br>

<?php

   echo date("G.i. D.d.F.Y");





?>