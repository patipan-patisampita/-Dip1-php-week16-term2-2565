<?php session_start(); ?>

<?php
if (isset($_SESSION['auth'])) {
   if(isset($_SESSION['message'])){
        $_SESSION['message'] = "คุณล็อกอินเข้าสู่ระบบ เรียบร้อยแล้ว";
   }
    header("Location: index.php");
    exit(0);
}
?>

<?php include_once("includes/header.php"); ?>
<?php include_once("includes/navbar.php"); ?>

<div class="container my-3">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">

                <?php include_once('message.php'); ?>

                <div class="card-header bg-success fs-5 text-white">
                    ล็อกอินเข้าสู่ระบบ
                </div>
                <div class="card-body">
                    <form action="controllers/logincode.php" method="post">
                        <div class="mb-3">
                            <label class="fs-5">อีเมลล์</label>
                            <input type="text" name="email" class="form-control" placeholder="Enter Your Email">
                        </div>

                        <div class="mb-3">
                            <label class="fs-5">รหัสผ่าน</label>
                            <input type="text" name="password" class="form-control" placeholder="Enter Your Password">
                        </div>

                        <div class="mb-3">
                            <button type="submit" name="login_btn" class="btn btn-success">เข้าสู่ระบบ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once("includes/footer.php"); ?>