const path = require( 'path' );
const MiniCssExtractPlugin = require( "mini-css-extract-plugin" );
const FixStyleOnlyEntriesPlugin = require( "webpack-fix-style-only-entries" );
const { CleanWebpackPlugin } = require( 'clean-webpack-plugin' );

const webpackConfig = { devtool: false };

webpackConfig.output = {
    filename: '[name].js',
    path: path.resolve( __dirname, 'html/dist' ),
};

webpackConfig.module = {
    rules: [
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
};

webpackConfig.plugins = [
    new CleanWebpackPlugin(),
    new FixStyleOnlyEntriesPlugin(),
    new MiniCssExtractPlugin(
        {
            filename: "[name].css",
            ignoreOrder: false,
        }
    ),
];

webpackConfig.watchOptions = {
    aggregateTimeout: 200,
    poll: 1000,
};

module.exports = webpackConfig;