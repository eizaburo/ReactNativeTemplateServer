## ReactNativeとLaravelの連携（サーバ側）

[ReactNativeで実装したクライアント](https://github.com/eizaburo/rlc_client_alpha)と連携します。

* とにかく簡易実装してるだけ。

## セットアップ

1. cloneします。
1. DBを用意します。
1. .envを編集します。DBとメールの設定が必要です。
1. composer install
1. 必要に応じてnpm install && npm run devを実行します（オプション）。
1. php artisan key:generate
1. php artisan migrate
1. php artisan serve
1. php artisan passport:keys
1. php artisan passport:client --password