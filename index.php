<?php
    session_start();
    if(isset($_SESSION["gagal"])){
        if($_SESSION["gagal"]>=3){
            echo '<h1>xaxaAkun ini di blokir</h1>';
            exit();
            
        } 
    
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form Pendaftaran</title>
        <link rel="stylesheet" href="asset/css/floating-labels.css">
        <link rel="stylesheet" href="asset/css/bootstrap.css">
        
        <link rel="icon" href="asset/image/Favicon.ico">
        
        
    </head>
    <body >
        <style>
            body{
                background-image: url('asset/image/Beautiful_Underwater_Background.jpg');
                background-size: 100%;
            }
        </style>
        
        <form class="form-signin" id="form1" name="form1" action="Home.php" method="POST">
        <div class="text-center mb-3">
            <img width="100" height="100" src="asset/image/icon-login.png">
            
        </div>
        
        <div class="form-label-group">
                <input name="email" class="form-control" type="email" id="inEmail" placeholder="Email Address" autofocus="Yes" autocomplete="No" required="Yes">
                <label for="inEmail">Email Address</label>
            </div>
                <div class="form-label-group">
                    <input class="form-control" name="password" type="password" id="inPass" placeholder="password" required="yes">
            <label for="inPass">Password</label>
        </div>
        <div class="check-box mb-3">
            <input type="checkbox">Remember me?
        </div>
        <button name="login" type="submit" class="btn btn-lg btn btn-info btn btn-block">Log In
        </button>
    </form>
        
        
    </body>
   
</html>
       
   