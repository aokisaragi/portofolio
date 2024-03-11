$(document).ready(function() {

    $("#display").click(function() {                

        $.ajax({
            url: "http://server.skom/list.php",
            // url: "http://192.168.1.64/server/list.php",
            type: "POST",
            cache: false,
            success: function(data){
                alert("Data Ditampilkan");
                $('#table').html(data); 
            }
        });
});
});
