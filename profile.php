<?php include('layout/auth/header.php'); ?>
    <div class="row g-3">
        <div class="col-12">
            <h1>Profile</h1>
        </div>
        <div class="col-12">
            <?php include('components/alert-message.php'); ?>
        </div>
        <div class="col-12">
            <form method="post" action="process.php" class="needs-validation" novalidate>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name"
                               value="<?php echo $row_user['name']; ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="college" class="form-label">School/College</label>
                        <input type="text" class="form-control" name="college" id="college"
                               value="<?php echo $row_user['college']; ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="select_level" class="form-label">Select Level</label>
                               <select class="form-control" name="select_level" id="select_level" required>    
                               <option value="">Select Level</option>                   
                               <option value="Key Stage 3">Key Stage 3</option>
                                    <option value="GCSE">GCSE</option>
                                    <option value="A-Levels">A-Levels</option>
                                    <option value="A-Levels & GCSE">A-Levels & GCSE</option>
                                </select>
                                 </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email"
                               value="<?php echo $row_user['email']; ?>" required>
                    </div>
                    <div class="col-12">
                        <input type="submit" class="btn btn-success" name="update_profile" value="Update">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-12">
            <form method="post" action="process.php" id="form_1" class="needs-validation" novalidate>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="current_password" class="form-label">Current Password</label>
                        <input type="password" class="form-control" name="current_password" id="current_password"
                               required>
                    </div>
                    <div class="col-md-6">
                        <label for="password" class="form-label">New Password</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                        <div id="confirmPasswordMsg"></div>
                    </div>
                    <div class="col-md-6">
                        <label for="confirm_password" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="confirm_password" id="confirm_password"
                               required>
                    </div>
                    <div class="col-12">
                        <input type="submit" class="btn btn-success" name="update_password" value="Update">
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php include('layout/auth/footer.php'); ?>