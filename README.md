# セットアップ
```bash
# Dockerを起動
$ docker compose build
$ docker compose up -d
$ cp .env.local .env # 環境変数をセット
$ php artisan migrate # DBをセットアップ
# node_modulesをインストール
$ npm run build
$ npm run dev
```

# このリポジトリの作成方法
laravel/breezeを使います。（参考：https://laravel.com/docs/10.x/starter-kits ）

まず、laravelプロジェクトを作成
```bash
$ composer create-project laravel/laravel=10.* your-project-name
```

laravel/breezeをインストール
```bash
$ composer require laravel/breeze --dev
```

```bash
$ php artisan breeze:install
```

コードフォーマッターをインストール（オプション）
- Prettier（see https://prettier.io/docs/en/install）
- prettier-plugin-tailwindcss（see https://github.com/tailwindlabs/prettier-plugin-tailwindcss）
- prettier-plugin-blade（see https://www.npmjs.com/package/prettier-plugin-blade）

## Tips
- TailwindCSS関連
  - @tailwindディレクティブが認識されず「Unknown at rule @tailwindcss(unknownAtRules)」と表示される
    - 参考：https://www.codeconcisely.com/posts/tailwind-css-unknown-at-rules/#installing-tailwind-css-intellisense-plugin
- MySQL関連
  - https://qiita.com/gaosan/items/be1cb7f1a097a2bbd909
  - https://qiita.com/A-Kira/items/2f8595831aeb5cfb205e
