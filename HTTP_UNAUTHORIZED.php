<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="/CustomErrorPages/">
    <link rel="stylesheet" href="SASS/Main.min.css">
    <link rel="stylesheet" href="SASS/Dark.min.css">
    <title>Authentication required!</title>
</head>
<body>
    <?php
        $date = date("d/m/Y h:i:s A T");
        $region = date("e");
        $userIP = $_SERVER['REMOTE_ADDR'];
        $admin = $_SERVER['SERVER_ADMIN'];
        $signature = $_SERVER['SERVER_SIGNATURE'];
        if ($_SERVER['HTTPS'] != null || "") {
            $HTTP = "https://";
        } else {
            $HTTP = "http://";
        }
    ?>
    <div class="swing">
        <h1>Authentication required!</h1>
        <h2 id='Error'>Error 401</h2>
        <section>
            <h3>Just in case you were wondering...</h3>
            <p>This server could not verify that you are authorized to access the URL "<?php echo $HTTP . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>". You either supplied the wrong credentials (e.g., bad password), or your browser doesn't understand how to supply the credentials required.<br>In case you are allowed to request the document, please check your user-id and password and try again.<br>If you think this is a server error, please contact the server admin using the link below.</p>
        </section>
        <p id="info"><?php echo $date; ?> &bull; <?php echo $region; ?> &bull; Your IP <?php echo $userIP; ?> &bull; <a href="mailto:<?php echo $admin; ?>">Contact Server Admin</a></p>
    </div>
    <footer><?php echo $signature; ?></footer>
</body>
</html>