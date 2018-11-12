<?php
include("../dataAccess/db_connect.php");
include("../dataAccess/adminDAO.php");

session_start();

/* Login Form */
$username = filter_input(INPUT_POST,'username');
$password = filter_input(INPUT_POST, 'password');
$db = getDB();

$admin_dao = new adminDAO($db);
$admin = $admin_dao->getAdmin($username, $password);
if ($admin) {
      $_SESSION['admin']=$admin;
      $url = '../dashboard.php';
      header('location:'.$url);
} else {
     echo "Please check login details.";
}
?>