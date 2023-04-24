<?php if (isset($_SESSION['message_success'])) { ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong><?php echo $_SESSION['message_success']; ?></strong>
    </div>
<?php unset($_SESSION['message_success']);
}
if (isset($_SESSION['message_fail'])) { ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong><?php echo $_SESSION['message_fail']; ?></strong>
    </div>
<?php unset($_SESSION['message_fail']);
} ?>