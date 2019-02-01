<?php
$about_stilius = rand (0, 1);
$history = ['blet','pz/dc'];
$paragrafas = $history [rand(0, count($history ) - 1)];
?>
<html>
    <head>
        <title>About</title>
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body class="about-<?php print $about_stilius ?>" >
        <h1>2XY</h1>
        <h2>We made it, because we needet to</h2>
        <p><?php print $paragrafas; ?></p>
    </body>
</html>