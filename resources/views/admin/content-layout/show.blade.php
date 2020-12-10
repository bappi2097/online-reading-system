@extends('admin.layouts.app')
@push('style')
<link rel="stylesheet" href="{{asset('dist/css/app.css')}}">
@endpush
@section('content')
<div class="container">
    <a href="{{route('adminlte.content-layouts.index')}}" class="btn btn-link">
        <i class="fas fa-long-arrow-alt-left mr-1"></i>
        Back
    </a>
    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">Show Content Layout</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>News Category</label>
                <input type="text" value="{{$contentLayout->newsCategory->name}}" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="position">Position</label>
                <input type="number" class="form-control" value="{{$contentLayout->position}}" readonly>
            </div>
            <div class="form-group">
                <label for="">Layout</label>
                <div class="row">
                    <div class="col-lg-3 -layout" onclick="selectLayout(1, this)">
                        <img src="{{asset("news/layouts/layout-" . $contentLayout->layout_no . ".svg")}}" alt=""
                            height="250" width="250">
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection