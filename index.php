<?php
$welcome_msg = [
    'welcome 1',
    'welcome 2',
    'welcome 3'
];
$rand_msg = round(date('s')%10);
if ($rand_msg <= 10) {
    $show = 0;
} else if ($rand_msg > 10 && $rand_msg <= 20) {
    $show = 1;
} else {
    $show = 2;
};
print date('s') . '<br>';
print $rand_msg;
?>
<html>
    <head>
        <title>DUXY</title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <nav>Navigation</nav>
        <h1>TEAM NAME</h1>
        <h2><?php print $welcome_msg[$show]; ?></h2>
    </body>
</html>