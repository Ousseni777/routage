const webpack = require('webpack');
const WebpackDevServer = require('webpack-dev-server');
const webpackConfig = require('./webpack.config.dev');

function runFunc(err) {
  if (err) {
    console.log(err);
  }
  console.log('Listening at http://127.0.0.1:9999/index.php');
}

new WebpackDevServer(webpack(webpackConfig), {
  publicPath: '/static',
  hot: true,
  host: '0.0.0.0',
  open: 'chrome',
  after(app, server) {
  },
  headers: {
    // 'Cross-Origin-Embedder-Policy': 'unsafe-none',
    // 'Cross-Origin-Opener-Policy': 'unsafe-none',
  },
  openPage: 'http://127.0.0.1:9999/index.php',
  disableHostCheck: true,
  historyApiFallback: true,
  proxy: [{
    path: '/meeting.php',
    target: 'http://127.0.0.1:9998/'
  }]
}).listen(9999, '0.0.0.0', runFunc);

new WebpackDevServer(webpack(webpackConfig), {
  publicPath: '/static',
  hot: true,
  host: '0.0.0.0',
  after(app, server) {
  },
  headers: {
    'Cross-Origin-Embedder-Policy': 'require-corp',
    'Cross-Origin-Opener-Policy': 'same-origin',
  },
  disableHostCheck: true,
  historyApiFallback: true,
}).listen(9998, '0.0.0.0', runFunc);
