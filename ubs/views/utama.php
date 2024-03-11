<html>
    <head>
        <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('jquery_data_table/css/login.css');?>" />
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
    <body>
       <h1 id="heading1">Login Here</h1>
       <img src="https://img.icons8.com/cute-clipart/344/login-rounded-right.png" alt="Login Logo" style="width:100px; height:100px;">
     <div>
         <form action="" class="myForm" name="myForm" method="post">
             <div class="input-container">
                 <i class="fa fa-envelope icon"></i>
                 <input type="text" placeholder="Username" name="Username" class="input-field" value="<?= set_value('username') ?>" required>
             </div>
             <div class="input-container">
                <i class="fa fa-key icon"></i>
                <input type="password" placeholder="Password" name="password" class="input-field" value="<?= set_value('password') ?>"  required>
               </div>
            <div><input type="submit" class="bttn" value="LOGIN"></div>
         </form>
     </div>
     <a href="<?=base_url()?>index.php/home/login" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus"></i>
login</a>

    </body>
</html>