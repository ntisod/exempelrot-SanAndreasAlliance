<!DOCTYPE html>
<html>
<body>

<?php
$t = date("H");
echo "<p>Tiden på servern är " . $t; 
echo ", och kommer att ge följande meddelande:</p>";

if ($t < "10") {
  echo "Godmorgon!";
} elseif ($t < "12") {
  echo "God förmiddag!";  
} elseif ($t < "14") {
  echo "Goddag!"; 
} elseif ($t < "16") {
	echo "God eftermiddag!"; 
} elseif ($t < "18") {
	echo "God kväll!";
} elseif ($t < "20") {
	echo "Godnatt!";
   }



?>
 
</body>
</html>