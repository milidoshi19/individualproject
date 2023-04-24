<?php
include('layout/auth/header.php');

$sql = "SELECT * FROM folders WHERE id = '" . $_GET['id'] . "'";
$rs = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($rs);
?>
    <div class="row g-3">
        <div class="col-12">
            <h1 class="text-capitalize">Edit <?php echo $row_user['role']; ?> Folder</h1>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="process.php" class="needs-validation" novalidate>
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Notes</label>
                            <textarea class="form-control" name="notes" id="editor" required><?php echo $row['notes']; ?></textarea>
                        </div>
                        <input type="submit" class="btn btn-success" name="update_folder" value="Update">
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include('layout/auth/footer.php'); ?>