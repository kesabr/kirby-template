const path = require('path');

module.exports = {
    mode: 'development',

    entry: {
        main: [
            './assets/js/src/main.js',
        ],
    },
    
    output: {
        filename: '[name].js',
        path: path.resolve(__dirname, './assets/js/templates'),
    },
};