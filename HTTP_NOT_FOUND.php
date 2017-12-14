<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="/CustomErrorPages/">
    <link rel="stylesheet" href="SASS/Main.min.css">
    <link rel="stylesheet" href="SASS/Dark.min.css">
    <title>You Shouldn't Be Here!</title>
</head>
<body>
    <div class="swing">
        <h1>Object not found!</h1>
        <h2 id='Error'>Error 404</h2>
        <section>
            <h3>Just in case you were wondering...</h3>
            <p>The requested URL was not found on this server. If you entered the URL manually please check your spelling and try again.</p>
        </section>
        <p id="info"><?php echo date("d/m/Y h:i:s A T"); ?> &bull; <?php echo date("e"); ?> &bull; Your IP <?php echo $_SERVER['REMOTE_ADDR']; ?> &bull; <a href="mailto:<?php echo $_SERVER['SERVER_ADMIN']; ?>">Contact Server Admin</a></p>
    </div>
    <footer><?php echo $_SERVER['SERVER_SIGNATURE']; ?></footer>
</body>
</html>