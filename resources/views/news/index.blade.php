@extends('layouts.app')

@section('content')
    <div class="container mt-3 mb-3">
        <div class="row">
            <div>
                <h2>News</h2>
                <a class="btn btn-success" href="{{ route('news.create') }}"> Add News</a>
            </div>
        </div>

        @include('statuses.success')
        @include('statuses.error')

        <div class="row mt-3">
            @foreach ($newses as $news)
                <div class="card mr-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Title: {{ $news->title }}</h5>
                        <p class="card-text">Body: {{ $news->body }}</p>
                        <p class="card-text">
                            <form method="POST" action="{{ route('comments.store', ['news' => $news->_id])}}">
                                @csrf
                                <input class="form-control mr-3" type="text" name="comment" id="">
                                <button class="btn btn-success mt-3">Comment</button>
                            </form>
                        </p>
                        @if ($news->comments !== null)
                            @foreach ($news->comments as $comment)
                                <div> <i class="fa fa-comment text-secondary"></i> <strong class="text-primary">{{ $comment->user->name }}</strong> : {{ $comment->comment }} <a class="mr-2" href="{{route('comments.edit', ['comment' => $comment->_id])}}">edit</a></div>
                            @endforeach
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection