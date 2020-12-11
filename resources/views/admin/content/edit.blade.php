@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <a href="{{route('adminlte.news-category.index')}}" class="btn btn-link">
        <i class="fas fa-long-arrow-alt-left mr-1"></i>
        Back
    </a>
    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">Social Media</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <div class="card-body">
            @foreach ($socialMedias as $socialMedia)
            <form action="{{route('adminlte.social-media.update', $socialMedia)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="social-media-name-{{$socialMedia->id}}">Name</label>
                            <input type="text" class="form-control" id="social-media-name-{{$socialMedia->id}}"
                                placeholder="Facebook" name="social_media_name{{$socialMedia->id}}"
                                value="{{$socialMedia->name}}" required>
                            @error('social_media_name' . $socialMedia->id)
                            <span class="text-red text-xs" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="social-media-link-{{$socialMedia->id}}">Link</label>
                            <input type="text" class="form-control" id="social-media-link-{{$socialMedia->id}}"
                                placeholder="www.facebook.com" name="social_media_link{{$socialMedia->id}}"
                                value="{{$socialMedia->link}}" required>
                            @error('social_media_link' . $socialMedia->id)
                            <span class="text-red text-xs" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <label for="social-media-icon-{{$socialMedia->id}}">Icon</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">{!!$socialMedia->icon!!}</span>
                            </div>
                            <input type="text" class="form-control" id="social-media-icon-{{$socialMedia->id}}"
                                name="social_media_icon{{$socialMedia->id}}"
                                placeholder="<i class='fab fa-facebook-f'></i>" value="{{$socialMedia->icon}}" required>
                            @error('social_media_icon' . $socialMedia->id)
                            <span class="text-red text-xs" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <input type="submit" class="btn btn-primary" style="margin-top: 2rem;" value="Update">
                        <a href="{{ route('adminlte.social-media.destroy', $socialMedia) }}" class="btn btn-danger mr-2"
                            style="margin-top: 2rem;"
                            onclick="event.preventDefault(); document.getElementById('{{$socialMedia->id}}-social-media-delete').submit();">
                            Delete
                        </a>
                    </div>
                </div>
            </form>
            <form id="{{$socialMedia->id}}-social-media-delete"
                action="{{ route('adminlte.social-media.destroy', $socialMedia) }}" method="POST">
                @csrf
                @method('DELETE')
            </form>
            @endforeach
            <form role="form" action="{{route('adminlte.social-media.store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="social-media-name">Name</label>
                            <input type="text" class="form-control" id="social-media-name" placeholder="Facebook"
                                name="social_media_name">
                            @error('social_media_name')
                            <span class="text-red text-xs" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="social-media-link">Category Slug</label>
                            <input type="text" class="form-control" id="social-media-link"
                                placeholder="www.facebook.com" name="social_media_link">
                            @error('social_media_link')
                            <span class="text-red text-xs" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="social-media-icon">Icon</label>
                            <input type="text" class="form-control" id="social-media-icon"
                                placeholder="<i class='fab fa-facebook-f'></i>" name="social_media_icon">
                            @error('social_media_icon')
                            <span class="text-red text-xs" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <input type="submit" class="btn btn-secondary" style="margin-top: 2rem;" value="Add">
                    </div>
                </div>
            </form>
        </div>
        {{-- <div class="card-body">
            @foreach ($socialMedias as $socialMedia)
            <form action="{{route('adminlte.social-media.update', $socialMedia)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="social-media-name-{{$socialMedia->id}}">Name</label>
                    <input type="text" class="form-control" id="social-media-name-{{$socialMedia->id}}"
                        placeholder="Facebook" name="social_media_name{{$socialMedia->id}}"
                        value="{{$socialMedia->name}}" required>
                    @error('social_media_name' . $socialMedia->id)
                    <span class="text-red text-xs" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="social-media-link-{{$socialMedia->id}}">Link</label>
                    <input type="text" class="form-control" id="social-media-link-{{$socialMedia->id}}"
                        placeholder="www.facebook.com" name="social_media_link{{$socialMedia->id}}"
                        value="{{$socialMedia->link}}" required>
                    @error('social_media_link' . $socialMedia->id)
                    <span class="text-red text-xs" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-3">
                <label for="social-media-icon-{{$socialMedia->id}}">Icon</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">{!!$socialMedia->icon!!}</span>
                    </div>
                    <input type="text" class="form-control" id="social-media-icon-{{$socialMedia->id}}"
                        name="social_media_icon{{$socialMedia->id}}" placeholder="<i class='fab fa-facebook-f'></i>"
                        value="{{$socialMedia->icon}}" required>
                    @error('social_media_icon' . $socialMedia->id)
                    <span class="text-red text-xs" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-3">
                <input type="submit" class="btn btn-primary" style="margin-top: 2rem;" value="Update">
                <a href="{{ route('adminlte.social-media.destroy', $socialMedia) }}" class="btn btn-danger mr-2"
                    style="margin-top: 2rem;"
                    onclick="event.preventDefault(); document.getElementById('{{$socialMedia->id}}-social-media-delete').submit();">
                    Delete
                </a>
            </div>
        </div>
        </form>
        <form id="{{$socialMedia->id}}-social-media-delete"
            action="{{ route('adminlte.social-media.destroy', $socialMedia) }}" method="POST">
            @csrf
            @method('DELETE')
        </form>
        @endforeach
        <form role="form" action="{{route('adminlte.social-media.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="social-media-name">Name</label>
                        <input type="text" class="form-control" id="social-media-name" placeholder="Facebook"
                            name="social_media_name">
                        @error('social_media_name')
                        <span class="text-red text-xs" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="social-media-link">Category Slug</label>
                        <input type="text" class="form-control" id="social-media-link" placeholder="www.facebook.com"
                            name="social_media_link">
                        @error('social_media_link')
                        <span class="text-red text-xs" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="social-media-icon">Icon</label>
                        <input type="text" class="form-control" id="social-media-icon"
                            placeholder="<i class='fab fa-facebook-f'></i>" name="social_media_icon">
                        @error('social_media_icon')
                        <span class="text-red text-xs" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-3">
                    <input type="submit" class="btn btn-secondary" style="margin-top: 2rem;" value="Add">
                </div>
            </div>
        </form>
    </div> --}}
</div>
</div>
@endsection