@extends('layout')
@section('content')

    <div class="container">


        <a href="{{ route('event.create') }}" class="btn btn-primary mb-5">Create Event</a>

        <div class="events mt-5">
            <div class="row mb-5">
                @foreach($events as $event)
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="event-item">
                        <div class="event-info d-flex justify-content-between align-items-center">
                            <div class="event-date position-relative">
                                <h1>21</h1>
                                <p class="date-month">FEB</p>
                            </div>
                            <div class="event-time">
                                <p>{{ $event->name }}</p>
                                <p>14:00 - 18:00</p>
                            </div>
                        </div>
                        <div class="event-image mb-2">
                            <img src="{{ $event->getFirstMediaUrl() }}">
                        </div>
                        <h4>{{$event->description}}</h4>
                        <div class="studio ">
                            <p class="text-primary fw-bold">THE STUDIOS:{{ $event->location }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>




@endsection
