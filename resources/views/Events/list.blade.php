@extends('layout')
@section('content')

    <div class="container">
        <div class="event-list">
            <table class="table">
                <tr>
                    <th>Event Title</th>
                    <th>Category Name</th>
                    <th>Action</th>
                </tr>
                @foreach($events as $event)
                    <tr>
                        <th> {{ $event->title }}</th>
                        <th> {{ $event->category->name }}</th>
                        <th>
                            <a  href="{{ route('participant.create', ['eventId' => $event->id]) }}" class="btn btn-primary">Participant add</a>
                        </th>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

@endsection
