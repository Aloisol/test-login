<?php
error_reporting(0);

  $u = $_POST['uname'];
  $p = $_POST['psw'];


  if (strcmp($u, "admin") == 0 && strcmp($p, "admin") == 0) {

    echo "OK!<br><br>";
    sleep(3);
    echo "<a href='index.php'>Volver</a>";

  }
  else{
    echo "ERROR<br><br>";
    echo "<a href='index.php'>Volver</a>";

  }

?>