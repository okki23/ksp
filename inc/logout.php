<?php
@session_start();

session_destroy();

header("location: /KSP/Login.php");
?>