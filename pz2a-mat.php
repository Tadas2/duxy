<?php
$termometras = [
    'PX' => ['perejoj partrenkiau maroza', 'kompe palikau pornuha', 'ant stalo palikau pica kuria suvalgys suo', 'pradejau gerti 11 ryto', 'nepadarem pz2amato'],
    'BL' => ['vaikus nuveziau ne i ta mokykla', 'vakar uz zalgiri staciau 80 euru', 'Donatas vel prikolina apie Paula', 'picerija atveze tik 1 is 3 picu', 'mediniai prikolai sugadino nuotaika'],
    'NX' => ['pasirodo suvalgytas kivis buvo supuves pomidoras', 'CA ateme telika nors jo nenaudoja', 'nepaemem speed pointu', 'po paskaitu palikau img ir pana rado pornuha', 'vakar geriau todel reikejo vesti paskaita su akiniais nuo saules'],
    'PZ2A' => ['neradau svariu triusiku uzsidejau kojine', 'myzau viesoj vietoj pagavo mentai', 'Skvernelis kandidatuoja i prezidentus', 'jai nera 18os', 'prasileidau nuo Marelio']
];
$term_keys = array_keys($termometras);
$temp = rand(0, count($termometras) - 1);

function getClasses($termometras, $temp) {
    $classes_arr = ['green', 'gold', 'orange', 'brown'];

    for ($i = 0; $i < count($classes_arr); $i++) {
        if ($i > $temp) {
            $classes_arr[$i] = 'gray';
        };
    }

    return $classes_arr;
}

$term_classes = getClasses($termometras, $temp);
?>
<html>
    <head>
        <title>DUXY</title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body class='body-pz2a-mat'>
        <?php require 'inc/nav.php'; ?>
        <h1>PZDA-MAT</h1>
        <div class="termometras">
            <div class="green">o</div>
            <?php for ($i = 0; $i < count($termometras); $i++): ?>
                <div class="<?php print $term_classes[$i]; ?>">
                    <?php if ($temp == $i): ?>
                        <?php print $term_keys[$temp]; ?>
                    <?php endif; ?>
                </div>
            <?php endfor; ?>
        </div>
        <ul>
            <li style="color: green">let's go</li>
            <?php for ($i = 0; $i <= $temp; $i++): ?>
                <li style="color: <?php print $term_classes[$i]; ?>">
                    <?php print $termometras[$term_keys[$i]][rand(0, 4)]; ?>
                </li>
            <?php endfor; ?>
        </ul>
    </body>
</html>