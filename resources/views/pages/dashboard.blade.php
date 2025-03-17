@extends('layouts.default')
@section('content')
<div class="container card-head">
    <div class="row mx-0 w-100">
        <div class="col-md-6">  
            <div class="card-main mx-auto">
                <div class="card-inner">
                    <div class="card-content text-center">
                        <h5>Create Entry Challan</h5>
                        <a href="<?php echo URL::to('/create-entry');?>">Create</a>
                    </div>
                    <div class="add-icon">
                        +
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 justify-content-center">
            <div class="card-main">
                <div class="card-inner">
                    <div class="card-content text-center">
                        <h5>Create Exit Challan</h5>
                        <a href="<?php echo URL::to('/create-exit');?>">Create</a>
                    </div>
                    <div class="add-icon">
                        +
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection