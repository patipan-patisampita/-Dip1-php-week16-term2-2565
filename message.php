<?php 
if(isset($_SESSION['message'])){
    print($_SESSION['message']);
    unset($_SESSION['message']);
}
?>