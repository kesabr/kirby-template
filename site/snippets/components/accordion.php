<?php
/**
 *  The Accordion builds on: 
 * 
 *  "site/blueprint/fields/accordion.yml"
 *  "assets/scss/components/accordion.scss"
 *  "site/snippets/components/accordion.php"
*/

// Create a structure collection with `toStructure()`
$items = $page->accordion()->toStructure();
?>

<div class="accoridon-container grid-container">

    <?php foreach ($items as $item) :

        $hasImages = $item->images()->isNotEmpty() ?>

        <div class="accordion-item grid-item-50">

            <div class="item-title">
                <h4><?= $item->title() ?></h4>
                <span class="arrow" data-orientation="down"></span>
            </div>

            <div class="item-content grid-container">

                <div class="content-text <?= $hasImages ? "grid-item-50" : "grid-item-100" ?>">
                    <?= $item->text()->kirbytextinline() ?>
                </div>


                <?php
                // If there are any images, create a gallery or a single image
                if ($hasImages) : ?>

                    <div class="gallery-container grid-item-50">
                        <div class="gallery-slider">

                            <?php foreach ($item->images()->toFiles() as $image) : ?>
                                <figure class="content-image gallery-item">
                                    <img src="<?= $image->url() ?>">
                                </figure>
                            <?php endforeach ?>

                        </div>
                    </div>

                <?php endif ?>

            </div>

        </div>

    <?php endforeach ?>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const accordionItems = document.querySelectorAll('.accordion-item');

        // Add the opening and closing functionality to each accordion item

        accordionItems.forEach((item) => {
            const itemTitle = item.querySelector('.item-title');
            const itemContent = item.querySelector('.item-content');
            // Add the height of all children of the accordion items together
            const contentHeight = Array.from(itemContent.children)
                .reduce((acc, child) => acc + child.offsetHeight, 0);

            itemContent.style.setProperty('--item-height', contentHeight + 'px');

            itemTitle.addEventListener('click', function() {
                itemContent.classList.toggle('open');

                // Toggle the data-orientation of the arrow between "up" and "down"
                const arrow = itemTitle.querySelector('.arrow');
                if (itemContent.classList.contains('open')) {
                    arrow.setAttribute('data-orientation', 'up');
                } else {
                    // Reset to "down" when .open is removed
                    arrow.setAttribute('data-orientation', 'down');
                }
            });
        });
    });
</script>