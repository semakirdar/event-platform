@extends('layout')
@section('content')


    <div class="row justify-content-center align-items-center mb-4">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="card shadow-lg bg-body">
                <div class="card-header">
                    Event Add
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('event.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label>Category</label>
                            <select name="category_id" class="form-select form-select-lg mb-3">
                                <option value=" ">All Events</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Title</label>
                            <input name="title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Start Date</label>
                            <input name="start_date" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>End Date</label>
                            <input name="end_date" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Description</label>
                            <input name="description" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Location</label>
                            <input name="location" class="form-control">
                        </div>

                        <button class="form-control btn btn-primary">ADD</button>
                    </form>
                </div>

            </div>

        </div>
    </div>




@endsection
