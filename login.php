<?php

  $u = $_POST['uname'];
  $p = $_POST['psw'];


  if (strcmp($u, "admin") !== 0 && strcmp($p, "admin") !== 0) {

    echo "OK!";
    sleep(3);
    header('location: index.php');

  }
  else{
    echo "ERROR<br><br>";
    echo "<a href='index.php'>Volver</a>"

  }

?>