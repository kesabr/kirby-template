export function initTextCursor() {

    /** Create the Text Cursor */
    const textCursor = document.createElement('div');
    textCursor.id = 'text-cursor';
    document.body.prepend(textCursor);

    // Eventlistener on Mousemove
    document.addEventListener('mousemove', (event) => {
        const hoveredElement = document.elementFromPoint(event.clientX, event.clientY);

        // Check for the hovered element having a data-cursor attribute
        if (hoveredElement && hoveredElement.dataset.cursor) {
            // show the text that is inside the data-cursor attribute
            textCursor.innerHTML = hoveredElement.dataset.cursor;
            // Position the cursor on the mouse position
            textCursor.style.left = `${event.clientX}px`;
            textCursor.style.top = `${event.clientY}px`;
            textCursor.style.display = 'block';
        } else {
            textCursor.style.display = 'none';
        }
    });

    // Disable the Crusor for the body element on hover of a cursor target element
    document.addEventListener('mouseover', (event) => {
        const hoveredElement = event.target;

        if (hoveredElement && hoveredElement.dataset.cursor) {
            document.body.style.cursor = 'none';
        } else {
            document.body.style.cursor = 'auto';
        }
    });
    
}