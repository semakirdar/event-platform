@extends('layout')
@section('content')


    <div class="row justify-content-center align-items-center mb-4">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="card shadow-lg bg-body">
                <div class="card-header">
                    <span class="text-primary">{{ $event->title }}</span> - Participant Add
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('participant.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Name</label>
                            <input name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Title</label>
                            <input name="title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Company</label>
                            <input name="company" class="form-control">
                        </div>

                        <input type="hidden" name="event_id" value="{{ $event->id }}">

                        <button class="form-control btn btn-primary">ADD</button>
                    </form>
                </div>

            </div>

        </div>
    </div>

@endsection

