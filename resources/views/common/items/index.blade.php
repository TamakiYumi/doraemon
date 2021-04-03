@extends('layouts.admin')
@section('title', 'ひみつ道具一覧')
@section('content')
<div class="container">
    <a href="{{ action('Admin\ItemsController@add') }}" role="button" class="btn btn-primary" >アイテムを作る</a>
　<div class="row">
    @foreach($posts as $item)
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <div class="items-img">
            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="{{ asset('storage/image/'.$item->image_path) }}">
          </div>
            <div class="card-body">
                <h2>{{ \Str::limit($item->title, 100) }}</h2>
　　　　        <p>{{ \Str::limit($item->body, 250) }}</p>
              <p class="card-text">{{ $item->description }}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">詳細</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">編集</button>
                </div>
              </div>
            </div>
        </div>
      </div>
@endforeach
  </div>
</div>
@endsection