@extends('layouts.app')

@section('content')
<h2>プロフィール設定</h2>

<form action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        @if ($user->avatar)
        <img src="{{ asset('storage/' . $user->avatar) }}" style="width: 100px; height: 100px; border-radius: 50%;">
        @else
        <div style="width:100px; height:100px; border-radius:50%; background:#ccc;"></div>
        @endif
    </div>
    <label>画像を選択する</label>
    <input type="file" name="avatar">

    <label>ユーザー名</label>
    <input type="text" name="name" value="{{ old('name', $user->name) }}">

    <label>郵便番号</label>
    <input type="text" name="postcode" value="{{ old('postcode', $user->postcode) }}">

    <label>住所</label>
    <input type="text" name="address" value="{{ old('address', $user->address) }}">

    <label>建物名</label>
    <input type="text" name="building" value="{{ old('building', $user->building) }}">

    <button type="submit">更新する</button>
</form>
@endsection