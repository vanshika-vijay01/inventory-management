@extends('layouts.default')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="login-card">
                <h1>Create Stock Item</h1>

                <!-- Show Success Message -->
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('stock.name') }}" method="post"> 
                    @csrf
                    <div class="input-main mb-3">
                        <label for="userName">Stock Name</label>
                        <input type="text" name="user_name" value="{{ old('user_name') }}" placeholder="Enter Stock Name">
                        @error('user_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-main mb-3">
                        <label for="userName">Unit Name</label>
                        <input type="text" name="unit_name" value="{{ old('unit_name') }}" placeholder="Enter Unit Name">
                        @error('unit_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-main mb-3">
                        <label for="userName">Subunit Name</label>
                        <input type="text" name="sub_unit_name" value="{{ old('sub_unit_name') }}" placeholder="Enter Subunit Name">
                        @error('sub_unit_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <button class="btn w-100 btn-primary" type="submit">Submit</button>
                </form> 
            </div>
        </div>
    </div>
</div>
@endsection
