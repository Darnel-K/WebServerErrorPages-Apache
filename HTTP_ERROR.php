<?php
    $Date = date("d/m/Y h:i:s A T");
    $Region = date("e");
    $UserIP = $_SERVER['REMOTE_ADDR'];
    $Admin = $_SERVER['SERVER_ADMIN'];
    $Signature = $_SERVER['SERVER_SIGNATURE'];
    if (isset($_SERVER['REDIRECT_STATUS'])) {
        $ResponseCode = $_SERVER['REDIRECT_STATUS'];
    } else {
        $ResponseCode = http_response_code();
    }
    require 'Codes.php';
    if (isset($ErrorCodes[$ResponseCode])) {
        $ErrorTitle = $ErrorCodes[$ResponseCode][0];
        $ErrorMessage = $ErrorCodes[$ResponseCode][1];
    } else {
        $ErrorTitle="Unknown Error!";
        $ErrorMessage="An unknown error has occurred.";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="/Error/">
    <link rel="stylesheet" href="SASS/Main.min.css">
    <!-- <link rel="stylesheet" href="SASS/Light.min.css"> -->
    <link rel="stylesheet" href="SASS/Dark.min.css">
    <title><?php echo $ErrorTitle; ?></title>
</head>
<body>
    <div class="swing">
        <h1><?php echo $ErrorTitle; ?></h1>
        <h2 id='Error'>Error <?php echo $ResponseCode; ?></h2>
        <section>
            <h3>Just in case you were wondering...</h3>
            <p><?php echo $ErrorMessage; ?><br><br>If you think this is a server error, please contact the server Admin using the link below.</p>
        </section>
        <p id="info"><?php echo $Date; ?> &bull; <?php echo $Region; ?> &bull; Your IP <?php echo $UserIP; ?> &bull; <a href="mailto:<?php echo $Admin; ?>">Contact Server Admin</a></p>
    </div>
    <footer><?php echo $Signature; ?></footer>
</body>
</html>