<!DOCTYPE html>
<html>
<body>

<?php
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota",
  "Volvo",
  "Mercedes",
  "Skoda",
  "Seat",
  "Bentley",
]);
echo cars[rand(0,7)];
?> 

</body>
</html>