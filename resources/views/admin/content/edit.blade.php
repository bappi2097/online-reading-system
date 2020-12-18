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
    </div>
</div>

<div class="container-fluid mt-5">
    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">Meta</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <div class="card-body">

            <form role="form" action="{{route('adminlte.meta.update', $meta)}}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="meta-title">Title</label>
                    <input type="text" class="form-control" id="meta-title" placeholder="Facebook" name="meta_title"
                        value="{{$meta->title}}">
                    @error('meta_title')
                    <span class="text-red text-xs" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="meta-author">Author</label>
                    <input type="text" class="form-control" id="meta-author" placeholder="John Doe" name="meta_author"
                        value="{{$meta->author}}">
                    @error('meta_author')
                    <span class="text-red text-xs" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="meta-description">Description</label>
                            <textarea class="form-control" name="meta_description" id="meta-description" cols="30"
                                rows="5">{{$meta->description}}</textarea>
                            @error('meta_description')
                            <span class="text-red text-xs" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="meta-keywords">Keywords</label>
                            <textarea class="form-control" name="meta_keywords" id="meta-keywords" cols="30"
                                rows="5">{{$meta->keyword}}</textarea>
                            @error('meta_keywords')
                            <span class="text-red text-xs" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="meta-copyright">Copyright</label>
                    <input type="text" class="form-control" id="meta-copyright" placeholder="© Copyright DIU"
                        name="meta_copyright" value="{{$meta->copyright}}">
                    @error('meta_copyright')
                    <span class="text-red text-xs" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div>
                            <img id="meta-logo" src="{{$meta->logo}}" alt="your image" width="105" height="112" /><br>
                            <input type='file' name="meta_logo" id="meta-logo-btn" style="display: none;"
                                onchange="readURL(this);" accept=".png, .gif, .jpg" />
                            <input type="button" value="Update Logo"
                                onclick="document.getElementById('meta-logo-btn').click();" />

                        </div>
                        @error('meta_logo')
                        <span class="text-red text-xs" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <img id="meta-favicon" src="{{$meta->favicon}}" alt="your image" width="105"
                                height="112" /><br>
                            <input type='file' name="meta_favicon" id="meta-favicon-btn" style="display: none;"
                                onchange="readURLFavicon(this);" accept=".png, .gif, .jpg" />
                            <input type="button" value="Update Favicon"
                                onclick="document.getElementById('meta-favicon-btn').click();" />

                        </div>
                        @error('meta_favicon')
                        <span class="text-red text-xs" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <input type="submit" class="btn btn-success" style="margin-top: 2rem;" value="Save">
            </form>
        </div>
    </div>
</div>

<div class="container-fluid">
    <a href="{{route('adminlte.news-category.index')}}" class="btn btn-link">
        <i class="fas fa-long-arrow-alt-left mr-1"></i>
        Back
    </a>
    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">Navbar Menu</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <div class="card-body">
            @foreach ($menus as $menu)
            <form action="{{route('adminlte.social-media.update', $menu)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="social-media-name-{{$menu->id}}">Name</label>
                            <input type="text" class="form-control" id="social-media-name-{{$menu->id}}"
                                placeholder="Facebook" name="social_media_name{{$menu->id}}" value="{{$menu->name}}"
                                required>
                            @error('social_media_name' . $menu->id)
                            <span class="text-red text-xs" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="social-media-link-{{$menu->id}}">Link</label>
                            <input type="text" class="form-control" id="social-media-link-{{$menu->id}}"
                                placeholder="www.facebook.com" name="social_media_link{{$menu->id}}"
                                value="{{$menu->link}}" required>
                            @error('social_media_link' . $menu->id)
                            <span class="text-red text-xs" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <label for="social-media-icon-{{$menu->id}}">Icon</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">{!!$menu->icon!!}</span>
                            </div>
                            <input type="text" class="form-control" id="social-media-icon-{{$menu->id}}"
                                name="social_media_icon{{$menu->id}}" placeholder="<i class='fab fa-facebook-f'></i>"
                                value="{{$menu->icon}}" required>
                            @error('social_media_icon' . $menu->id)
                            <span class="text-red text-xs" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <input type="submit" class="btn btn-primary" style="margin-top: 2rem;" value="Update">
                        <a href="{{ route('adminlte.social-media.destroy', $menu) }}" class="btn btn-danger mr-2"
                            style="margin-top: 2rem;"
                            onclick="event.preventDefault(); document.getElementById('{{$menu->id}}-social-media-delete').submit();">
                            Delete
                        </a>
                    </div>
                </div>
            </form>
            <form id="{{$menu->id}}-social-media-delete" action="{{ route('adminlte.social-media.destroy', $menu) }}"
                method="POST">
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
    </div>
</div>

@endsection

@push('script')
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#meta-logo')
                    .attr('src', e.target.result)
                    .width(105)
                    .height(112);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    function readURLFavicon(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#meta-logo')
                    .attr('src', e.target.result)
                    .width(105)
                    .height(112);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endpush