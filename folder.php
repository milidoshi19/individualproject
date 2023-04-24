<?php
include('layout/auth/header.php');
?>
    <div class="row g-3">
        <div class="col-12">
            <h1 class="text-capitalize"><?php echo $row_user['role']; ?> Folder</h1>
        </div>
        <div class="col-12">
            <?php include('components/alert-message.php'); ?>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="process.php" class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Notes</label>
                            <textarea class="form-control" name="notes" id="editor" required></textarea>
                        </div>
                        <input type="submit" class="btn btn-success" name="folder" value="Save">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sql = "SELECT * FROM folders WHERE user_id = '" . $_SESSION['user_id'] . "'";
                        $rs = mysqli_query($conn, $sql);
                        $i = 1;
                        while ($row = mysqli_fetch_array($rs)) {
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                            Action
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="edit_folder.php?id=<?php echo $row['id']; ?>">Edit</a></li>
                                            <li><a class="dropdown-item" href="process.php?delete_folder_id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <?php
                            $i++;
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php include('layout/auth/footer.php'); ?>