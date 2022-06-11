<!DOCTYPE html> 
<html> 
    <head> 
        <title>Login</title> 

        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/css+.css" rel="stylesheet" />
    </head> 
    <body class="masuk">  
        <form action="<?php echo base_url('login_admin/login_action'); ?>" method="post"> 
        <table> 
            
            <div class="main">
                <p class="sign" align="center">Masuk</p>
                    <form class="form1" method="post">
                    <input class="kotak" name="username" type="text" align="center" placeholder="Username">
                    <input class="kotak" name="password" type="password" align="center" placeholder="Password">
                    <button type="submit" class="submit" name="submit" align="center">Masuk</button>
            </div>
        </table>
        </form>
    </body>
</html>