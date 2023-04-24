<?php
$register = 'active';
include('layout/front/header.php');
?>



<!-- Header -->
<header id="header" class="ex-2-header pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php include('components/alert-message.php'); ?>
            </div>
            
            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="mb-3">Student Sign Up</h3>
                        <form method="post" action="process.php" id="form_1" class="needs-validation" novalidate>
                            <input type="hidden" name="role" value="student">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name" required>
                            </div>
                            <div class="form-group">
                                <label for="name">School/College</label>
                                <input type="text" class="form-control" name="college" id="college" required>
                            </div>
                            <div class="form-group">
                                <label for="select_level">Select Qualification Level</label>
                                <select class="form-control" name="select_level" id="select_level" required>

                                    <option value="">Select Level</option>
                                    <option value="Key Stage 3">Key Stage 3</option>
                                    <option value="GCSE">GCSE</option>
                                    <option value="A-Levels">A-Levels</option>
                                   
                                </select>
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
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" required>
                                <div id="confirmPasswordMsg"></div>
                            </div>
                            <div class="form-group">
                                <label for="confirm_password">Confirm Password</label>
                                <input type="password" class="form-control" name="confirm_password" id="confirm_password" required>
                            </div>
                            <input type="submit" class="btn btn-success" name="sign_up" value="Sign Up">
                        </form>
                    </div>
                </div>
            </div> <!-- end of col -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="mb-3">Tutor Sign Up</h3>
                        <form method="post" action="process.php" id="form_2" class="needs-validation" novalidate>
                            <input type="hidden" name="role" value="teacher">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name" required>
                            </div>
                            <div class="form-group">
                                <label for="name">School/College</label>
                                <input type="text" class="form-control" name="college" id="college" required>
                            </div>
                            <div class="form-group">
                                <label for="select_level">Select Qualification Level You Teach</label>
                                <select class="form-control" name="select_level" id="select_level" required>
                                    <option value="">Select Level</option>
                                    <option value="Key Stage 3">Key Stage 3</option>
                                    <option value="GCSE">GCSE</option>
                                    <option value="A-Levels">A-Levels</option>
                                    <option value="GCSE & A-Levels">GCSE & A-Levels</option>
                                </select>
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
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password2" required>
                                <div id="confirmPasswordMsg2"></div>
                            </div>
                            <div class="form-group">
                                <label for="confirm_password">Confirm Password</label>
                                <input type="password" class="form-control" name="confirm_password" id="confirm_password2" required>
                            </div>
                            <input type="submit" class="btn btn-success" name="sign_up" value="Sign Up">
                        </form>
                    </div>
                </div>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</header> <!-- end of ex-header -->
<!-- end of header -->

<?php include('layout/front/footer.php'); ?>