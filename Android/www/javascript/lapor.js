    $(document).ready(function() {
        $('#butsave').on('click', function() {
        $("#butsave").attr("disabled", "disabled");
        var rfidpet = $('#search').val();
        var rfidlok = $('#lokasi').val();
        // var petugas = $('#petugas').val();
        if(rfidpet!="" && rfidlok!=""){
            $.ajax({
                url: "http://server.skom/lapor.php",
                // url: "http://192.168.1.64/server/lapor.php",
                type: "POST",crossDomain: true, cache: false,
                data: {
                    rfidpet: rfidpet,
                    rfidlok: rfidlok
                    // petugas: petugas				
                },
                cache: false,
                success: function(dataResult){
                    var dataResult = JSON.parse(dataResult);
                    if(dataResult.statusCode==200){
                        $("#butsave").removeAttr("disabled");
                        $('#fupForm').find('input:text').val('');
                        $("#success").show();
                        $('#success').html('Data added successfully !'); 						
                    }
                    else if(dataResult.statusCode==201){
                        alert("DATA GAGAL");
                    }
                    
                }
            });
            }
            else{
                alert('DATA SUKSES DIMASUKKAN');
            }
        });
        });