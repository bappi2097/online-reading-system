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
            <h3 class="card-title">Edit Content Layout</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{route('adminlte.content-layouts.update', [$contentLayout])}}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label>Select Categories</label>
                    <select class="form-control" name="news_category_id" required>
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}" @if ($contentLayout->newsCategory->id == $category->id)
                            selected @endif>{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="position">Position</label>
                    <input type="number" class="form-control" id="position" placeholder="1" name="position"
                        value="{{$contentLayout->position}}">
                    @error('position')
                    <span class="text-red text-xs" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Chose Layout</label>
                    <div class="row">
                        <div class="col-lg-3 -layout @if ($contentLayout->layout_no == 1) -layout-active @endif"
                            onclick="selectLayout(1, this)">
                            <img src="{{asset("news/layouts/layout-2.svg")}}" alt="" height="250" width="250">
                        </div>
                        <div class="col-lg-3 -layout @if ($contentLayout->layout_no == 2) -layout-active @endif"
                            onclick="selectLayout(2, this)">
                            <img src="{{asset("news/layouts/layout-3.svg")}}" alt="" height="250" width="250">
                        </div>
                        <div class="col-lg-3 -layout @if ($contentLayout->layout_no == 3) -layout-active @endif"
                            onclick="selectLayout(3, this)">
                            <img src="{{asset("news/layouts/layout-4.svg")}}" alt="" height="250" width="250">
                        </div>
                    </div>
                    <input type="hidden" name="layout_no" id="layout_no" value="{{$contentLayout->layout_no}}">
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
    function selectLayout(no, e)
    {
        list = e.parentNode.children;
        for (var i = 0; i < list.length; i++) 
        { 
            list[i].classList.remove('-layout-active');
        }
        e.classList.add('-layout-active');
        document.querySelector("#layout_no").value = no;
    }
</script>
@endpush