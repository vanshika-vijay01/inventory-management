@extends('layouts.default')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="login-card">
                <h1>Edit Stock</h1>

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
                
                <form action="{{ route('stock.update', ['id' => $stock->id]) }}" method="post">
                    @csrf

                    <div class="input-main mb-3">
                        <label for="stockName">Stock Name</label>
                        <input type="text" name="user_name" placeholder="Enter Stock Name" id="stockName" 
                            value="{{ old('user_name', $stock->user_name) }}">
                        @error('user_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="input-main mb-3">
                        <label for="unitName">Unit Name</label>
                        <input type="text" name="unit_name" placeholder="Enter Unit Name" id="unitName" 
                            value="{{ old('unit_name', $stock->unit_name) }}">
                        @error('unit_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="input-main mb-3">
                        <label for="subUnitName">Subunit Name</label>
                        <div class="d-flex">
                            <input class="w-75 me-3" type="text" name="sub_unit_name" placeholder="Enter Sub Unit" id="subUnitName" 
                                value="{{ old('sub_unit_name', $stock->sub_unit_name) }}">
                                @error('sub_unit_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>

                    <div class="btn-group w-100">
                        <button type="submit" class="btn w-100 me-3 btn-info text-white">Submit</button>
                        <button type="reset" class="btn w-100 btn-warning text-white">Reset</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="data-table">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Stock Name</th>
                            <th>Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>S Unit 6A</td>
                            <td>10 Boxes*6 pcs</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>S Unit 6A</td>
                            <td>10 Boxes*6 pcs</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>S Unit 6A</td>
                            <td>10 Boxes*6 pcs</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection