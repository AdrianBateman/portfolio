const path = require( 'path' );
const MiniCssExtractPlugin = require( "mini-css-extract-plugin" );
const FixStyleOnlyEntriesPlugin = require( "webpack-fix-style-only-entries" );
const { CleanWebpackPlugin } = require( 'clean-webpack-plugin' );
const { defineConfig } = require( '@vue/cli-service' );
const { VueLoaderPlugin } = require( 'vue-loader' );


const webpackConfig = { devtool: false };

webpackConfig.output = {
    filename: '[name].js',
    path: path.resolve( __dirname, 'html/dist' ),
};

webpackConfig.module = {
    rules: [
        {
            test: /\.vue$/,
            loader: 'vue-loader',
        },
        {
            test: /\.s[ac]ss$/i,
            use: [
                this.mode === 'development' ? "style-loader" : MiniCssExtractPlugin.loader,
                "css-loader",
                "sass-loader",
            ],
        },
    ],
};

webpackConfig.entry = {
    style: './src/style/style.scss',
    script: './src/index.js',
    wizzyPop: './src/wizzy-pop/index.js',
};

webpackConfig.plugins = [
    new VueLoaderPlugin(),
    new CleanWebpackPlugin(),
    new FixStyleOnlyEntriesPlugin(),
    new MiniCssExtractPlugin(
        {
            filename: "[name].css",
            chunkFilename: '[name].css',
            ignoreOrder: false,
        }
    ),
];

webpackConfig.watchOptions = {
    aggregateTimeout: 200,
    poll: 1000,
};

module.exports = webpackConfig;