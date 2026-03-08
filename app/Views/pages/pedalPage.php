<?php require dirname(__DIR__) . "/layouts/header.php"?>

<main class="bg-background h-screen">
    <h1>PedalPatches</h1>
    <h2>Marca: <?= $Brand ?></h2>
    <h2>Modelo: <?= $Model ?></h2>
    <h2>Data de lançamento: <?= $ReleaseDate ?></h2>
</main>

<?php require dirname(__DIR__) . "/layouts/footer.php"?>