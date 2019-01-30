




$(function() {
    // alert('ok');
 $("#department_1").change(function() {

        $.ajax({
            url: "pages/students/subject_ajax_lib.php",
            type: "post",
            data: { "department_1": $(this).val() },
            success: function(data) {
                $("#department_2").html(data);
                $("#department_3").html('<option>Select</option>');
                 $("#department_4").html('<option>Select</option>');
            }
        });

    });


 $("#department_2").change(function() {

        $.ajax({
            url: "pages/students/subject_ajax_lib.php",
            type: "post",
            data: { "department_2": $(this).val() },
            success: function(data) {
                $("#department_3").html(data);
                 $("#department_4").html('<option>Select</option>');
            }
        });
    });


 $("#department_3").change(function() {

        $.ajax({
            url: "pages/students/subject_ajax_lib.php",
            type: "post",
            data: { "department_3": $(this).val() },
            success: function(data) {
                $("#department_4").html(data);
            }
        });
    });

});