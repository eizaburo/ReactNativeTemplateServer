## ReactNativeTemplateClientと連携するLaravelの参考実装

[ReactNativeTemplateClient](https://github.com/eizaburo/ReactNativeTemplateClient/tree/withLaravel)と連携します。

* とにかくクライアント側で必要な機能を簡易実装してるだけで、実運用は全く想定していません。

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