<?php session_start(); ?>

<?php include_once("includes/header.php"); ?>
<?php include_once("includes/navbar.php"); ?>

<div class="container py-3">
    <div class="card shadow">

        <?php include_once("message.php"); ?>

        <div class="card-header bg-primary">
            <h3 class="text-white">Home Page</h3>
        </div>

        <div class="card-body">
            <h5 class="card-title">ระบบสั่งจองอาหารออนไลน์</h5>
            <p class="card-text">การเขียนโปรแกรมด้วยภาษา PHP</p>
            <a href="#" class="btn btn-primary">วท.ตราด</a>
        </div>
    </div>


</div>


<?php include_once("includes/footer.php"); ?>