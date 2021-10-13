@extends('layout')
@section('content')


    <div class="row justify-content-center align-items-center mb-4">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="card shadow-lg bg-body">
                <div class="card-header">
                    Category Edit
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('category.update', ['id' => $category->id]) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label>Name</label>
                            <input value="{{ $category->name }}" name="name" class="form-control">
                        </div>
                        <button class="form-control btn btn-primary">ADD</button>
                    </form>
                </div>
            </div>
        </div>
    </div>




@endsection
