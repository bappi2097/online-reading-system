@extends('admin.layouts.app')
@section('content')
<div class="container">
    <a href="{{route('adminlte.news-category.index')}}" class="btn btn-link">
        <i class="fas fa-long-arrow-alt-left mr-1"></i>
        Back
    </a>
    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">Add News Category</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{route('adminlte.news-category.store')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="category-name">Category Name</label>
                    <input type="text" class="form-control" id="category-name" placeholder="ex: Hot News" name="name"
                        oninput="categorySlug()">
                    @error('name')
                    <span class="text-red text-xs" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="category-slug">Category Slug</label>
                    <input type="text" class="form-control" id="category-slug" placeholder="ex: hot-news" name="slug">
                    @error('slug')
                    <span class="text-red text-xs" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('script')
<script>
    function categorySlug()
    {
        let category_name = document.querySelector('#category-name').value;
        if(category_name)
        {
            document.querySelector('#category-slug').value = category_name.replace(/[^a-zA-Z0-9 -]/g, "").toLowerCase().split(" ").join('-');
        }else{
            document.querySelector('#category-slug').value = "";
        }
    }
</script>
@endpush