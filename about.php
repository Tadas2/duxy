<?php
$about_stilius = rand(0, 1);
$history = ['we dont have any history cause we use incognito mode ;)','Duxy rimuojasi
    . su Dushi todel viska darom nuo dusios. 33 procentai jaunatviskumo ir 66 procentai patirties leidzia mums gerti kaip
    . Radviliskio Juozeliui bet laiku buti paskaitose kol alkotesteris rodo nulius'];
$paragrafas = $history [rand(0, count($history) - 1)];
?>
<html>
    <head>
        <title>About</title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body class="about-<?php print $about_stilius; ?>" >
        <?php require 'inc/nav.php'; ?>
        <h1>2XY</h1>
        <h2>We made it, because we needed to</h2>
        <p><?php print $paragrafas; ?></p>
    </body>
</html>