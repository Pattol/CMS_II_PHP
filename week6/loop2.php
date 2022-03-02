<?php
  $count = 1;

  // This will create an infinite loop
  // because $count will always be less than 10
  while ($count <= 10) {
    echo "$count <br>";
  }
?>

<!-- While it will not create an error, an infinite loop will cause your program to get stuck and eventually fail. It is important to avoid infinite loops. -->