@extends('admin.layouts.app')
@section('content')
<div class="container">
    <a href="{{route('adminlte.tag.index')}}" class="btn btn-link">
        <i class="fas fa-long-arrow-alt-left mr-1"></i>
        Back
    </a>
    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">Update Tag</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{route('adminlte.tag.update', [$tag])}}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="tag-name">tag Name</label>
                    <input type="text" class="form-control" id="tag-name" placeholder="ex: Hot News" name="name"
                        value="{{$tag->name}}" oninput="tagSlug()">
                    @error('name')
                    <span class="text-red text-xs" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tag-slug">tag Slug</label>
                    <input type="text" class="form-control" id="tag-slug" placeholder="ex: hot-news" name="slug"
                        value="{{$tag->slug}}">
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
    function tagSlug()
    {
        let tag_name = document.querySelector('#tag-name').value;
        if(tag_name)
        {
            document.querySelector('#tag-slug').value = tag_name.replace(/[^a-zA-Z0-9 -]/g, "").toLowerCase().split(" ").join('-');
        }else{
            document.querySelector('#tag-slug').value = "";
        }
    }
</script>
@endpush