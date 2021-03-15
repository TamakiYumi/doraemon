@extends('layouts.admin')
@section('title', 'ひみつ道具一覧')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1>ひみつ道具一覧</h1>
                <div class="nav-item mr-5">
                  <a href="{{ url('admin/items/create') }}" class="btn btn-md btn-primary">アイテムを作る</a>
                </div>
                <div class='items-box d-flex'>
                    @foreach($posts as $item)
                        <div class='item-container'>
                            <h2>{{ \Str::limit($item->title, 100) }}</h2>
                            <p>{{ \Str::limit($item->body, 250) }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection