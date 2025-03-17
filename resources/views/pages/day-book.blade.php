@extends('layouts.default')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="login-card p-4">
                <h1>Day Book</h1>
                <div class="row input-search mb-3">
                    <div class="col-6">
                        <div class="d-flex align-items-center gap-2">
                            <label for="">Date</label>
                            <input type="date" class="w-100" placeholder="DD/MM/YY">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center gap-2">
                            <label for="">Warehouse</label>
                            <input type="text" class="w-100">
                        </div>
                    </div>
                </div>
                <div class="data-table p-0 mb-0">
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
</div>
@endsection