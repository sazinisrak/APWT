@extends('layouts.app')

@section('title')
<title>News</title>
@endsection


@section('content')
<div class="row mb-2">
    

    @foreach($all_news as $news)
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">{{$news->category}}</strong>
          <h3 class="mb-0">{{$news->title}}</h3>
          <div class="mb-1 text-muted">{{$news->date}}</div>
          <p class="card-text mb-auto">{{$news->content}}</p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
         <img style = "height: 300 px; width: 300px;" src="{{$news->thumbnail}}" alt="">
        </div>
      </div>
    </div>
    @endforeach

</div>
@endsection