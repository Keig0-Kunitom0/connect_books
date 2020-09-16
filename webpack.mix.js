const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// すべての画面に適用するものを記載
// layout.appで読み取り
mix.js('resources/js/app.js', 'public/js');

// バーコード画面で必要
// 各ブレードのsection('script')に記載。layout.appのyeildでhtmlファイルの最後に追加
mix.js('resources/js/barcode.js', 'public/js');

// 検索画面で必要
mix.js('resources/js/search.js', 'public/js');

//    .sass('resources/sass/app.scss', 'public/css');
