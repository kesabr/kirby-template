<?php

use Kirby\Cms\Html;

/** @var \Kirby\Cms\Block $block */
$caption = $block->caption();
$crop = $block->crop()->isTrue();
$ratio = $block->ratio()->or('auto');
 
// Set the default ratio to 3/2 if it is 'auto'
$ratio = ($ratio == 'auto') ? '3/2' : $ratio;

$galleryImages = $block->images()->toFiles();

// Generate a unique identifier for each block
$uniqueId = 'block_' . uniqid();

?>

<div id="<?= $uniqueId ?>" class="block block-type-<?= $block->type() ?> grid-span-16" <?= ($ratio != 'auto') ? Html::attr(['data-ratio' => $ratio, 'data-crop' => $crop], null, ' ') : '' ?>>
    <div class="gallery-slider">
        <?php foreach ($galleryImages as $image) : ?>
            <?php $index = $galleryImages->indexOf($image) ?>
            <figure class="gallery-item <?= $index === 0 ? 'active' : '' ?>">
                <img src="<?= $image->url() ?>" alt="" loading="lazy">
            </figure>
        <?php endforeach ?>
    </div>

    <div class="slider-nav">
        <?php foreach ($galleryImages as $image) : ?>
            <?php
            $index = $galleryImages->indexOf($image);
            ?>
            <div class="slider-nav-circle <?= $index === 0 ? 'active' : '' ?>" data-index="<?= $index ?>"></div>
        <?php endforeach ?>
    </div>

</div>

<script>
    // Wrap the gallery logic in a function
    function initGallery(galleryId) {
        // Get the gallery element
        let gallery = document.getElementById(galleryId);

        // Get the value of the data-ratio attribute
        let dataRatio = gallery.getAttribute('data-ratio');

        // Check if data-ratio is set and valid
        if (dataRatio && /^\d+\/\d+$/.test(dataRatio)) {
            // Set the aspect-ratio CSS property for the gallery
            gallery.style.aspectRatio = dataRatio;

            // Select all elements with the class "gallery-item" inside the gallery
            let galleryItems = gallery.querySelectorAll('.gallery-item');

            // Set the aspect-ratio CSS property for each gallery item
            galleryItems.forEach(item => {
                item.style.aspectRatio = dataRatio;
            });
        }
    }

    // Call the function to initialize each gallery
    initGallery('<?= $uniqueId ?>');
</script>
