"use strict"

const path = require('path');

module.exports = {
    mode: "development",
    entry: path.resolve('resources', 'js', 'app'),
    devtool: 'source-map',
    output: {
        path: path.resolve(__dirname, 'public', 'js'),
        filename: 'app.js'
    },
    module: {
        rules: [{
            test: /\.scss$/,
            use: [
                'style-loader',
                'css-loader',
                'sass-loader'
            ]
        }]
    }
};