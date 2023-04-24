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
                        <h3 class="mb-3">Login</h3>
                        <form method="post" action="process.php" class="needs-validation" novalidate>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                            <div class="form-group">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <label for="password">Password</label>
                                    </div>
                                    <div>
                                        <a href="forgot_password.php" class="text-info text-decoration-none">Forgot Password</a>
                                    </div>
                                </div>
                                <input type="password" class="form-control" name="password" id="password" required>
                            </div>
                            <input type="submit" class="btn btn-success" name="sign_in" value="Sign In">
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