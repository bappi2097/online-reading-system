@extends('components.layouts.master')
@push('meta')
<title>{{$news->title}} | {{$meta->title}}</title>
<link href="{{$meta->favicon}}" rel=icon>
<meta name="author" content="coronabd-2020">
<link rel="icon" type="image/png" href="{{$meta->logo}}">
<meta property="og:image" content="{{$news->image}}">
<meta property="og:image:type" content="image/png/jpg">
<meta property="og:description" content="{{$news->short_description}}">
<meta name="keywords" content="{{$meta->keyword}}">
<meta property="og:image" content="{{$news->image}}">
<meta property="og:url" content="{{route('news', $news->slug)}}">
<meta property="og:title" content="{{$news->title}}">
@endpush
@section('content')
<div class="col-md-8">
    <div class="entity_wrapper">
        <div class="entity_title">
            <h1><a href="{{route('news',$news->slug)}}">{{$news->title}}</a></h1>
        </div>
        <!-- entity_title -->

        <div class="entity_meta"><a href="#" target="_self">{{date("M j, Y", strtotime($news->created_at))}}</a>, by: <a
                href="#" target="_self">{{$news->author}}</a>
        </div>
        <!-- entity_meta -->

        {{-- <div class="entity_rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <!-- entity_rating -->

        <div class="entity_social">
            <a href="#" class="icons-sm sh-ic">
                <i class="fa fa-share-alt"></i>
                <b>424</b> <span class="share_ic">Shares</span>
            </a>
            <a href="#" class="icons-sm fb-ic"><i class="fab fa-facebook-f"></i></a>
            <!--Twitter-->
            <a href="#" class="icons-sm tw-ic"><i class="fab fa-twitter"></i></a>
            <!--Google +-->
            <a href="#" class="icons-sm inst-ic"><i class="fab fa-google-plus-g"> </i></a>
            <!--Linkedin-->
            <a href="#" class="icons-sm tmb-ic"><i class="fab fa-instagram"> </i></a>
            <!--Pinterest-->
            <a href="#" class="icons-sm rss-ic"><i class="fa fa-rss"> </i></a>
        </div> --}}
        <!-- entity_social -->

        <div class="entity_thumb">
            <img class="img-responsive" src="{{$news->image}}" alt="feature-top">
        </div>
        <!-- entity_thumb -->
        <br>
        @if ($news->quote)
        <blockquote class="pull-left"> {{$news->quote}} </blockquote><br><br>
        @endif
        <div class="entity_content">
            {!!$news->body!!}
        </div>
        <!-- entity_content -->

        <div class="entity_footer">
            <div class="entity_tag">
                @foreach ($news->tags as $tag)
                <span class="blank"><a href="#">{{$tag->name}}</a></span>
                @endforeach
            </div>
            <!-- entity_tag -->

            <div class="entity_social">
                <span><i class="fa fa-share-alt"></i>424 <a href="#">Shares</a> </span>
                <span><i class="fa fa-comments-o"></i>4 <a href="#">Comments</a> </span>
            </div>
            <!-- entity_social -->

        </div>
        <!-- entity_footer -->

    </div>
    <!-- entity_wrapper -->
    {{-- <x-partials.body.related-news :relatedNews="$related_news"></x-partials.body.related-news> --}}
    @include('comment.related-news')
    <!-- Related news -->

    {{-- <div class="widget_advertisement">
        <img class="lozad img-responsive" data-src="assets/img/category_advertisement.jpg" alt="feature-top">
    </div> --}}
    <!--Advertisement-->

    @include('comment.comment')
    <!--Readers Comment-->

    {{-- <div class="widget_advertisement">
        <img class="lozad img-responsive" data-src="assets/img/category_advertisement.jpg" alt="feature-top">
    </div> --}}
    <!--Advertisement-->
    @auth
    @include('comment.comment-form')
    @endauth
    <!--Entity Comments -->

</div>
@endsection