@extends('admin.layouts.app')

@push('meta')
<title>News View | Admin</title>
@endpush

@section('content')
<div class="container">
    <a href="{{route('adminlte.news.index')}}" class="btn btn-link">
        <i class="fas fa-long-arrow-alt-left mr-1"></i>
        Back
    </a>
    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">View News</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="news-title">News Title</label>
                <input type="text" class="form-control" value="{{$news->title}}" readonly>
            </div>
            <div class="form-group">
                <label for="news-slug">News Slug</label>
                <input type="text" class="form-control" value="{{$news->slug}}" readonly>
            </div>
            <div class="form-group">
                <label for="">Image</label>
                <img class="img" src="{{$news->image}}" alt="" style="width: 100%;">
            </div>
            <div class="form-group">
                <label for="news-author">News Author</label>
                <input type="text" class="form-control" value="{{$news->author}}" readonly>
            </div>

            <div class="form-group">
                <label for="short-description">Short Description</label>
                <textarea class="form-control" readonly>{{$news->short_description}}</textarea>
            </div>
            <div class="form-group">
                <label for="wysi-body">Body</label>
                <div class="mb-3" style="height: 300px;">
                    <div style="overflow: scroll; height: 300px;">
                        {!!$news->body!!}
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="news-quote">Quote</label>
                <input type="text" class="form-control" value="{{$news->quote}}" readonly>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Categories</label>
                        @foreach ($news->newsCategories as $newsCategory)
                        <span class="badge badge-pill badge-secondary">
                            {{$newsCategory->name}}
                        </span>
                        @endforeach

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="browser">Tags:</label>
                        @foreach ($news->tags as $tag)
                        <span class="badge badge-pill badge-secondary">
                            {{$tag->name}}
                        </span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection