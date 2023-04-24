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
                            <h3 class="mb-3">Forgot Password</h3>
                            <form method="post" action="process.php" class="needs-validation" novalidate>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="security_question">Security Question</label>
                                    <select class="form-control" name="security_question" id="security_question" required>
                                        <option value="">Select Security Question</option>
                                        <option value="What city were you born in?">What city were you born in?</option>
                                        <option value="What is your date of birth?">What is your date of birth?</option>
                                        <option value="What was your favorite school name?">What was your favorite school name?</option>
                                        <option value="What’s your favorite movie?">What’s your favorite movie?</option>
                                        <option value="What is your oldest sibling’s middle name?">What is your oldest sibling’s middle name?</option>
                                        <option value="What’s your favorite movie?">What’s your favorite movie?</option>
                                        <option value="What was your first car?">What was your first car?</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="security_answer">Security Answer</label>
                                    <input type="text" class="form-control" name="security_answer" id="security_answer" required>
                                </div>
                                <input type="submit" class="btn btn-success" name="send_forgot_password" value="Send">
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