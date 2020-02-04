const MODE = "development";
const enabledSourceMap = MODE === "development";

module.exports = {
    mode: MODE,
    entry: `./assets/js/index.js`,
    // output: {
    //     path: `${__dirname}/dist`,
    //     filename: "main.js"
    // },
    module: {
        rules: [
            {
                test: /\.scss/,
                use: [
                    "style-loader",
                    {
                        loader: "css-loader",
                        options: {
                            // url: false,
                            sourceMap: enabledSourceMap,
                            importLoaders: 2
                        }
                    },
                    {
                        loader: "postcss-loader",
                        options: {
                            sourceMap: enabledSourceMap,
                            plugins: [
                                require("autoprefixer")({
                                    grid: true
                                })
                            ]
                        }
                    },
                    {
                        loader: "sass-loader",
                        options: {
                            sourceMap: enabledSourceMap
                        }
                    }
                ]
            },
            {
                test: /\.(woff(2)?|ttf|eot|svg)(\?v=\d+\.\d+\.\d+)?$/,
                loaders: [
                    'url-loader'
                ]
                // use: [
                //     {
                //         loader: 'file-loader',
                //         options: {
                //             name: '[name].[ext]',
                //             outputPath: 'fonts/'
                //         }
                //     }
                // ]
            }
        ]
    }
}