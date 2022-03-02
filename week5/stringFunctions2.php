<?php
  $first = "The quick brown fox";
  $second = " jumped over the lazy dog.";

  $third = $first;
  $third .= $second;

  echo str_replace("quick", "super-fast", $third);
?>