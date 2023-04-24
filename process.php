<?php
session_start();
include('connection.php');
if (isset($_POST['sign_up'])) {
    $name = $_POST['name'];
    $college = $_POST['college'];
    $select_level = $_POST['select_level'];
    $security_question = $_POST['security_question'];
    $security_answer = $_POST['security_answer'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

    $sql_exist_email = "SELECT * FROM users WHERE email = '$email'";
    $rs_exist_email = mysqli_query($conn, $sql_exist_email);
    $rs_num_rows = mysqli_num_rows($rs_exist_email);

    if ($rs_num_rows > 0) {
        $_SESSION['message_fail'] = "$email is already exists";
        header("location:register.php");
    } else {
        $sql = "INSERT INTO users (name, college, select_level, security_question, security_answer,email,password,role) VALUES('$name','$college','$select_level','$security_question','$security_answer','$email','$password','$role')";
        $rs = mysqli_query($conn, $sql);
        if ($rs) {
            $_SESSION['message_success'] = "$role account created successfully";
            header("location:login.php");
        } else {
            $_SESSION['message_fail'] = "Error " . $sql;
            header("location:login.php");
        }
    }
} elseif (isset($_POST['sign_in'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $rs = mysqli_query($conn, $sql);
    $rs_num_rows = mysqli_num_rows($rs);

    if ($rs_num_rows > 0) {
        $row = mysqli_fetch_array($rs);
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            header("location:dashboard.php");
        } else {
            $_SESSION['message_fail'] = "Invalid Password";
            header("location:login.php");
        }
    } else {
        $_SESSION['message_fail'] = "Invalid Email";
        header("location:login.php");
    }
} elseif (isset($_POST['update_profile'])) {
    $name = $_POST['name'];
    $college = $_POST['college'];
    $select_level = $_POST['select_level'];
    $email = $_POST['email'];

    $sql = "UPDATE users SET name = '$name', college = '$college', select_level = '$select_level', email = '$email' WHERE id = '" . $_SESSION['user_id'] . "'";
    $rs = mysqli_query($conn, $sql);
    if ($rs) {
        $_SESSION['message_success'] = "Profile updated successfully";
        header("location:profile.php");
    } else {
        $_SESSION['message_fail'] = "Error " . $sql;
        header("location:profile.php");
    }
} elseif (isset($_POST['update_password'])) {
    $current_password = $_POST['current_password'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql_user = "SELECT * FROM users WHERE id = '" . $_SESSION['user_id'] . "'";
    $rs_user = mysqli_query($conn, $sql_user);
    $row_user = mysqli_fetch_array($rs_user);

    if (password_verify($current_password, $row_user['password'])) {
        $sql = "UPDATE users SET password = '$password' WHERE id = '" . $_SESSION['user_id'] . "'";
        $rs = mysqli_query($conn, $sql);
        if ($rs) {
            $_SESSION['message_success'] = "Password updated successfully";
            header("location:profile.php");
        } else {
            $_SESSION['message_fail'] = "Error " . $sql;
            header("location:profile.php");
        }
    } else {
        $_SESSION['message_fail'] = "Current password is invalid";
        header("location:profile.php");
    }
} elseif (isset($_GET['delete_account_id'])) {
    $id = $_GET['delete_account_id'];

    $sql = "DELETE FROM users WHERE id = '$id'";
    $rs = mysqli_query($conn, $sql);

    $sql_question = "DELETE FROM post_view_questions WHERE user_id = '$id'";
    $rs_question = mysqli_query($conn, $sql_question);

    if ($rs) {
        session_unset();
        $_SESSION['message_success'] = "Account deleted successfully";
        header("location:login.php");
    } else {
        $_SESSION['message_fail'] = "Error " . $sql;
        header("location:dashboard.php");
    }
} elseif (isset($_POST['post_question'])) {
    $question = $_POST['question'];
    $teacher_id = $_SESSION['user_id'];
    $date = date('Y-m-d');
    $time = date('H:i:s');

    foreach ($question as $q) {
        $sql = "INSERT INTO questions(question,teacher_id,date,time) VALUES('$q','$teacher_id','$date','$time')";
        $rs = mysqli_query($conn, $sql);
    }
    if ($rs) {
        $_SESSION['message_success'] = "Question created successfully";
        header("location:view_post_question.php");
    } else {
        $_SESSION['message_fail'] = "Error " . $sql;
        header("location:post_question.php");
    }
} elseif (isset($_POST['folder'])) {
    $name = $_POST['name'];
    $notes = $_POST['notes'];
    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO folders (name, notes, user_id) VALUES ('$name', '$notes','$user_id')";
    $rs = mysqli_query($conn, $sql);
    if ($rs) {
        $_SESSION['message_success'] = "Notes created successfully";
        header("location:folder.php");
    } else {
        $_SESSION['message_fail'] = "Error " . $sql;
        header("location:folder.php");
    }
} elseif (isset($_POST['update_folder'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $notes = $_POST['notes'];

    $sql = "UPDATE folders SET name = '$name', notes = '$notes' WHERE id = '$id'";
    $rs = mysqli_query($conn, $sql);
    if ($rs) {
        $_SESSION['message_success'] = "Notes updated successfully";
        header("location:folder.php");
    } else {
        $_SESSION['message_fail'] = "Error " . $sql;
        header("location:folder.php");
    }
} elseif (isset($_GET['delete_folder_id'])) {
    $id = $_GET['delete_folder_id'];

    $sql = "DELETE FROM folders WHERE id = '$id'";
    $rs = mysqli_query($conn, $sql);
    if ($rs) {
        $_SESSION['message_success'] = "Notes deleted successfully";
        header("location:folder.php");
    } else {
        $_SESSION['message_fail'] = "Error " . $sql;
        header("location:folder.php");
    }
} elseif (isset($_POST['send_feedback'])) {
    $feedback = $_POST['feedback'];
    $question_answer_id = $_POST['question_answer_id'];
    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO question_feedbacks (feedback, question_answer_id, user_id) VALUES ('$feedback', '$question_answer_id','$user_id')";
    $rs = mysqli_query($conn, $sql);
    if ($rs) {
        $_SESSION['message_success'] = "Feedback send successfully";
        header("location:teacher_view_answer.php");
    } else {
        $_SESSION['message_fail'] = "Error " . $sql;
        header("location:teacher_view_answer.php");
    }
} elseif (isset($_POST['update_post_question'])) {
    $id = $_POST['id'];
    $question = $_POST['question'];

    $sql = "UPDATE questions SET question = '$question' WHERE id = '$id'";
    $rs = mysqli_query($conn, $sql);
    if ($rs) {
        $_SESSION['message_success'] = "Question updated successfully";
        header("location:view_post_question.php");
    } else {
        $_SESSION['message_fail'] = "Error " . $sql;
        header("location:view_post_question.php");
    }
} elseif (isset($_GET['delete_post_question_id'])) {
    $id = $_GET['delete_post_question_id'];

    $sql = "DELETE FROM questions WHERE id = '$id'";
    $rs = mysqli_query($conn, $sql);
    if ($rs) {
        $_SESSION['message_success'] = "Question deleted successfully";
        header("location:view_post_question.php");
    } else {
        $_SESSION['message_fail'] = "Error " . $sql;
        header("location:view_post_question.php");
    }
} elseif (isset($_POST['save_answer'])) {
    $answer = $_POST['answer'];
    $question_id = $_POST['question_id'];
    $student_id = $_SESSION['user_id'];

    $sql = "INSERT INTO question_answers (answer, question_id, student_id) VALUES ('$answer', '$question_id','$student_id')";
    $rs = mysqli_query($conn, $sql);
    if ($rs) {
        $_SESSION['message_success'] = "Save question successfully";
        header("location:view_question.php");
    } else {
        $_SESSION['message_fail'] = "Error " . $sql;
        header("location:view_question.php");
    }
} elseif (isset($_POST['send_question'])) {
    $question = $_POST['question'];
    $user_id = $_SESSION['user_id'];
    $date_time = date('Y-m-d H:i:s');

    $sql = "INSERT INTO post_view_questions (question, user_id, date_time) VALUES ('$question','$user_id','$date_time')";
    $rs = mysqli_query($conn, $sql);
    if ($rs) {
        header("location:discussion_board.php");
    } else {
        header("location:discussion_board.php");
    }
}
elseif (isset($_POST['send_forgot_password'])){
    $email = $_POST['email'];
    $security_question = $_POST['security_question'];
    $security_answer = $_POST['security_answer'];

    $sql_exist_email = "SELECT * FROM users WHERE email = '$email'";
    $rs_exist_email = mysqli_query($conn, $sql_exist_email);
    $num_rows_exist_email = mysqli_num_rows($rs_exist_email);

    if ($num_rows_exist_email > 0){
        $row_exist_email = mysqli_fetch_array($rs_exist_email);
        if ($row_exist_email['security_question'] == $security_question){
            if ($row_exist_email['security_answer'] == $security_answer){
                $id = $row_exist_email['id'];
                header("location:new_password.php?id=$id");
            } else {
                $_SESSION['message_fail'] = "Security answer is invalid";
                header("location:forgot_password.php");
            }
        } else {
            $_SESSION['message_fail'] = "Security question is invalid";
            header("location:forgot_password.php");
        }
    } else {
        $_SESSION['message_fail'] = "Email is invalid ";
        header("location:forgot_password.php");
    }
}
elseif (isset($_POST['new_password'])){
   $id = $_POST['id'];
   $password = password_hash($_POST['password'],PASSWORD_DEFAULT);

    $sql = "UPDATE users SET password = '$password' WHERE id = '$id'";
    $rs = mysqli_query($conn, $sql);
    if ($rs) {
        $_SESSION['message_success'] = "Password changed successfully";
        header("location:login.php");
    } else {
        $_SESSION['message_fail'] = "Error " . $sql;
        header("location:new_password.php");
    }
}
elseif (isset($_GET['delete_post_view_question_id'])){
    $id = $_GET['delete_post_view_question_id'];

    $sql = "DELETE FROM post_view_questions WHERE id = '$id'";
    $rs = mysqli_query($conn, $sql);
    if ($rs) {
        header("location:discussion_board.php");
    } else {
        header("location:discussion_board.php");
    }
}