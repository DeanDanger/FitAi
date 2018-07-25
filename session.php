<?php
$db = new PDO('sqlite:C:\xampp\htdocs\FITAI\fitai.db') or die("ERROR ERROR");
session_start();
if (isset($_SESSION['loginstatus']) && $_SESSION['loginstatus'] == true) {
  $a=1;
} else {
    header("Location:login.php");
}
?>