<?php
include('layout/auth/header.php');
?>
    <div class="row g-3">
        <div class="col-12">
            <h1>View Feedback</h1>
        </div>
        <div class="col-12">
            <?php include('components/alert-message.php'); ?>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Teacher Name</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>Feedback</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sql = "SELECT question_feedbacks.feedback AS feedback, question_answers.answer AS answer, questions.question AS question, users.name AS teacher_name  FROM question_feedbacks 
                    LEFT JOIN question_answers ON question_feedbacks.question_answer_id = question_answers.id
                    LEFT JOIN questions ON question_answers.question_id = questions.id
                    LEFT JOIN users ON question_feedbacks.user_id = users.id
                    WHERE student_id = '" . $_SESSION['user_id'] . "'";
                        $rs = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($rs)) {
                            ?>
                            <tr>
                                <td><?php echo $row['teacher_name']; ?></td>
                                <td><?php echo $row['question']; ?></td>
                                <td><?php echo $row['answer']; ?></td>
                                <td><?php echo $row['feedback']; ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php include('layout/auth/footer.php'); ?>