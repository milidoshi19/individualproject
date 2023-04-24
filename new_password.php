<?php
$login = 'active';
include('layout/front/header.php');
?>


    <!-- Header -->
    <header id="header" class="ex-2-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <?php include('components/alert-message.php'); ?>
                    <div class="card">
                        <div class="card-body">
                            <h3 class="mb-3">Create New Password</h3>
                            <form method="post" action="process.php" id="form_1" class="needs-validation" novalidate>
                                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" required>
                                    <div id="confirmPasswordMsg"></div>
                                </div>
                                <div class="form-group">
                                    <label for="confirm_password">Confirm Password</label>
                                    <input type="password" class="form-control" name="confirm_password" id="confirm_password" required>
                                </div>
                                <input type="submit" class="btn btn-success" name="new_password" value="Change Password">
                            </form>
                        </div>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4"></div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->

<?php include('layout/front/footer.php'); ?>