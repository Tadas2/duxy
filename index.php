<?php
$msg_arr = [
    'Welcome message NO. 1',
    'Welcome message NO. 2',
    'Welcome message NO. 3'
];
$rand_msg = ceil(date('s') / 10);
$welcome_msg = $msg_arr[$rand_msg % 3];
?>
<html>
    <head>
        <title>DUXY</title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body class="bg-about">
        <?php require 'inc/nav.php'; ?>
        <h1>Mes - 2XY</h1>
        <h2><?php print $welcome_msg; ?></h2>
    </body>
</html>