<?
session_start();
header('Content-type: application/json');

include "LoginClass.php";
$login = $_GET['login'];
$password = $_GET['password'];
$auth = new LoginClass();
$rez = $auth->registration($login,$password);
echo json_encode($rez);
?>
