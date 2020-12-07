@extends('admin.layouts.app')
@section('content')
<div class="container">
    <a href="{{route('adminlte.news-category.index')}}" class="btn btn-link">
        <i class="fas fa-long-arrow-alt-left mr-1"></i>
        Back
    </a>
    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">Show News Category</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="form-group">
                <label for="category-name">Category Name</label>
                <input type="text" class="form-control" id="category-name" value="{{$newsCategory->name}}" readonly>
            </div>
            <div class="form-group">
                <label for="category-slug">Category Slug</label>
                <input type="text" class="form-control" id="category-slug" value="{{$newsCategory->slug}}" readonly>
            </div>

        </div>
        <!-- /.card-body -->
    </div>
</div>
@endsection