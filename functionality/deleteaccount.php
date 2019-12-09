<?php
  include("db.php");
  include("./functions.php");
  $id = $_POST['userid'];

  $sql = "DELETE FROM  `account` WHERE `accountID` = '$id'";
  $conn->query($sql);

  header("Location: ../index.php?content=logout");
?>