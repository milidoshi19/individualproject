<?php
include('layout/auth/header.php');
?>
<div class="row g-3">
    <div class="col-12">
        <h1>Quiz </h1>
    </div>
    <div class="col-12">
        <?php include('components/alert-message.php'); ?>
    </div>
    <div class="col-12">
        <a href="create_post_question.php" class="btn btn-primary">Create</a>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Question</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM questions WHERE teacher_id = '" . $_SESSION['user_id'] . "' ORDER BY id desc";
                        $rs = mysqli_query($conn, $sql);
                        $i = 1;
                        while ($row = mysqli_fetch_array($rs)) {
                        ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $row['question']; ?></td>
                                <td><?php echo $row['date']; ?></td>
                                <td><?php echo $row['time']; ?></td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Action
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="edit_post_question.php?id=<?php echo $row['id']; ?>">Edit</a></li>
                                            <li><a class="dropdown-item" href="process.php?delete_post_question_id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a></li>
                                            
                                        </ul>
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