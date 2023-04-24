<?php include('layout/auth/header.php'); ?>
    <div class="row g-3">
        <div class="col-12">
            <h1>Discussion</h1>
        </div>
        <div class="col-12">
            <form method="post" action="process.php" class="needs-validation" novalidate>
                <textarea class="form-control mb-3" name="question" rows="5" required></textarea>
                <input type="submit" class="btn btn-success" name="send_question" value="Send">
            </form>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Discussion Board</h5>
                </div>
                <div class="card-body">
                    <?php
                    $sql = "SELECT * FROM post_view_questions";
                    $rs = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($rs)) {
                        $sql_users = "SELECT * FROM users WHERE id = '" . $row['user_id'] . "'";
                        $rs_users = mysqli_query($conn, $sql_users);
                        $row_users = mysqli_fetch_array($rs_users);
                        ?>
                        <ul>
                            <h5>
                                <div class="dropdown">
                                    <?php echo $row_users['name'] . ' (' . $row_users['role'] . ')'; ?>
                                    <?php if ($row['user_id'] === $row_user['id']) { ?>
                                        <button class="border-0 bg-transparent" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="process.php?delete_post_view_question_id=<?php echo $row['id']; ?>">Delete</a></li>
                                        </ul>
                                    <?php } ?>
                                </div>
                            </h5>
                            <li><?php echo $row['question']; ?> <br> <small><?php echo $row['date_time']; ?></small>
                            </li>
                        </ul>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php include('layout/auth/footer.php'); ?>