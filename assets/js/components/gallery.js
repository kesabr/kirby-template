/**
 *  Gallery
 * 
 *  Builds on: 
 * 
 *  "assets/js/components/gallery.js"
 *  "assets/scss/components/gallery.scss"
 *  "site/snippets/blocks/gallery.php"
 *  "node_modules/@glidejs/glide/src/assets/sass/glide.core.scss"
 *  "node_modules/@glidejs/glide/dist/glide.min.js"
*/


// Function to handle each gallery's logic
function setupGallery() {
    const gallery = $(this);
    const gallerySlider = gallery.find('.gallery-slider');
    const galleryItems = gallery.find('.gallery-item');
    const navCircles = gallery.find('.slider-nav-circle');
    const galleryWidth = gallery.width();
    let currentIndex = 0;
    const duration = 500;
    const totalItems = galleryItems.length;

    // Duplicate gallery items for circular navigation
    const clonedItems = galleryItems.clone();
    gallerySlider.append(clonedItems);

    // Function to update the slider position and navigation circles
    function updateSlider() {
        const adjustedIndex = currentIndex % totalItems; // Adjust index to the original range
        const sliderPosition = -adjustedIndex * galleryWidth;
        gallerySlider.animate({'left': sliderPosition}, duration);
        navCircles.removeClass('active').eq(adjustedIndex).addClass('active');
    }

    // Function to navigate to the previous item
    function goToPrevItem() {
        currentIndex = (currentIndex - 1 + totalItems) % totalItems;
        updateSlider();
    }

    // Function to navigate to the next item
    function goToNextItem() {
        currentIndex = (currentIndex + 1) % totalItems;
        updateSlider();
    }

    // Change the cursor based on the hover position of the mouse
    function hoverGalleryCursor(event) {
        const clickX = event.pageX - gallery.offset().left;
        gallery.css('cursor', clickX < galleryWidth / 2 ? 'w-resize' : 'e-resize');
    }

    // Click event for gallery navigation
    function handleGalleryClick(event) {
        const clickX = event.pageX - gallery.offset().left;
        if (clickX < galleryWidth / 2) {
            goToPrevItem();
        } else {
            goToNextItem();
        }
    }

    // Click event for navigation circles
    function handleNavCircleClick(event) {
        event.stopPropagation(); // Stop the event from propagating to the gallery click handler
        currentIndex = $(this).index();
        updateSlider();
    }

    // Add event listeners to the specific gallery elements
    gallery.on('mouseenter', hoverGalleryCursor);
    gallery.on('mouseleave', () => gallery.css('cursor', 'auto'));
    gallery.off('click', handleGalleryClick).on('click', handleGalleryClick);
    navCircles.off('click', handleNavCircleClick).on('click', handleNavCircleClick);
}

export function createGalleryHandlers() {
    $('.block-type-gallery').each(setupGallery);
}
