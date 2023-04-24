<?php
include('layout/auth/header.php');
?>
    <div class="row g-3">
        <div class="col-12">
            <h1>View Answer</h1>
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
                            <th>#</th>
                            <th>Student</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>Feedback</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sql = "SELECT question_answers.id AS id, question_answers.answer AS answer, questions.question AS question, users.name AS user_name, question_answers.id AS question_answer_id
                                FROM question_answers 
                                LEFT JOIN questions ON question_answers.question_id = questions.id
                                LEFT JOIN users ON question_answers.student_id = users.id
                                WHERE teacher_id = '" . $_SESSION['user_id'] . "' ORDER BY question_answers.id desc";
                        $rs = mysqli_query($conn, $sql);
                        $i = 1;
                        while ($row = mysqli_fetch_array($rs)) {
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $row['user_name']; ?></td>
                                <td><?php echo $row['question']; ?></td>
                                <td><?php echo $row['answer']; ?></td>
                                <td>
                                    <div>
                                        <a href="javascript:void(0)" class="btn btn-primary btn-sm"
                                           data-bs-toggle="modal" data-bs-target="#feedback<?php echo $row['question_answer_id']; ?>">Feedback</a>

                                        <!-- Modal -->
                                        <div class="modal fade" id="feedback<?php echo $row['question_answer_id']; ?>" tabindex="-1"
                                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form method="post" action="process.php" class="needs-validation"
                                                          novalidate>
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                                Feedback</h1>
                                                            <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <input type="hidden" name="question_answer_id"
                                                                   value="<?php echo $row['question_answer_id']; ?>">
                                                            <label for="feedback" class="form-label">Feedback</label>
                                                            <textarea class="form-control" name="feedback" id="feedback"
                                                                      rows="5" required></textarea>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close
                                                            </button>
                                                            <button type="submit" class="btn btn-primary"
                                                                    name="send_feedback">Send
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php $i++;
                        } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php include('layout/auth/footer.php'); ?>