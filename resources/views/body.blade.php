@extends('components.layouts.master')

@section('hero')
<x-partials.hero></x-partials.hero>
@endsection

@push('meta')
<title>{{$meta->title}}</title>
<link href="{{$meta->favicon}}" rel=icon>
<meta name="author" content="coronabd-2020">
<link rel="icon" type="image/png" href="{{$meta->logo}}">
<meta property="og:image" content="{{asset($meta->logo)}}">
<meta property="og:image:type" content="image/png/jpg">
<meta property="og:description" content="{{$meta->description}}">
<meta name="keywords" content="{{$meta->keyword}}">
<meta property="og:image" content="{{asset($meta->logo)}}">
<meta property="og:url" content="{{url('/')}}">
<meta property="og:title" content="{{$meta->title}}">
@endpush

@section('content')
<div class="col-md-8">
    @foreach ($contentLayouts as $contentLayout)
    @if ($contentLayout->layout_no == 1)
    <div class="category_section mobile">
        <div class="article_title header_purple">
            <h2><a href="{{route('category', $contentLayout->newsCategory->slug)}}"
                    target="_self">{{$contentLayout->newsCategory->name}}</a></h2>
        </div>
        <!----article_title------>
        @foreach ($contentLayout->newsCategory->news as $index => $news)
        @if ($loop->first)
        <div class="category_article_wrapper">
            <div class="row">
                <div class="col-md-6">
                    <div class="top_article_img">
                        <a href="{{route('news',$news->slug)}}" target="_self"><img class="lozad img-responsive"
                                data-src="{{$news->image}}" alt="feature-top">
                        </a>
                    </div>
                    <!----top_article_img------>
                </div>
                <div class="col-md-6">
                    <span class="tag purple">{{$contentLayout->newsCategory->name}}</span>

                    <div class="category_article_title">
                        <h2><a href="{{route('news',$news->slug)}}" target="_self">{{$news->title}}</a></h2>
                    </div>
                    <!----category_article_title------>
                    <div class="category_article_date"><a href="#">{{date("M j, Y", strtotime($news->created_at))}}</a>,
                        by: <a href="#">{{$news->author}}</a></div>
                    <!----category_article_date------>
                    <div class="category_article_content">
                        {{$news->short_description}}
                    </div>
                    <!----category_article_content------>
                    <div class="media_social">
                        <span><a href="#"><i class="fa fa-share-alt"></i>424 </a> Shares</span>
                        <span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
                    </div>
                    <!----media_social------>
                </div>
            </div>
        </div>
        @else
        @if($index == 1)
        <div class="category_article_wrapper">
            <div class="row">
                @endif
                @if ($loop->even)
                <div class="col-md-6">
                    @endif
                    <div class="media">
                        <div class="media-left">
                            <a href="#"><img class="lozad media-object -layout-1-sub-image" data-src="{{$news->image}}"
                                    alt="Generic placeholder image"></a>
                        </div>
                        <div class="media-body">
                            <span class="tag purple">{{$contentLayout->newsCategory->name}}</span>

                            <h3 class="media-heading"><a href="{{route('news',$news->slug)}}"
                                    target="_self">{{$news->title}}</a></h3>
                            <span class="media-date"><a href="#">{{date("M j, Y", strtotime($news->created_at))}}</a>,
                                by: <a href="#">{{$news->author}}</a></span>

                            <div class="media_social">
                                <span><a href="#"><i class="fa fa-share-alt"></i>424</a> Shares</span>
                                <span><a href="#"><i class="fa fa-comments-o"></i>4</a> Comments</span>
                            </div>
                        </div>
                    </div>
                    @if ($loop->odd || $loop->last)
                </div>
                @endif
                @if($loop->last)
            </div>
        </div>
        @endif
        @endif
        @endforeach
        <p class="divider"><a href="#">More News&nbsp;&raquo;</a></p>
    </div>
    <!-- Mobile News Section -->
    @elseif($contentLayout->layout_no == 2)

    <div class="category_section tablet">
        <div class="article_title header_pink">
            <h2><a href="{{route('category', $contentLayout->newsCategory->slug)}}"
                    target="_self">{{$contentLayout->newsCategory->name}}</a></h2>
        </div>
        <!-- Mobile News Section -->

        <div class="category_article_wrapper">
            <div class="row">
                @foreach ($contentLayout->newsCategory->news as $index => $news)
                <div class="col-md-6">
                    <div class="category_article_body">
                        <div class="top_article_img">
                            <a href="{{route('news',$news->slug)}}" target="_self"><img class="lozad img-responsive"
                                    data-src="{{$news->image}}" alt="feature-top">
                            </a>
                        </div>
                        <!-- top_article_img -->

                        <span class="tag pink"><a href="{{route('category', $contentLayout->newsCategory->slug)}}"
                                target="_self">{{$contentLayout->newsCategory->name}}</a></span>

                        <div class="category_article_title">
                            <h2><a href="{{route('news',$news->slug)}}" target="_self">{{$news->title}}</a></h2>
                        </div>
                        <!-- category_article_title -->

                        <div class="article_date"><a href="#">{{date("M j, Y", strtotime($news->created_at))}}</a>, by:
                            <a href="#">{{$news->author}}</a></div>
                        <!----article_date------>
                        <!-- article_date -->

                        <div class="category_article_content">
                            {{$news->short_description}}
                        </div>
                        <!-- category_article_content -->

                        <div class="media_social">
                            <span><a href="#"><i class="fa fa-share-alt"></i>424 </a> Shares</span>
                            <span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
                        </div>
                        <!-- media_social -->

                    </div>
                    <!-- category_article_body -->

                </div>
                <!-- col-md-6 -->
                @endforeach

            </div>
            <!-- row -->

        </div>
        <!-- category_article_wrapper -->

        <p class="divider"><a href="#">More News&nbsp;&raquo;</a></p>
    </div>
    <!-- Tablet News Section -->
    @elseif($contentLayout->layout_no == 3)

    <div class="category_section camera">
        <div class="article_title header_orange">
            <h2><a href="{{route('category', $contentLayout->newsCategory->slug)}}"
                    target="_self">{{$contentLayout->newsCategory->name}}</a></h2>
        </div>
        <!-- article_title -->
        @foreach ($contentLayout->newsCategory->news as $index => $news)
        <div class="category_article_wrapper">
            <div class="row">
                <div class="col-md-5">
                    <div class="top_article_img">
                        <a href="{{route('news',$news->slug)}}" target="_self">
                            <img class="lozad img-responsive" data-src="{{$news->image}}" alt="{{$news->title}}">
                        </a>
                    </div>
                    <!-- top_article_img -->

                </div>
                <div class="col-md-7">
                    <span class="tag orange">{{$contentLayout->newsCategory->name}}</span>

                    <div class="category_article_title">
                        <h2><a href="{{route('news',$news->slug)}}" target="_self">{{$news->title}}</a></h2>
                    </div>
                    <!-- category_article_title -->

                    <div class="article_date"><a href="#">{{date("M j, Y", strtotime($news->created_at))}}</a>, by: <a
                            href="#">{{$news->author}}</a></div>
                    <!----article_date------>
                    <!-- category_article_wrapper -->

                    <div class="category_article_content">
                        {{$news->short_description}}
                    </div>
                    <!-- category_article_content -->

                    <div class="media_social">
                        <span><a href="#"><i class="fa fa-share-alt"></i>424 </a> Shares</span>
                        <span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
                    </div>
                    <!-- media_social -->

                </div>
                <!-- col-md-7 -->

            </div>
            <!-- row -->

        </div>
        <!-- category_article_wrapper -->
        @endforeach
        <p class="divider"><a href="#">More News&nbsp;&raquo;</a></p>
    </div>
    <!-- Camera News Section -->

    @endif


    @endforeach

    {{-- <div class="category_section gadget">
        <div class="article_title header_black">
            <h2><a href="{{route('category', $contentLayout->newsCategory->slug)}}" target="_self">Gadgets</a></h2>
</div>
<div class="category_article_wrapper">
    <div class="row">
        <div class="col-md-6">
            <div class="category_article_body">
                <div class="top_article_img">
                    <a href="{{route('news',$news->slug)}}" target="_self">
                        <img class="lozad img-responsive" data-src="assets/img/gad_top1.jpg" alt="feature-top">
                    </a>
                </div>
                <!-- top_article_img -->

                <span class="tag black"><a href="{{route('category', $contentLayout->newsCategory->slug)}}"
                        target="_self">Gadgets</a></span>

                <div class="category_article_title">
                    <h2><a href="{{route('news',$news->slug)}}" target="_self">A good news for gadget users Ds tech
                            comming
                            soon</a>
                    </h2>
                </div>
                <!-- category_article_title -->

                <div class="article_date"><a href="#">10Aug- 2015</a>, by: <a href="#">Eric joan</a></div>
                <!----article_date------>
                <div class="category_article_content">
                    Collaboratively administrate empowered markets via plug-and-play networks. Dynamically
                    procrastinate B2C users after.
                </div>
                <!-- category_article_content -->

                <div class="media_social">
                    <span><a href="#"><i class="fa fa-share-alt"></i>424 </a> Shares</span>
                    <span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
                </div>
                <!-- media_social -->

            </div>
            <!-- category_article_body -->

            <div class="category_article_list">
                <div class="media">
                    <div class="media-left">
                        <a href="#"><img class="lozad media-object" data-src="assets/img/cat-mobi-sm1.jpg"
                                alt="Generic placeholder image"></a>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading"><a href="{{route('news',$news->slug)}}" target="_self">Apple launches
                                photo-centric
                                wrist watch for Android</a></h3>
                        <span class="media-date"><a href="#">10Aug- 2015</a>, by: <a href="#">Eric
                                joan</a></span>

                        <div class="media_social">
                            <span><a href="#"><i class="fa fa-share-alt"></i>424</a> Shares</span>
                            <span><a href="#"><i class="fa fa-comments-o"></i>4</a> Comments</span>
                        </div>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <a href="#"><img class="lozad media-object" data-src="assets/img/cat-mobi-sm3.jpg"
                                alt="Generic placeholder image"></a>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading"><a href="{{route('news',$news->slug)}}" target="_self">Apple launches
                                photo-centric
                                wrist watch for Android</a></h3>
                        <span class="media-date"><a href="#">10Aug- 2015</a>, by: <a href="#">Eric
                                joan</a></span>

                        <div class="media_social">
                            <span><a href="#"><i class="fa fa-share-alt"></i>424</a> Shares</span>
                            <span><a href="#"><i class="fa fa-comments-o"></i>4</a> Comments</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- category_article_list -->

        </div>
        <!-- col-md-6 -->

        <div class="col-md-6">
            <div class="category_article_body">
                <div class="top_article_img">
                    <img class="lozad img-responsive" data-src="assets/img/gad_top2.jpg" alt="feature-top">
                </div>
                <!-- top_article_img -->

                <span class="tag black">Gadgets</span>

                <div class="category_article_title">
                    <h2><a href="{{route('news',$news->slug)}}" target="_self">Apple launches photo-centric app for
                            iPads and
                            Android
                            tablets</a></h2>
                </div>
                <!-- category_article_title -->

                <div class="article_date"><a href="#">10Aug- 2015</a>, by: <a href="#">Eric joan</a></div>
                <!-- article_date -->

                <div class="category_article_content">
                    Collaboratively administrate empowered markets via plug-and-play networks. Dynamically
                    procrastinate B2C users after installed base benefits. Dramatically visualize customer
                    directed
                    convergence without revolutionary ROI.
                </div>
                <!-- category_article_content -->

                <div class="article_social">
                    <span><i class="fa fa-share-alt"></i><a href="#">424</a>Shares</span>
                    <span><i class="fa fa-comments-o"></i><a href="#">4</a>Comments</span>
                </div>
                <!-- article_social -->

            </div>
            <!-- category_article_body -->
        </div>
    </div>
    <!-- row -->

</div>
<!-- category_article_wrapper -->

<p class="divider"><a href="#">More News&nbsp;&raquo;</a></p>
</div>
<!-- Gadget News Section -->

<div class="category_section design">
    <div class="article_title header_blue">
        <h2><a href="{{route('category', $contentLayout->newsCategory->slug)}}" target="_self">Design</a></h2>
    </div>
    <!-- row -->

    <div class="category_article_wrapper">
        <div class="row">
            <div class="col-md-6">
                <div class="category_article_body">
                    <div class="top_article_img">
                        <a href="{{route('news',$news->slug)}}" target="_self">
                            <img class="lozad img-responsive" data-src="assets/img/design_top1.jpg" alt="feature-top">
                        </a>
                    </div>
                    <!-- top_article_img -->

                    <span class="tag blue"><a href="{{route('category', $contentLayout->newsCategory->slug)}}"
                            target="_self">Design</a></span>

                    <div class="category_article_title">
                        <h2><a href="{{route('news',$news->slug)}}" target="_self">Marketing Tranportation Fast and </a>
                        </h2>
                    </div>
                    <!-- category_article_title -->

                    <div class="category_article_date"><a href="#">10Aug- 2015</a>, by: <a href="#">Eric joan</a>
                    </div>
                    <!----category_article_date------>
                    <!-- category_article_date -->

                    <div class="category_article_content">
                        Collaboratively administrate empowered markets via plug-and-play networks.
                    </div>
                    <!-- category_article_content -->

                    <div class="media_social">
                        <span><a href="#"><i class="fa fa-share-alt"></i>424 </a> Shares</span>
                        <span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
                    </div>
                    <!-- media_social -->

                </div>
                <!-- category_article_body -->

            </div>
            <!-- col-md-6 -->

            <div class="col-md-6">
                <div class="category_article_body">
                    <div class="top_article_img">
                        <a href="{{route('news',$news->slug)}}" target="_self">
                            <img class="lozad img-responsive" data-src="assets/img/design_top2.jpg" alt="feature-top">
                        </a>
                    </div>
                    <!-- top_article_img -->

                    <span class="tag blue"><a href="{{route('category', $contentLayout->newsCategory->slug)}}"
                            target="_self">Design</a></span>

                    <div class="category_article_title">
                        <h2><a href="{{route('news',$news->slug)}}" target="_self">Theme Hippo launches Unship </a></h2>
                    </div>
                    <!-- category_article_title -->

                    <div class="category_article_date"><a href="#">10Aug- 2015</a>, by: <a href="#">Eric joan</a>
                    </div>
                    <!----category_article_date------>
                    <!-- category_article_date -->

                    <div class="category_article_content">
                        Collaboratively administrate empowered markets via plug-and-play networks.
                    </div>
                    <!-- category_article_content -->

                    <div class="media_social">
                        <span><a href="#"><i class="fa fa-share-alt"></i>424 </a> Shares</span>
                        <span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
                    </div>
                    <!-- media_social -->

                </div>
                <!-- category_article_body -->

            </div>
            <!-- col-md-6 -->

        </div>
        <!-- row -->

    </div>
    <!-- category_article_wrapper -->

    <div class="category_article_wrapper">
        <div class="row">
            <div class="col-md-6">
                <div class="category_article_body">
                    <div class="top_article_img">
                        <a href="{{route('news',$news->slug)}}" target="_self">
                            <img class="lozad img-responsive" data-src="assets/img/design_top3.jpg" alt="feature-top">
                        </a>
                    </div>
                    <!-- top_article_img -->

                    <span class="tag blue"><a href="{{route('category', $contentLayout->newsCategory->slug)}}"
                            target="_self">Design</a></span>

                    < class="category_article_title">
                        <h2><a href="{{route('news',$news->slug)}}" target="_self">Huge Ultimate website builder </a>
                        </h2>
                    </>
                    <!-- category_article_title -->

                    <div class="category_article_date"><a href="#">10Aug- 2015</a>, by: <a href="#">Eric joan</a>
                    </div>
                    <!----category_article_date------>
                    <!-- category_article_date -->

                    <div class="category_article_content">
                        Collaboratively administrate empowered markets via plug-and-play networks.
                    </div>
                    <!-- category_article_content -->

                    <div class="media_social">
                        <span><a href="#"><i class="fa fa-share-alt"></i>424 </a> Shares</span>
                        <span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
                    </div>
                    <!-- media_social -->

                </div>
                <!-- category_article_body -->

            </div>
            <!-- col-md-6 -->

            <div class="col-md-6">
                <div class="category_article_body">
                    <div class="top_article_img">
                        <img class="lozad img-responsive" data-src="assets/img/design_top4.jpg" alt="feature-top">
                    </div>
                    <!-- top_article_img -->

                    <span class="tag blue"><a href="{{route('category', $contentLayout->newsCategory->slug)}}"
                            target="_self">Design</a></span>

                    <div class="category_article_title">
                        <h2><a href="{{route('news',$news->slug)}}" target="_self">Just another theme xdesign</a></h2>
                    </div>
                    <!-- category_article_title -->

                    <div class="category_article_date"><a href="#">10Aug- 2015</a>, by: <a href="#">Eric joan</a>
                    </div>
                    <!-- category_article_date -->

                    <div class="category_article_content">
                        Collaboratively administrate empowered markets via plug-and-play networks.
                    </div>
                    <!-- category_article_content -->

                    <div class="media_social">
                        <span><a href="#"><i class="fa fa-share-alt"></i>424 </a> Shares</span>
                        <span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
                    </div>
                    <!-- media_social -->

                </div>
                <!-- category_article_body -->

            </div>
            <!-- top_article_img -->

        </div>
        <!-- top_article_img -->

    </div>
    <!-- top_article_img -->

    <p class="divider"><a href="#">More News&nbsp;&raquo;</a></p>
</div>
<!-- Design News Section --> --}}
</div>
@endsection