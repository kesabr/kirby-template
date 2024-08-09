<?php 

/** @var Kirby/CMS/page $page */

// If the snippet is used multiple times check if the function already exists
if (!function_exists('convertFractionToClassName')) {
    function convertFractionToClassName($fraction) {
        $fractionParts = explode('/', $fraction);

        if (count($fractionParts) === 2 && is_numeric($fractionParts[0]) && is_numeric($fractionParts[1]) && $fractionParts[1] !== 0) {
            $percentage = ($fractionParts[0] / $fractionParts[1]) * 100;
            $roundedPercentage = floor($percentage);
            return "grid-item-$roundedPercentage";
        } else {
            return 'grid-item-100';
        }
    }
}

?>

<?php foreach ($page->layout()->toLayouts() as $layout) : ?>

    <section class="grid-container" id="<?= $layout->id() ?>">
        <?php foreach ($layout->columns() as $column) : ?>

            <div class="<?= convertFractionToClassName($column->width()) ?>">
                <?= $column->blocks() ?>
            </div>

        <?php endforeach ?>

    </section>

<?php endforeach ?>