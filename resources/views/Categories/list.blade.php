@extends('layout')
@section('content')

    <div class="container">
        <div class="event-list">
            <table class="table">
                <tr>
                    <th>Category Name</th>
                    <th>Action</th>
                </tr>
                @foreach($categories as $category)
                    <tr>
                        <td> {{ $category->name }}</td>
                        <td>
                            <a href="{{ route('category.edit', ['id' => $category->id]) }}"
                               class="btn btn-success">Category Edit</a>

                            <form class="d-inline-block" method="post" action="{{route('category.delete', ['id' => $category->id])}}">
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

