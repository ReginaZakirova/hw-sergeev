<?
session_start();
header('Content-type: application/json');
if(isset($_GET['logout'])){
    session_destroy();
    header('Location: /');
}
include "LoginClass.php";
$login = $_GET['login'];
$password = $_GET['password'];
$auth = new LoginClass();
$rez = $auth->authorization($login,$password);
echo json_encode($rez);
?>
