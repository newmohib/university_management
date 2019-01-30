$(function() {



    $("#division").change(function() {
        $.ajax({
            url: "address_lib.php",
            type: "post",
            data: { "division": $(this).val() },
            success: function(data) {
                $("#district").html(data);
            }
        });
    });



    $("#district").change(function() {
        $.ajax({
            url: "address_lib.php",
            type: "post",
            data: { "district": $(this).val() },
            success: function(data) {
                $("#police_station").html(data);
            }
        });
    });


});