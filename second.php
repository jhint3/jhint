<?php
   $age = 5;
   
   if ($age < 18)  {
	   //true - onv�iksem kui 18
	   echo "alaealine";
	   
   } else {
	   //muul juhul
	   echo "t�isealine";
   
   }





?>

<br>

<?php

   for($i = 1; $i < $age; $i = $i + 1) {
	   
	   echo "palju";
	   
   }
   
   echo "�nne!";




?>

<br>

<?php

   echo date("G.i. D.d.F.Y");





?>