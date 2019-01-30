     $(function() {



    $("#division").change(function() {
        $.ajax({
            url: "pages/students/address_lib.php",
            type: "post",
            data: { "division": $(this).val() },
            success: function(data) {
                $("#district").html(data);
            }
        });
    });


    $("#district").change(function() {
        $.ajax({
            url: "pages/students/address_lib.php",
            type: "post",
            data: { "district": $(this).val() },
            success: function(data) {
                $("#police_station").html(data);
            }
        });
    });


    $("#police_station").change(function() {
        $.ajax({
            url: "pages/students/address_lib.php",
            type: "post",
            data: { "police_station": $(this).val() },
            success: function(data) {
                $("#post_office").html(data);
            }
        });
    });

    //for present address

    $("#pre_division").change(function() {
        $.ajax({
            url: "pages/students/address_lib.php",
            type: "post",
            data: { "division": $(this).val() },
            success: function(data) {
                $("#pre_district").html(data);
            }
        });
    });


    $("#pre_district").change(function() {
        $.ajax({
            url: "pages/students/address_lib.php",
            type: "post",
            data: { "district": $(this).val() },
            success: function(data) {
                $("#pre_police_station").html(data);
            }
        });
    });


    $("#pre_police_station").change(function() {
        $.ajax({
            url: "pages/students/address_lib.php",
            type: "post",
            data: { "police_station": $(this).val() },
            success: function(data) {
                $("#pre_post_office").html(data);
            }
        });
    });

});

    