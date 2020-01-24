const MODE = "development";
const enabledSourceMap = MODE === "development";

module.exports = {
    mode: MODE,
    entry: `./src/js/index.js`,
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
                            url: false,
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
            }
        ]
    }
}