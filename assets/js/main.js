/** Import a function to create handlers for every gallery setup */
import {
    createGalleryHandlers,
} from '/assets/js/components/gallery.js';

/** Import an interactive cursor element to display text from data-cursor elements */
import {
    initTextCursor,
} from '/assets/js/components/text-cursor.js';


jQuery(function () {


    function initImportFunctions() {
        createGalleryHandlers();
        initTextCursor();
    }

    initImportFunctions();

});