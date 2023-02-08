<?php session_start(); ?>
<?php 
if(isset($_POST['logout_btn'])){
    unset($_SESSION['auth']);
    unset($_SESSION['auth_role']);
    unset($_SESSION['auth_user']);
 
    $_SESSION['message'] = "ออกจากระบบเรียบร้อย";
    header("Location: login.php");
    exit(0);
}
?>