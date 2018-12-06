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
    <link rel="stylesheet" href="CSS/Main.min.css">
    <!-- <link rel="stylesheet" href="CSS/Light.min.css"> -->
    <link rel="stylesheet" href="CSS/Dark.min.css">
    <title><?php echo $ErrorTitle; ?></title>
</head>
<body>
    <div id="Container">
        <div class="swing">
            <h1><?php echo $ErrorTitle; ?></h1>
            <h2 id='Error'>Error <?php echo $ResponseCode; ?></h2>
            <section>
                <h3>Just in case you were wondering...</h3>
                <p><?php echo $ErrorMessage; ?><br><br>If you think this is a server error, please contact the server Admin using the link below.</p>
            </section>
            <p id="info"><?php echo $Date; ?> &bull; <?php echo $Region; ?> &bull; Your IP <?php echo $UserIP; ?> &bull; <a href="mailto:<?php echo $Admin; ?>?subject=Error <?php echo $ResponseCode; ?> @ <?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">Contact Server Admin</a></p>
        </div>
    </div>
    <footer><?php echo $Signature; ?><p id='Copyright'>Copyright &copy; <?php echo date('Y'); ?> Darnel-K</p></footer>
</body>
</html>
