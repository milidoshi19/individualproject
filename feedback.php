<?php
include('layout/auth/header.php');
?>
    <div class="row g-3">
        <div class="col-12">
            <h1>Feedback</h1>
        </div>
        <div class="col-12">
            <a href="view_post_question.php" class="btn btn-primary">Back</a>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Feedback</th>
                                <th>Student Name</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sql = "SELECT * FROM question_feedbacks WHERE feedback = '".$_GET['id']."'";
                        $rs = mysqli_query($conn,$sql);
                        $i = 1;
                        while($row = mysqli_fetch_array($rs)){
                            $sql_users = "SELECT * FROM users WHERE id = '".$row['user_id']."'";
                            $rs_users = mysqli_query($conn,$sql_users);
                            $row_users = mysqli_fetch_array($rs_users);
                        ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $row['feedback']; ?></td>
                                <td><?php echo $row_users['name']; ?></td>
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