<?php
$termometras = [
    'PX' => ['perejoj partrenkiau maroza', 'kompe palikau pornuha', 'ant stalo palikau pica kuria suvalgys suo', 'pradejau gerti 11 ryto', 'nepadarem pz2amato'],
    'BL' => ['vaikus nuveziau ne i ta mokykla', 'vakar uz zalgiri staciau 80 euru', 'Donatas vel prikolina apie Paula', 'picerija atveze tik 1 is 3 picu', 'mediniai prikolai sugadino nuotaika'],
    'NX' => ['pasirodo suvalgytas kivis buvo supuves pomidoras', 'CA ateme telika nors jo nenaudoja', 'nepaemem speed pointu', 'po paskaitu palikau img ir pana rado pornuha', 'vakar geriau todel reikejo vesti paskaita su akiniais nuo saules'],
    'PZ2A' => ['neradau svariu triusiku uzsidejau kojine', 'myzau viesoj vietoj pagavo mentai', 'Skvernelis kandidatuoja i prezidentus', 'jai nera 18os', 'prasileidau nuo Marelio']
];
$term_rand = rand(0, count($termometras) - 1);
$names = array_keys($termometras);
?>
<html>
    <head>
        <title>DUXY</title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <?php require 'inc/nav.php'; ?>
        <h1>PZDA-MAT</h1>
        <div class="termometras">
            <div class="padala-start"></div>
            <?php foreach ($termometras as $key => $value): ?>
                <?php if ($key == $names[$term_rand]): ?>
                    <div class="padala <?php print $key; ?>"><?php print $names[$term_rand]; ?></div>
                <?php else: ?>
                    <div class="padala <?php print $key; ?>"></div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
        <ul>
            <li>dienos pradžia</li>
            <?php for ($i = 0; $i <= $term_rand; $i++): ?>
                <li><?php print $termometras[$names[$i]][rand(0, 4)]; ?></li>
            <?php endfor; ?>
        </ul>
    </body>
</html>