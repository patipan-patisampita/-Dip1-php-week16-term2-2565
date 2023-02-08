<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php
if (isset($_SESSION['message']) && $_SESSION['message'] != '') {
?>
<script>
swal({
    title: "Good job!",
    text: "You clicked the button!",
    icon: "success",
    button: "Aww yiss!",
});
</script>

<?php
    unset($_SESSION['message']);
}
?>