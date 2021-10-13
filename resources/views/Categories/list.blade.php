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
                               class="btn btn-primary">Category Edit</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

@endsection

