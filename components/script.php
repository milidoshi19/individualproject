<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();

    $(document).on('submit', '#form_1', function() {
        const password = $("#password").val();
        const confirm_password = $("#confirm_password").val();
        if (password != confirm_password) {
            $("#confirmPasswordMsg").html('<small class="text-danger">Password & Confirm Password do not match.</small>');
            return false;
        }
    });

    $(document).on('submit', '#form_2', function() {
        const password = $("#password2").val();
        const confirm_password = $("#confirm_password2").val();
        if (password != confirm_password) {
            $("#confirmPasswordMsg2").html('<small class="text-danger">Password & Confirm Password do not match.</small>');
            return false;
        }
    });

    var loop_count = 1;

    $(document).on('click','#addMore',function(){
        var html = '<div class="row g-3 align-items-end mb-3" id="moreDataID_'+loop_count+'"><div class="col-md-8"><label for="question" class="form-label">Question</label><input type="text" class="form-control" name="question[]" id="question" required></div><div class="col-md-4"><a href="javascript:void(0)" class="btn btn-danger" onclick="removeQuestion('+loop_count+')">-</a></div></div>';
        $("#moreData").append(html);
        loop_count++;
    });

    function removeQuestion(loop_count){
        $("#moreDataID_"+loop_count).remove();
    }

    CKEDITOR.replace( 'editor' );
</script>