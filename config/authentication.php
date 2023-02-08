<?php session_start(); ?>
<?php include_once("dbcon.php"); ?>

<?php 
//4.Admin System
if(!isset($_SESSION['auth'])){
    $_SESSION['message'] = "ล็อกอินเข้าสู่ระบบ แดชบอร์ด";
    header("Location: ../login.php");
    exit(0);
}
else{
    if($_SESSION['auth_role'] != "4"){
        $_SESSION['message'] = "You are not Authorised as ADMIN";
        header("Location: ../login.php");
        exit(0);
    }
}
?>