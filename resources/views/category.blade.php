@extends('components.layouts.master')
@section('content')
{{-- <x-partials.breadcrumb></x-partials.breadcrumb> --}}
<div class="col-md-8">
    @foreach ($newsC['data'] as $news)
    @if ($loop->first)
    <div class="entity_wrapper">
        <div class="entity_title header_purple">
            <h1><a href="{{route('category', $newsC['category']->slug)}}"
                    target="_blank">{{$newsC['category']->name}}</a>
            </h1>
        </div>
        <!-- entity_title -->

        <div class="entity_thumb">
            <img class="lozad img-responsive" data-src="{{$news->image}}" alt="{{$news->title}}">
        </div>
        <!-- entity_thumb -->

        <div class="entity_title">
            <a href="{{route('news', $news->slug)}}" target="_blank">
                <h3>{{$news->title}}</h3>
            </a>
        </div>
        <!-- entity_title -->

        <div class="entity_meta">
            <a href="#">{{date("M j, Y", strtotime($news->created_at))}}</a>, by: <a href="#">{{$news->author}}</a>
        </div>
        <!-- entity_meta -->

        <div class="entity_content">
            {{$news->short_description}}
        </div>
        <!-- entity_content -->

        <div class="entity_social">
            <span><i class="fa fa-share-alt"></i>424 <a href="#">Shares</a> </span>
            <span><i class="fa fa-comments-o"></i>4 <a href="#">Comments</a> </span>
        </div>
        <!-- entity_social -->

    </div>
    @else
    <!-- entity_wrapper -->
    @if ($loop->even)
    <div class="row" style="margin-bottom: 15px;">
        <div class="col-md-6">
            <div class="category_article_body">
                <div class="top_article_img">
                    <img class="lozad -category-image" width="350" height="186" data-src="{{$news->image}}"
                        alt="{{$news->title}}">
                </div>
                <!-- top_article_img -->

                <div class="category_article_title">
                    <h5><a href="{{route('news', $news->slug)}}" target="_blank">{{$news->title}}</a></h5>
                </div>
                <!-- category_article_title -->

                <div class="article_date">
                    <a href="#">{{date("M j, Y", strtotime($news->created_at))}}</a>, by: <a
                        href="#">{{$news->author}}</a>
                </div>
                <!-- article_date -->

                <div class="category_article_content">
                    {{$news->short_description}}
                </div>
                <!-- category_article_content -->

                <div class="article_social">
                    <span><a href="#"><i class="fa fa-share-alt"></i>424 </a> Shares</span>
                    <span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
                </div>
                <!-- article_social -->

            </div>
            <!-- category_article_body -->

        </div>
        <!-- col-md-6 -->
        @else
        <div class="col-md-6">
            <div class="category_article_body">
                <div class="top_article_img">
                    <img class="lozad " width="350" height="186" data-src="{{$news->image}}" alt="{{$news->title}}">
                </div>
                <!-- top_article_img -->

                <div class="category_article_title">
                    <h5><a href="{{route('news', $news->slug)}}" target="_blank">{{$news->title}}</a></h5>
                </div>
                <!-- category_article_title -->

                <div class="article_date">
                    <a href="#">{{date("M j, Y", strtotime($news->created_at))}}</a>, by: <a
                        href="#">{{$news->author}}</a>
                </div>
                <!-- article_date -->

                <div class="category_article_content">
                    {{$news->short_description}}
                </div>
                <!-- category_article_content -->

                <div class="article_social">
                    <span><a href="#"><i class="fa fa-share-alt"></i>424 </a> Shares</span>
                    <span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
                </div>
                <!-- article_social -->

            </div>
            <!-- category_article_body -->

        </div>
        <!-- col-md-6 -->
        @endif
        @if ($loop->odd || $loop->last)
    </div>
    @endif
    @endif
    <!-- row -->
    @endforeach

    {{-- <div class="widget_advertisement">
        <img class="lozad img-responsive" data-src="assets/img/category_advertisement.jpg" alt="{{$news->title}}">
</div> --}}
<!-- widget_advertisement -->

{{$newsC['data']->links()}}

{{-- <nav aria-label="Page navigation" class="pagination_section">
        <ul class="pagination">
            <li>
                <a href="#" aria-label="Previous"> <span aria-hidden="true">&laquo;</span> </a>
            </li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>
                <a href="#" aria-label="Next" class="active"> <span aria-hidden="true">&raquo;</span> </a>
            </li>
        </ul>
    </nav> --}}
<!-- navigation -->

</div>
@endsection