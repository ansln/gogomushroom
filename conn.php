<?php
$db = new mysqli("localhost","gogx1278_ansln","antonius123.","gogx1278_gogo");

// Check connection
if ($db -> connect_errno) {
  echo "<b style='color: red'>no connection</b>";
  exit();
}
?>