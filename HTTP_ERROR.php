<?php
    $ResponseCode = $_SERVER['REDIRECT_STATUS'];
    require 'Codes.php';
    $ErrorTitle = $ErrorCodes[$ResponseCode][0];
    $ErrorMessage = $ErrorCodes[$ResponseCode][1];
    $date = date("d/m/Y h:i:s A T");
    $region = date("e");
    $userIP = $_SERVER['REMOTE_ADDR'];
    $admin = $_SERVER['SERVER_ADMIN'];
    $signature = $_SERVER['SERVER_SIGNATURE'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="/Error/">
    <link rel="stylesheet" href="SASS/Main.min.css">
    <link rel="stylesheet" href="SASS/Dark.min.css">
    <title><?php echo $ErrorTitle; ?></title>
</head>
<body>
    <div class="swing">
        <h1><?php echo $ErrorTitle; ?></h1>
        <h2 id='Error'>Error <?php echo $ResponseCode; ?></h2>
        <section>
            <h3>Just in case you were wondering...</h3>
            <p><?php echo $ErrorMessage; ?><br><br>If you think this is a server error, please contact the server admin using the link below.</p>
        </section>
        <p id="info"><?php echo $date; ?> &bull; <?php echo $region; ?> &bull; Your IP <?php echo $userIP; ?> &bull; <a href="mailto:<?php echo $admin; ?>">Contact Server Admin</a></p>
    </div>
    <footer><?php echo $signature; ?></footer>
</body>
</html>