<?php
  $say = htmlspecialchars($_POST['username']);
  $to  = htmlspecialchars($_POST['email']);
  echo  $say, 'I did it)',  ' ', $to;
?>
<!-- Ps:it'll work from host( only:( ) -->