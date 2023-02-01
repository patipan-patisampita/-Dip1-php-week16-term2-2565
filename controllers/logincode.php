<?php session_start(); ?>
<?php include_once('../config/dbcon.php'); ?>

<?php
if(isset($_POST['login_btn'])){
   $email =  mysqli_real_escape_string($con,$_POST['email']);
   $password =  mysqli_real_escape_string($con,$_POST['password']);

  $login_query = "SELECT * FROM users WHERE email = '$email' AND email = '$password'";
  $login_query_run = mysqli_query($con,$login_query); //ถ้ามี email และ email ในตาราง users จะตอบ true หรือ 1

  if(mysqli_num_rows($login_query_run)>0){
    foreach($login_query_run as $data ){
        $user_id = $data['id'];
        $user_name = $data['name'];
        $user_email = $data['email'];
        $role_as = $data['role_as'];
        $active = $data['active'];
    }
    $_SESSION['auth'] = true;
    $_SESSION['auth_role'] = "$role_as";
    $_SESSION['auth_active'] = "$active";
    $_SESSION['auth_user']=[
        'user_id' => $user_id,
        'user_name' => $user_name,
        'user_email' => $user_email,
    ];

    if($_SESSION['auth_role'] == 1){ //1.ผู้ดูแลร้านอาหาร
        $_SESSION['message'] = 'ยินดีต้อนรับเข้าสู่ แดชบอร์ก ผู้ดูแลร้านอาหาร';
        header('Location: ../customer/index.php');
        exit(0);
    }

  }else{
    $_SESSION['message'] = 'อีเมลล์หรือรหัสผ่านไม่ถูกต้อง';
    header('Location: ../login.php');
    exit(0);
  }
    

}else{
    $_SESSION['message'] = 'ยังไม่สามารถเข้าสู่ระบบได้';
    header('Location: ../login.php');
    exit(0);
}

?>