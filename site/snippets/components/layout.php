<?php 

@include_once (__DIR__ . '/../functions/fraction-to-class.php');

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