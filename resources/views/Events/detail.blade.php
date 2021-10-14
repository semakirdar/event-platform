@extends('layout')
@section('content')

    <div class="container">
        <div class="event-detail-image">
            <img src="{{ $event->getFirstMediaUrl() }}">
        </div>
        <div class="row mt-5">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <h2>{{ $event->title }}</h2>
                <h5 class="text-muted"> {{ $event->location->name ?? '-' }} </h5>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <h4 class="text-primary">{{ $event->StartDateParts['month']}} {{ $event->StartDateParts['day'] }} -
                    {{$event->EndDateParts['month']}} {{$event->EndDateParts['day']}}</h4>
                <h4 class="text-primary mb-5"> {{ $event->StartDateParts['hour']}}
                    - {{ $event->EndDateParts['hour']}}</h4>
                <h4 class="mb-5">{{ $event->description }}</h4>
            </div>
        </div>
        <div class="participants mt-5">
            <h2 class="text-primary mb-5 mt-5">Participants</h2>
            <div class="row mb-4">
                @foreach($participants as $participant)
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="card">
                            <div class="card-header text-center ">
                                <img style="width: 100px; height: 100px;" class="rounded-circle participant-avatar"
                                     src="{{$participant->getfirstMediaUrl()}}">
                            </div>
                            <div class="card-body text-center p-3">
                                <h4>{{ $participant->name }}</h4>
                                <h5>{{ $participant->title }} @ {{ $participant->company }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="comment-create my-5">
            <div class="card p-3 ">
                <div class="card-body">
                    <form method="post" action="{{ route('comment.create') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-11">
                                <textarea class="form-control" rows="4" cols="5" name="body"
                                          style="width: 100%;"></textarea>
                            </div>
                            <input type="hidden" name="event_id" value="{{ $event->id}}">
                            <div class="col-lg-1 d-flex justify-content-center align-items-center">
                                <button class="btn btn-primary form-control text-white float-end">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="comment-list">
            @foreach($comments as $comment)
                <div class="mb-3">
                    <div class="bg-white p-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <strong>{{$comment->user->name}}</strong>
                            <p class="text-muted">{{ $comment->created_at }}</p>
                        </div>
                        <p> {{ $comment->body  }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
