@extends('admin.layouts.app')
@section('content')
<div class="container">
    <a href="{{route('adminlte.tag.index')}}" class="btn btn-link">
        <i class="fas fa-long-arrow-alt-left mr-1"></i>
        Back
    </a>
    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">Show tag</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="form-group">
                <label for="tag-name">Tag Name</label>
                <input type="text" class="form-control" id="tag-name" value="{{$tag->name}}" readonly>
            </div>
            <div class="form-group">
                <label for="tag-slug">Tag Slug</label>
                <input type="text" class="form-control" id="tag-slug" value="{{$tag->slug}}" readonly>
            </div>

        </div>
        <!-- /.card-body -->
    </div>
</div>
@endsection