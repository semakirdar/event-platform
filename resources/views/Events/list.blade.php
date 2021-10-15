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
                        <td> {{ $event->title }}</td>
                        <td> {{ $event->category->name }}</td>
                        <td>
                            <a href="{{ route('participant.create', ['eventId' => $event->id]) }}"
                               class="btn btn-primary">Participant add</a>
                            <a href="{{ route('event.edit', ['eventId' => $event->id]) }}"
                               class="btn btn-success">Event Edit</a>

                            <form class="d-inline-block" method="post" action="{{ route('event.delete', ['eventId' => $event->id]) }}">
                                @csrf
                                <button class="btn btn-danger">Delete</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

@endsection
