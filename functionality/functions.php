<?php
  function sanitize($raw_data) {
    global $conn;
    $data = htmlspecialchars($raw_data);
    return $data;
  }
?>