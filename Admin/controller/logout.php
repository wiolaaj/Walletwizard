<?php
include "../config.php";
session_destroy();
header('location:../signin.php');
?>