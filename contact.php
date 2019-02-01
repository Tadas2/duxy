<?php
$nariai = ['Xaulius nuo zodzio Xlong ;)', 'Nexas nuo zodziu Nice looking man', 'Yadas nuo zodziu you wooden be surprised if we won'];
shuffle($nariai);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/css/main.css">
        <title></title>
    </head>
    <body class="backgroundimg">
        <h1 class="hashas">Makers of pz2a-mat</h1>   
        <ul>
            <?php foreach ($nariai as $value): ?>
                <li><?php print $value; ?></li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>