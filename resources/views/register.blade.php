@extends('layout')
@section('content')


    <div class="container">
        <div class="register">
            <div class="row justify-content-center align-items-center mb-5">
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <div class="card shadow-lg bg-body">
                        <div class="card-header">
                            <i class="fas fa-user-plus fs-5 me-3"></i>
                            <strong>Register</strong>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('register.store') }}">
                                @csrf
                                <div class="mb-3">
                                    <label>Name</label>
                                    <input name="name" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Email</label>
                                    <input name="email" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <button class="form-control btn btn-primary text-white">ADD</button>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>





@endsection



