@extends('layouts.default')

@section('content')
<!-- <div class="container"> -->
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="login-card">
                <h1>Stock Item List</h1>

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Stock Name</th>
                            <th>Unit Name</th>
                            <th>Sub Unit Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($stock as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->user_name }}</td>
                            <td>{{ $item->unit_name }}</td>
                            <td>{{ $item->sub_unit_name }}</td>
                            <td>
                                <a href="{{ url('edit-stock', ['id' => $item->id]) }}" class="btn btn-secondary">Edit</a>
                                <a href="{{ route('stock.delete', ['id' => $item->id]) }}" class="btn btn-secondary">Delete</a>
                                <!-- <button class="btn btn-danger">Delete</button> -->
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<!-- </div> -->
@endsection
