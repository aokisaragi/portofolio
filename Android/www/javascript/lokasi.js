//Getting value from "ajax.php".
function filll(Value) {
    //Assigning value to "lokasi" div in "lokasi.php" file.
    $('#lokasi').val(Value);
    //Hiding "lokasidisplay" div in "lokasi.php" file.
    $('#lokasidisplay').hide();
 }
 $(document).ready(function() {
    //On pressing a key on "lokasi box" in "lokasi.php" file. This function will be called.
    $("#lokasi").keyup(function() {
        //Assigning lokasi box value to javascript variable named as "name".
        var rfid = $('#lokasi').val();
        //Validating, if "name" is empty.
        if (rfid < 200) {
            //Assigning empty value to "lokasidisplay" div in "lokasi.php" file.
            $("#lokasidisplay").html("");
        }
        //If name is not empty.
        else {
            //AJAX is called.
            $.ajax({
                //AJAX type is "Post".
                type: "POST",
                //Data will be sent to "ajax.php".
                url: "http://server.skom/lokasi.php",
                // url: "http://192.168.1.64/server/lokasi.php",
                //Data, that will be sent to "ajax.php".
                data: {
                    //Assigning value of "name" into "lokasi" variable.
                    lokasi: rfid,
                },
                //If result found, this funtion will be called.
                success: function(html) {
                    //Assigning result to "lokasidisplay" div in "lokasi.php" file.
                    $("#lokasidisplay").html(html).show();
                }
            });
        }
    });
 });