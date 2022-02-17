<!DOCTYPE html>
<html>
<body>

<?php
$age = array("Elias"=>"15", "Andreas"=>"23", "Mano"=>"28", "Lorenzo" =>"67");
arsort($age);

foreach($age as $x => $x_value) {
  echo "", "<li>" . $x . " har $x_value Poäng"  ;
  echo "<br>";
}
?>

</body>
</html>