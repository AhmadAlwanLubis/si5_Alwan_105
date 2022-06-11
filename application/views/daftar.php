<!DOCTYPE html> 
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="css/css+.css" rel="stylesheet" />
    <title>daftar</title>
</head>

<body>
    <div class="mdafg">
        <p class="sign" align="center">Daftar</p>
        <form class="form1" action="<?php echo base_url('register/proses'); ?>" method="post">
            <input class="kotak" name="username" type="text" align="center" placeholder="Username">
            <input class="kotak" name="email" type="email" align="center" placeholder="email">
            <input class="kotak" name="password" type="password" align="center" placeholder="password">

            <button type="submit" class="submit" name="submit" align="center">Daftar</a></button>
            <a href="<?php echo site_url('login') ?>">
                <p>Masuk</p>
            </a>
        </form>
    </div>
</body>

</html>