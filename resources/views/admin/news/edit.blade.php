@extends('admin.layouts.app')

@push('meta')
<title>News Edit | Admin</title>
@endpush

@push('style')
<!-- summernote -->
<link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.css')}}">
@endpush

@section('content')
<div class="container">
    <a href="{{route('adminlte.news.index')}}" class="btn btn-link">
        <i class="fas fa-long-arrow-alt-left mr-1"></i>
        Back
    </a>
    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">Edit News</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{route('adminlte.news.update', [$news->id])}}" method="POST"
            enctype="multipart/form-data" autocomplete="off">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="news-title">News Title</label>
                    <input type="text" class="form-control" id="news-title" placeholder="John Doe is Dead"
                        value="{{$news->title}}" name="title" required oninput="newsSlug()">
                    @error('title')
                    <span class="text-red text-xs" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="news-slug">News Slug</label>
                    <input type="text" class="form-control" id="news-slug" placeholder="john-doe-is-dead" name="slug"
                        value="{{$news->slug}}" required>
                    @error('slug')
                    <span class="text-red text-xs" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="news-image">News Image</label>
                            <input type="file" class="form-control" id="news-image" name="image"
                                accept=".jpeg, .jpg, .png">
                            @error('image')
                            <span class="text-red text-xs" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="news-author">News Author</label>
                            <input type="text" class="form-control" id="news-author" name="author"
                                value="{{$news->author}}" required placeholder="Joh Doe">
                            @error('author')
                            <span class="text-red text-xs" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="short-description">Short Description</label>
                    <textarea name="short_description" class="form-control" id="short-description" required
                        placeholder="Max: 300 Charecter" cols="30" rows="3">{{$news->short_description}}</textarea>
                    @error('short_description')
                    <span class="text-red text-xs" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="wysi-body">Body</label>
                    <div class="mb-3">
                        <textarea class="form-control" name="body" id="wysi-body" placeholder=""
                            required>{!!$news->body!!}</textarea>
                    </div>
                    @error('body')
                    <span class="text-red text-xs" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="news-quote">Quote</label>
                    <input type="text" class="form-control" id="news-quote"
                        placeholder="People say nothing is impossible, but I do nothing every day." name="quote"
                        value="{{$news->quote}}" required>
                    @error('quote')
                    <span class="text-red text-xs" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Select Categories</label>
                            <select multiple class="form-control" name="categories[]" required>
                                @foreach ($categories as $category)
                                <option value="{{$category->slug}}" @if ($news->newsCategories()->find($category->id))
                                    selected
                                    @endif>
                                    {{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="browser">Choose Tags:</label>
                            <div class="input-group">
                                <input class="form-control" list="tags" id="tag" autocomplete="false">
                                <datalist id="tags" autocomplete="false">
                                    @foreach ($tags as $tag)
                                    <option value="{{$tag->name}}"> </option>
                                    @endforeach
                                </datalist>
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="button"
                                        onclick="addTag(document.querySelector('#tag'));">Add</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row my-3" id="show-tag">
                            @foreach ($news->tags as $tag)
                            <div class="mr-2">
                                <span class="badge badge-pill badge-secondary">
                                    {{$tag->name}}
                                    <i class="fas fa-times-circle" style="cursor: pointer;"
                                        onclick="this.parentNode.parentNode.remove()"></i>
                                </span>
                                <input type="hidden" name="tags[]" value="{{$tag->name}}">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('script')
<script>
    function newsSlug()
    {
        let news_title = document.querySelector('#news-title').value;
        if(news_title)
        {
            document.querySelector('#news-slug').value = news_title.replace(/[^a-zA-Z0-9-]/g, "-").toLowerCase();
        }else{
            document.querySelector('#news-slug').value = "";
        }
    }
    function addTag(tag){
        document.querySelector("#show-tag").innerHTML+=`
        <div class="mr-2">
            <span class="badge badge-pill badge-secondary">
                ${tag.value}
                <i class="fas fa-times-circle" style="cursor: pointer;" onclick="this.parentNode.parentNode.remove()"></i>
            </span>
            <input type="hidden" name="tags[]" value="${tag.value}">
        </div>
        `;
        tag.value = "";
    }
</script>
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
    $(function () {
        $('#wysi-body').summernote()
      })
</script>
@endpush