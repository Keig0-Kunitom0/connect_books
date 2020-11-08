# connect-books

## サービスの概要
- 楽天booksAPIを使用して書籍検索、お気に入り登録できるサービスです。また、書籍に対してレビューを書き込めたり、グッド、バッドボタンを押せるなどの評価機能もついています。
- herokuURL →<https://connect-books.herokuapp.com/>

## 設計書
- https://cacoo.com/diagrams/O0x7xvpZ2DG5LmpZ-A8367.png
- https://cacoo.com/diagrams/O0x7xvpZ2DG5LmpZ-3856A.png

## 利用技術、ライブラリ
- 楽天booksAPI <https://webservice.rakuten.co.jp/api/booksbooksearch/>
- PHP
- javaScript
- Laravel
- Vue.js
- Laravel Mix

## 使用方法
1. ナビゲーションバーから書籍検索→虫眼鏡アイコンをクリック→フォームにキーワードを入力で書籍を検索。
2. 書籍のタイトルをクリックすると詳細画面へ→お気に入りボタンでお気に入り登録可能。
3. お気に入り登録した書籍はマイアカウントから見れる。

## アピールポイント
- 無限スクロール機能
- 書籍お気に入り登録機能
- 評価機能
- 他ユーザーのお気に入り登録書籍を見れる機能
- 書籍詳細画面から楽天ブックスにあるその書籍の商品ページに飛べる

