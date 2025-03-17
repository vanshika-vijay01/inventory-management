@extends('layouts.default')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="login-card py-3">
                <h1>Exit Challan</h1>
                <div class="input-main mb-3">
                    <label for="userName">Stock Name</label>
                    <select id="mySelect" style="width: 100%;">
                        <option value="AL">SWITCH 6A POLO MASTER</option>
                        <option value="AK">SOCKET 6A POLO MASTER</option>
                        <option value="AZ">SWITCH 6A UNITY</option>
                        <option value="AR">SOCKET 6A FM</option>
                        <option value="CA">SWITCH 16A UNITY</option>
                        <option value="CO">SWITCH 16A 2M UNITY</option>
                        <option value="CT">SOCKET 16A FM</option>
                        <option value="DE">GIRNAR 48" EURO</option>
                        <option value="FL">GIRNAR 48" CROMA</option>
                    </select>
                </div>
                <div class="input-main mb-3">
                    <label for="userName">Unit Name</label>
                    <input type="text" name="userName" placeholder="Enter Name" id="">
                </div>
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