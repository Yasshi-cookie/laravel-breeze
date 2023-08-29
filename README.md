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
laravel/breezeを使います。
まず、laravelプロジェクトを作成
```bash
$ composer create-project laravel/laravel your-project-name
```

laravel/breezeをインストール
```bash
$ composer require laravel/breeze --dev
```

```bash
$ php artisan breeze:install
```


参考：https://laravel.com/docs/10.x/starter-kits

## Tips
- TailwindCSS関連
  - @tailwindディレクティブが認識されず「Unknown at rule @tailwindcss(unknownAtRules)」と表示される
    - 参考：https://www.codeconcisely.com/posts/tailwind-css-unknown-at-rules/#installing-tailwind-css-intellisense-plugin
- MySQL関連
  - https://qiita.com/gaosan/items/be1cb7f1a097a2bbd909
  - https://qiita.com/A-Kira/items/2f8595831aeb5cfb205e
