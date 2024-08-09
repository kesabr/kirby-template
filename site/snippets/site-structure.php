<?php 
/** @var Kirby\Cms\Page $page */
/** @var Kirby\Cms\Site $site */
/** @var Kirby\Cms\Page $slots */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site->title() ?></title>

    <?= snippet('cookieconsentCss') ?>

    <?= js('node_modules/jquery/dist/jquery.min.js') ?>

    <?= css('/assets/css/templates/main.css') ?>
    <?= css('@auto') ?>

    <?php if ($head = $slots->head()) : ?>
        <?= $head ?>
    <?php endif ?>

</head>

<body>

    <header>
        <?= snippet('parts/header') ?>

        <?php if ($header = $slots->header()) : ?>
            <?= $header ?>
        <?php endif ?>
    </header>

    <main>
        <?php if ($main = $slots->default()) : ?>
            <?= $main ?>
        <?php endif ?>
    </main>

    <footer>
        <?= snippet('parts/footer') ?>
        <?php if ($footer = $slots->footer()) : ?>
            <?= $footer ?>
        <?php endif ?>
    </footer>
    
    <?= js('/assets/js/src/main.js', ['type' => 'module']) ?>
    <?= js('@auto', ['type' => 'module']) ?>
    
    <?php if ($foot = $slots->foot()) : ?>
        <?= $foot ?>
    <?php endif ?>

    <?= snippet('cookieconsentJs') ?>
</body>

</html>