@extends('layout')
@section('content')

    <div class="container">
        <div class="comment-list">
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>Event</th>
                    <th>Comment</th>
                    <th>Action</th>
                </tr>
                @foreach($comments as $comment)
                    <tr>
                        <td> {{ $comment->id }}</td>
                        <td> {{ $comment->event->title }}</td>
                        <td> {{ $comment->body }}</td>
                        <td>
                            <a href="{{route('comment.approve', ['comment' => $comment->id])}}" class="btn btn-none text-success">
                                <i class="fas fa-check-square fs-3"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

@endsection
¬
