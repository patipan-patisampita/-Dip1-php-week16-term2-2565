<?php session_start(); ?>
<?php include_once('../config/dbcon.php'); ?>

<?php
if(isset($_POST['login_btn'])){
   $email =  mysqli_real_escape_string($con,$_POST['email']);
   $password =  mysqli_real_escape_string($con,$_POST['password']);

  $login_query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
  $login_query_run = mysqli_query($con,$login_query);
  print_r($login_query_run);
    

}else{
    $_SESSION['message'] = 'ยังไม่สามารถเข้าสู่ระบบได้';
    header('Location: ../login.php');
    exit(0);
}

?>