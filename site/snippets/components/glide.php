<?php 

/**
 *  Gallery – with glide.js
 * 
 *  Builds on: 
 * 
 *  "assets/scss/components/gallery.scss"
 *      "node_modules/@glidejs/glide/src/assets/sass/glide.core.scss"

 *  "site/snippets/blocks/gallery.php"

 *  "site/snippets/components/glide.php"
 *      "node_modules/@glidejs/glide/dist/glide.min.js"
*/

?>

<?= js('/node_modules/@glidejs/glide/dist/glide.min.js') ?>

<script>
    /* find all elements that get initialized with the class ".glide" */
    const sliders = document.querySelectorAll('.glide')

    /* set configuration settings for the specific type of glide slider */
    const config = {
        type: 'carousel', // 'carousel'
        keyboard: false, // for several glide slider it should be disabled
        // startAt: 0,
        perView: 3,
        // focusAt: center, // or 'center'
        rewind: true, // go back to start/end
        // breakpoints: {
        //     800: {
        //         perView: 1
        //     },
        //     480: {
        //         perView: 1
        //     }
        // }
    }

    /* Loop through all .glide elements and mount() each */
    sliders.forEach(item => {
        new Glide(item, config).mount();
    });

</script>