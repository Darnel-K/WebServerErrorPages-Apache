<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="/CustomErrorPages/">
    <link rel="stylesheet" href="SASS/Main.min.css">
    <link rel="stylesheet" href="SASS/Dark.min.css">
    <title>Object not found!</title>
</head>
<body>
    <?php
        $date = date("d/m/Y h:i:s A T");
        $region = date("e");
        $userIP = $_SERVER['REMOTE_ADDR'];
        $admin = $_SERVER['SERVER_ADMIN'];
        $signature = $_SERVER['SERVER_SIGNATURE'];
    ?>
    <div class="swing">
        <h1>Object not found!</h1>
        <h2 id='Error'>Error 404</h2>
        <section>
            <h3>Just in case you were wondering...</h3>
            <p>The requested URL was not found on this server. If you entered the URL manually please check your spelling and try again.<br>If you think this is a server error, please contact the server admin using the link below.</p>
        </section>
        <p id="info"><?php echo $date; ?> &bull; <?php echo $region; ?> &bull; Your IP <?php echo $userIP; ?> &bull; <a href="mailto:<?php echo $admin; ?>">Contact Server Admin</a></p>
    </div>
    <footer><?php echo $signature; ?></footer>
</body>
</html>