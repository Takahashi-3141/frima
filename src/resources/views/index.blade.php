<!-- @extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="attendance__alert">
    // メッセージ機能
</div>

<div class="attendance__content">
    <div class="attendance__panel">
        <form class="attendance__button">
            <button class="attendance__button-submit" type="submit">勤務開始</button>
        </form>
        <form class="attendance__button">
            <button class="attendance__button-submit" type="submit">勤務終了</button>
        </form>
    </div>
    <div class="attendance-table">
        <table class="attendance-table__inner">
            <tr class="attendance-table__row">
                <th class="attendance-table__header">名前</th>
                <th class="attendance-table__header">開始時間</th>
                <th class="attendance-table__header">終了時間</th>
            </tr>
            <tr class="attendance-table__row">
                <td class="attendance-table__item">サンプル太郎</td>
                <td class="attendance-table__item">サンプル</td>
                <td class="attendance-table__item">サンプル</td>
            </tr>
        </table>
    </div>
</div>
@endsection -->
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>マイページ</title>
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
</head>

<body>

    <header>
        <img src="{{ asset('images/logo.svg') }}" alt="ロゴ">
        <div class="search-box">
            <input type="text" placeholder="なにをお探しですか？">
        </div>
        <div class="nav-links">
            <a href="#">ログアウト</a>
            <a href="#">マイページ</a>
            <a href="#">出品</a>
        </div>
    </header>

    <div class="container">
        <div class="profile">
            <div class="icon"></div>
            <div class="info">
                <h2>{{ Auth::user()->name ?? 'ユーザー名' }}</h2>
                <a href="{{ route('profile.edit') }}">
                    <button class="edit-btn">プロフィールを編集</button>
                </a>
            </div>
        </div>

        <div class="tabs">
            <a href="#" class="active">出品した商品</a>
            <a href="#">購入した商品</a>
        </div>

        <div class="products">
            @foreach ($products as $product)
            <div class="product-card">
                <div class="image"></div>
                <p>{{ $product->name }}</p>
            </div>
            @endforeach
        </div>
    </div>

</body>

</html>