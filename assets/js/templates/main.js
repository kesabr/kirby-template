/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./assets/js/src/components/text-cursor.js":
/*!*************************************************!*\
  !*** ./assets/js/src/components/text-cursor.js ***!
  \*************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   initTextCursor: () => (/* binding */ initTextCursor)\n/* harmony export */ });\nfunction initTextCursor() {\n\n    /** Create the Text Cursor */\n    const textCursor = document.createElement('div');\n    textCursor.id = 'text-cursor';\n    document.body.prepend(textCursor);\n\n    // Eventlistener on Mousemove\n    document.addEventListener('mousemove', (event) => {\n        const hoveredElement = document.elementFromPoint(event.clientX, event.clientY);\n\n        // Check for the hovered element having a data-cursor attribute\n        if (hoveredElement && hoveredElement.dataset.cursor) {\n            // show the text that is inside the data-cursor attribute\n            textCursor.innerHTML = hoveredElement.dataset.cursor;\n            // Position the cursor on the mouse position\n            textCursor.style.left = `${event.clientX}px`;\n            textCursor.style.top = `${event.clientY}px`;\n            textCursor.style.display = 'block';\n        } else {\n            textCursor.style.display = 'none';\n        }\n    });\n\n    // Disable the Crusor for the body element on hover of a cursor target element\n    document.addEventListener('mouseover', (event) => {\n        const hoveredElement = event.target;\n\n        if (hoveredElement && hoveredElement.dataset.cursor) {\n            document.body.style.cursor = 'none';\n        } else {\n            document.body.style.cursor = 'auto';\n        }\n    });\n    \n}\n\n//# sourceURL=webpack://kenan-kirby-template/./assets/js/src/components/text-cursor.js?");

/***/ }),

/***/ "./assets/js/src/main.js":
/*!*******************************!*\
  !*** ./assets/js/src/main.js ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _assets_js_src_components_text_cursor_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../../../assets/js/src/components/text-cursor.js */ \"./assets/js/src/components/text-cursor.js\");\n/** Import an interactive cursor element to display text from data-cursor elements */\n\n\n\njQuery(function () {\n\n\n    function initImportFunctions() {\n        (0,_assets_js_src_components_text_cursor_js__WEBPACK_IMPORTED_MODULE_0__.initTextCursor)();\n    }\n\n    initImportFunctions();\n\n});\n\n//# sourceURL=webpack://kenan-kirby-template/./assets/js/src/main.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./assets/js/src/main.js");
/******/ 	
/******/ })()
;