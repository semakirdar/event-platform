@extends('layout')
@section('content')

    <div class="container">

        <div class="events mt-5">
            <div class="row mb-5">
                @foreach($events as $event)
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="event-item">
                            <div class="event-info d-flex justify-content-between align-items-center">
                                <div class="event-date position-relative">
                                    <h1>{{ $event->startDateParts['day'] }}</h1>
                                    <p class="date-month">{{ $event->startDateParts['month'] }}</p>
                                </div>
                                <div class="event-time">
                                    <p>{{ $event->title}}</p>
                                    <p>{{ $event->startDateParts['hour']}} - {{ $event->endDateParts['hour'] }}</p>
                                </div>
                            </div>
                            <div class="event-image mb-2">
                                <a href="{{ route('event.detail', ['id' => $event->id]) }}">
                                    <img src="{{ $event->getFirstMediaUrl() }}">
                                </a>
                            </div>
                            <h4>{{ substr($event->description, 0, 120) }}...</h4>
                            <div class="studio ">
                                <p class="text-primary fw-bold">LOCATIONS:
                                    <a href="{{ route('location.event', ['locationId' => $event->location_id ?? 0]) }}">
                                        {{ $event->location->name ?? '-'}}
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
