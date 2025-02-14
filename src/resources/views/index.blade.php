@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="shops-list">
  <div class="card">
    <div class="card_image">
    </div>
    <div class="card_content">
      <div class="shopname">仙人</div>
      <div class="region">東京</div>
      <div class="genre">寿司</div>

      <div class="card_action">
        <button class="detail">詳しく見る</button>

        <button class="favorite">♡</button>

      </div>
    </div>
  </div>

  <div class="card">
    <div class="card_image">
    </div>
    <div class="card_content">
      <div class="shopname">仙人</div>
      <div class="region">東京</div>
      <div class="genre">寿司</div>

      <div class="card_action">
        <button class="detail">詳しく見る</button>

        <button class="favorite">♡</button>

      </div>
    </div>
  </div>

  <div class="card">
    <div class="card_image">
    </div>
    <div class="card_content">
      <div class="shopname">仙人</div>
      <div class="region">東京</div>
      <div class="genre">寿司</div>

      <div class="card_action">
        <button class="detail">詳しく見る</button>

        <button class="favorite">♡</button>

      </div>
    </div>
  </div>
</div>


@endsection