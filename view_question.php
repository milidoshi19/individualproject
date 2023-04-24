<?php
include('layout/auth/header.php');
?>
    <div class="row g-3">
        <div class="col-12">
            <h1>Quiz</h1>
        </div>
        <div class="col-12">
            <?php include('components/alert-message.php'); ?>
        </div>
        <div class="col-12">
            <?php
            $sql = "SELECT questions.id AS qid, questions.question AS qname, users.name AS teacher_name, questions.date AS qdate FROM questions
                        INNER JOIN users
                        ON questions.teacher_id = users.id
                        WHERE questions.date = '" . date("Y-m-d") . "'";
            $rs = mysqli_query($conn, $sql);
            $i = 1;
            while ($row = mysqli_fetch_array($rs)) {
                $sql_answer = "SELECT * FROM question_answers WHERE question_id = '" . $row['qid'] . "' AND student_id = '".$_SESSION['user_id']."'";
                $rs_answer = mysqli_query($conn, $sql_answer);
                $num_rows_answer = mysqli_num_rows($rs_answer);
                if ($num_rows_answer == 0) {
                ?>
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div>
                                <b>Teacher:</b> <?php echo $row['teacher_name']; ?>
                            </div>
                            <div>
                                <b>Expire Date:</b> <?php echo $row['qdate']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="process.php" class="mb-3 needs-validation" novalidate>
                            <input type="hidden" name="question_id" value="<?php echo $row['qid']; ?>">
                            <h3>Q<?php echo $i . ') ' . $row['qname']; ?></h3>
                            <textarea class="form-control mb-3" name="answer" rows="5" required></textarea>
                            <input type="submit" class="btn btn-success" name="save_answer" value="Save">
                        </form>
                    </div>
                </div>
                <?php $i++; }
            } ?>
        </div>
    </div>
<?php include('layout/auth/footer.php'); ?>