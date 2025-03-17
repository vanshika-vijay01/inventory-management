@extends('layouts.default')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="login-card">
                <h1>Edit Stock</h1>
                
            {{-- <form action="{{ route('stock.update',['id' => $stock->id]) }}" method="post"> --}}
                <div class="input-main mb-3">
                    <label for="userName">Stock Name</label>
                    <input type="text" name="user_name" placeholder="Enter User Name" id="">
                </div>
                <div class="input-main mb-3">
                    <label for="userName">Unit Name</label>
                    <input type="text" name="unit_name" placeholder="Enter Unit Name" id="">
                </div>
                <div class="input-main mb-3">
                    <label for="userName">Subunit Name</label>
                    <div class="d-flex">
                        <input class="w-75 me-3" type="text" name="sub_unit_name" placeholder="Enter Sub Unit" id="">
                        <!-- <input class="w-25" type="text" name="userName" placeholder="" id=""> -->
                    </div>
                </div>
                <div class="add-btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.01291 0.000376474C2.69918 0.000376474 0 2.69994 0 6.01366V17.9875C0 21.3012 2.6988 24.0007 6.01291 24.0007H17.9867C21.3004 24.0007 24 21.3012 24 17.9875V6.01328C24 2.69956 21.3004 0 17.9867 0L6.01291 0.000376474ZM6.01291 2.00949H17.9867C20.2224 2.00949 21.9913 3.77794 21.9913 6.01366V17.9875C21.9913 20.2232 20.2224 21.9913 17.9867 21.9913H6.01291C3.77719 21.9913 2.00873 20.2232 2.00873 17.9875V6.01328C2.00873 3.77756 3.77719 2.00949 6.01291 2.00949ZM12.2361 5.07193C11.9698 5.07573 11.716 5.1851 11.5304 5.376C11.3447 5.5669 11.2425 5.8237 11.2462 6.08996V10.9303H6.40653C6.27236 10.9267 6.13881 10.9499 6.01378 10.9987C5.88874 11.0475 5.77476 11.1208 5.67855 11.2144C5.58235 11.308 5.50588 11.42 5.45367 11.5436C5.40145 11.6672 5.37455 11.8001 5.37455 11.9343C5.37455 12.0686 5.40145 12.2014 5.45367 12.3251C5.50588 12.4487 5.58235 12.5606 5.67855 12.6542C5.77476 12.7478 5.88874 12.8212 6.01378 12.87C6.13881 12.9188 6.27236 12.942 6.40653 12.9383H11.2462V17.7779C11.2436 17.9115 11.2676 18.0442 11.3169 18.1684C11.3663 18.2926 11.4398 18.4056 11.5334 18.501C11.6269 18.5964 11.7385 18.6721 11.8617 18.7239C11.9849 18.7756 12.1171 18.8022 12.2507 18.8022C12.3843 18.8022 12.5165 18.7756 12.6397 18.7239C12.7629 18.6721 12.8745 18.5964 12.968 18.501C13.0616 18.4056 13.1352 18.2926 13.1845 18.1684C13.2338 18.0442 13.2579 17.9115 13.2553 17.7779V12.9383H18.0949C18.2291 12.942 18.3626 12.9188 18.4876 12.87C18.6127 12.8212 18.7267 12.7478 18.8229 12.6542C18.9191 12.5606 18.9955 12.4487 19.0478 12.3251C19.1 12.2014 19.1269 12.0686 19.1269 11.9343C19.1269 11.8001 19.1 11.6672 19.0478 11.5436C18.9955 11.42 18.9191 11.308 18.8229 11.2144C18.7267 11.1208 18.6127 11.0475 18.4876 10.9987C18.3626 10.9499 18.2291 10.9267 18.0949 10.9303H13.2553V6.08996C13.2571 5.95566 13.232 5.82236 13.1814 5.69794C13.1308 5.57352 13.0558 5.46051 12.9608 5.36559C12.8658 5.27067 12.7527 5.19578 12.6282 5.14534C12.5037 5.0949 12.3704 5.06994 12.2361 5.07193Z" fill="#48505E"/>
                        </svg>
                    Add Subunit
                </div>
                <div class="btn-group w-100">
                    <button class="btn w-100 me-3 btn-info text-white">Submit</button>
                    <button class="btn w-100 btn-warning text-white">Submit</button>   
                </div>
            {{-- </form> --}}
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