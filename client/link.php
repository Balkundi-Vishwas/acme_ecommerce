<?php
include_once '../shared/connection.php';
include "client_session.php";

$_SESSION['link']=true;
header('location:order.php');
?>