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

## 備考

### Tag

一応Tagを切ってます。

* 1-1: 初期状態
* 1-2: passport追加
* 1-3: make:auth
* 1-4: passport設定完了（サインイン対応）
* 1-5: 登録機能実装（サインアップ対応）
* 1-6: パスワードリセット
* 1-7: メール存在確認機能

### 比較

1-4まではあまり意味がないです（細かく切りすぎました）。

* [1-1と1-4](https://github.com/eizaburo/ReactNativeTemplateServer/compare/77e49e4a96c67ed5913513617916e6e1c2a2a5a3...59ce573a095648df6f18fd78eeda57ab72d55452)
* [1-4と1-5](https://github.com/eizaburo/ReactNativeTemplateServer/compare/59ce573a095648df6f18fd78eeda57ab72d55452...33c1a30138016523a1c0f5401e98659f17e69eba)
* [1-5と1-6](https://github.com/eizaburo/ReactNativeTemplateServer/compare/33c1a30138016523a1c0f5401e98659f17e69eba...1488208c6fad8f82090bb9771ce8ca3614a0c76f)
* [1-6と1-7](https://github.com/eizaburo/ReactNativeTemplateServer/compare/1488208c6fad8f82090bb9771ce8ca3614a0c76f...ce044770df5d231efdbba5ff241888695831836e)
