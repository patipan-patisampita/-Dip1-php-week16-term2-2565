<?php session_start(); ?>
<?php include_once('../config/dbcon.php'); ?>

<?php
if(isset($_POST['login_btn'])){
  echo $email =  mysqli_real_escape_string($con,$_POST['email']);
  echo $password =  mysqli_real_escape_string($con,$_POST['password']);

  $login_query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
  $login_query_run = mysqli_query($con,$login_query);
    

}else{
    $_SESSION['message'] = 'ยังไม่สามารถเข้าสู่ระบบได้';
    header('Location: ../login.php');
    exit(0);
}

?>