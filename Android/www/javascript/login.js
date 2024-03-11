$(document).ready(function() {
    var url = "http://server.skom/users.php";
    // var url= "http://192.168.1.64/server/users.php";
    
    $("#login").click(function(){
        var username= $.trim($("#username").val());
        var password= $.trim($("#password").val());
        var msg = document.getElementById('msg');

        var loginString ="username="+username+"&password="+password+"&login=";
        $.ajax({
            type: "POST",crossDomain: true, cache: false,
            url: url,
            data: loginString,
            success: function(data){
                if(data == "success") {
                    localStorage.loginstatus = "true";
                    window.location.href = "dashboard.html";
                }
                else if(data == "error")
                {
                  msg.style.display = 'block';
                  msg.innerHTML = "Please enter your Username/Password";
                  return false;
                }
            }
        });
    });
}); 