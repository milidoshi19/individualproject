<?php include('layout/auth/header.php'); ?>
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
                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="row g-3 align-items-end">
                                <div class="col-md-8">
                                    <label for="question" class="form-label">Question</label>
                                    <input type="text" class="form-control" name="question[]" id="question" required>
                                </div>
                                <div class="col-md-4">
                                    <a href="javascript:void(0)" class="btn btn-success" id="addMore">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12" id="moreData"></div>
                        <div class="col-12">
                            <input type="submit" class="btn btn-success" name="post_question" value="Save">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('layout/auth/footer.php'); ?>