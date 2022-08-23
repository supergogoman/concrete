const path = require('path');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

module.exports = {
  watch: true,
  module: {
      rules: [
        {
          test: /\.css$/,
          use: [
            'style-loader',
            'css-loader'
          ]
        },
        {
          test: /\.scss$/,
          use: [
               MiniCssExtractPlugin.loader,
              'css-loader',
              'sass-loader'
          ]
        }

      ]
    },
    plugins: [
      new MiniCssExtractPlugin(),
      new HtmlWebpackPlugin({
        inject: 'body',
        template: './src/index.html',
        filename: 'index.html'
      })

    ],
  mode: 'development',
  entry: './src/js/index.js',
  output: {
   filename: 'main.js',
   path: path.resolve(__dirname, 'dist'),
   clean: true,
 },
};
