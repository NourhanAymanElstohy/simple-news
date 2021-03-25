@extends('layouts.app')

@section('content')
    <div class="container mt-3 mb-3">
        <div class="row justify-content-center">
            <div>
                <h2>Latest News</h2>
            </div>
        </div>

        @include('statuses.success')
        @include('statuses.error')

        <div class="row mt-3 justify-content-center">
            @foreach ($newses as $news)
                <div class="card mr-3 mt-3 col-8" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Title: {{ $news->title }}</h5>
                        <p class="card-text">Body: {{ $news->body }}</p>
                        <p class="card-text">
                            <form method="POST" action="{{ route('comments.store', ['news' => $news->_id])}}">
                                @csrf
                                <input class="form-control mr-3" type="text" name="comment" id="" required>
                                <button class="btn btn-success mt-3">Comment</button>
                            </form>
                        </p>
                        @if ($news->comments !== null)
                            @foreach ($news->comments as $comment)
                                <div> 
                                    <i class="fa fa-comment text-secondary"></i> <strong class="text-primary">{{ $comment->user->name }}</strong> : {{ $comment->comment }} 
                                    @if (Auth::id() == $comment->user_id)
                                        <a class="mr-2" data-toggle="modal" data-target="#editComment-{{ $comment->_id }}" style="cursor: pointer">edit</a>
                                        <a class="mr-2" data-toggle="modal" data-target="#deleteComment-{{$comment->_id}}" style="cursor: pointer">delete</a>
                                    @endif

                                    <div class="modal fade" id="editComment-{{ $comment->_id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-12">
                                                                <div class="">
                                                                    <h5>Edit Comment</h5>
                                                                    <form  method="post" action="{{ route('comments.update', ['comment_id' => $comment->_id]) }}" class="feedback-form" autocomplete="off">
                                                                        @csrf
                                                                        @method('put')
                                                                        <div class="row mt-10">
                                                                            <div class="col-md-12 col-12">
                                                                                <input type="text" class="form-control" name="comment" value="{{ $comment->comment }}" placeholder="" style="padding: 5px 15px;" required>
                                                                            </div>
                                                                        </div>
                                                                        <button class="mt-4 btn btn-primary" style=" padding: 8px 17px 8px 17px;" type="submit">Submit</button>
                                                                        <button class="mt-4 btn btn-secondary" style="padding: 8px 17px 8px 17px;" type="reset">Clear</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Feedback Section END -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="deleteComment-{{ $comment->_id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-12">
                                                                <div class="">
                                                                    <h5>Delete Comment</h5>
                                                                    <form  method="post" action="{{ route('comments.destroy', ['comment_id' => $comment->_id]) }}" class="feedback-form" autocomplete="off">
                                                                        @csrf
                                                                        @method('Delete')
                                                                        <div class="row mt-10">
                                                                            <div class="col-md-12 col-12">
                                                                                Are You sure You Want to delete this comment?
                                                                            </div>
                                                                        </div>
                                                                        <button class="mt-4 btn btn-primary" style=" padding: 8px 17px 8px 17px;" type="submit">Submit</button>
                                                                        <button class="mt-4 btn btn-secondary" style="padding: 8px 17px 8px 17px;" type="reset">Clear</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Feedback Section END -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection