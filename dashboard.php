<?php 
include('layout/auth/header.php');
if($row_user['role'] == 'teacher'){
    include('teacher.php');
}
if($row_user['role'] == 'student'){
    include('student.php');
}
?>
<?php include('layout/auth/footer.php'); ?>