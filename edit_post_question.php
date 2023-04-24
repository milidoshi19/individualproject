<?php
include('layout/auth/header.php');
$sql = "SELECT * FROM questions WHERE id = '".$_GET['id']."'";
$rs = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($rs);
?>
<div class="row g-3">
    <div class="col-12">
        <h1>Quiz</h1>
    </div>
    <div class="col-12">
        <a href="view_post_question.php" class="btn btn-primary">Back</a>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="post" action="process.php" class="needs-validation" novalidate>
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="row g-3 align-items-end">
                                <div class="col-md-12">
                                    <label for="question" class="form-label">Question</label>
                                    <input type="text" class="form-control" name="question" id="question" value="<?php echo $row['question']; ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <input type="submit" class="btn btn-success" name="update_post_question" value="Update">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('layout/auth/footer.php'); ?>