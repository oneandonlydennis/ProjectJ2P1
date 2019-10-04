<?php 
  if (isset($_GET["content"])) {
    include("./pages/" . $_GET["content"] . ".php"); 
  } else if(isset($_GET["func"])) {
    include("./functionality/" . $_GET['func'] . ".php");
  }else{
    include("./pages/home.php");
  }
?>