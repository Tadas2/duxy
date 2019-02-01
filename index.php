<<<<<<< HEAD
<html>
    <head>
        <title>2XY wip</title>
    </head>
    <body>
        <h1>2XY</h1>
        <h2>Cummmmming soooon</h2>
        <img src="images/wip.gif" alt="wipimage">
    </body>
</html>
=======
<?php
$msg_arr = [
    'A diplomat is a man who always remembers a womans birthday but never remembers her age.',
    'We like older women because theyve gotten used to lifes disappointments. Which means theyre ready for us.',
    'Got an e-mail today from a "bored housewife 33, looking for some action!" Ive sent her my ironing, thatll keep her busy.'
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
>>>>>>> dev
