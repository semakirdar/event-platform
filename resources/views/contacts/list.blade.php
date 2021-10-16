@extends('layout')
@section('content')

    <div class="container">
        <div class="event-list">
            <h4 class="text-primary mb-3">MESSAGES</h4>
            <table class="table">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
                @foreach($contacts as $contact)
                    <tr>
                        <td> {{ $contact->name }}</td>
                        <td> {{ $contact->email }}</td>
                        <td> {{ $contact->message}}</td>
                        <td>
                            <form class="d-inline-block" method="post"
                                  action="{{route('contact.delete', ['id' => $contact->id])}}">
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

