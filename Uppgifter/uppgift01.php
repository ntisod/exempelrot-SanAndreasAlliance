<?php
header("Content-type: text/html; charset=utf-8");
if(empty ($_GET[ " namn "])){
    echo '<h1>Välkommen! </h1>';
}

else{
    $namn=filter_input (INPUT_GET, 'namn' );
    echo "<h1>Väl kommen ($namn}l</h1>";
    echo "<p Namnet $namn inneháller ", strlen ($namn), " tecken. <p>";
}