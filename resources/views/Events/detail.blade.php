@extends('layout')
@section('content')

    <div class="container">
        <div class="event-detail-image">
            <img src="{{ $event->getFirstMediaUrl() }}">
        </div>
        <div class="row mt-5">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <h2>{{ $event->title }}</h2>
                <h5 class="text-muted"> {{ $event->location }} </h5>
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
    </div>


@endsection
