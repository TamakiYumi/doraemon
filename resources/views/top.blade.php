@extends('layouts.app')
@section('title', 'ドラ実 TOP ページ')
@section('content')
<div class="main">
    <div class="container">
        <div class="card-contents">
            <h2 class="text-title">製作者</h2>
            <ul class="information-list">
            　<li>2020/12/01 Tech Boost を受講はじめました</li>
            　<li>2021/01/01 2021年を迎えました</li>
            　<li>2021/04/01 転職活動をはじめました</li>
            </ul>
        </div>
        <div class="card-contents">
            <h2 class="text-title">アイテム</h2>
            <div class="staff-list-area">
                <div class="staff-list">
                    <img src="./staff_01.jpg" class="staff-image">
                    <p class="staff-name">どこでもドア</p>
                </div>
                <div class="staff-list">
                    <img src="./staff_02.jpg" class="staff-image">
                    <p class="staff-name">タケコプター</p>
                </div>
                <div class="staff-list">
                    <img src="./staff_03.jpg" class="staff-image">
                    <p class="staff-name">タイムマシン</p>
                </div>
            </div>
        </div>
        <div class="card-contents">
          <h2 class="text-title">アクセス</h2>
          <p>東京都渋谷区円山町28-3<br>いちご渋谷道玄坂ビル5F</p>
          <p>渋谷駅より徒歩7分</p>
        </div>
    </div>
</div>
@endsection