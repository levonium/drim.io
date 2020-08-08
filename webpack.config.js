module.exports = {
    mode: process.env.ELEVENTY_ENV || 'development',
    entry: {
        app: __dirname + '/src/_assets/js/app.js',
    },
    output: {
        path: __dirname + '/src/static',
        filename: 'app.js',
    },
    module: {
        rules: [{
                test: /\.js$/,
                exclude: /node_modules/,
                loader: "babel-loader"
            }
        ]
    }
};
