<section id="feature_news_section" class="feature_news_section">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="feature_article_wrapper">
                    <div class="feature_article_img">
                        <img class="lozad img-responsive top_static_article_img -hero-hotnews"
                            data-src="{{$hotNews->image}}" alt="feature-top">
                    </div>
                    <!-- feature_article_img -->

                    <div class="feature_article_inner">
                        <div class="tag_lg red"><a href="{{route('category', 'hot-news')}}">{{__('Hot News')}}</a></div>
                        <div class="feature_article_title">
                            <h1><a href="{{route('news',$hotNews->slug)}}" target="_self"> {{ $hotNews->title }} </a>
                            </h1>
                        </div>
                        <!-- feature_article_title -->

                        <div class="feature_article_date"><a href="#" target="_self">{{ $hotNews->author }}</a>,<a
                                href="#" target="_self">Aug
                                4, 2015</a></div>
                        <!-- feature_article_date -->

                        <div class="feature_article_content">
                            {{$hotNews->short_description}}
                        </div>
                        <!-- feature_article_content -->

                        <div class="article_social">
                            <span><i class="fa fa-share-alt"></i><a href="#">424</a>Shares</span>
                            <span><i class="fa fa-comments-o"></i><a href="#">4</a>Comments</span>
                        </div>
                        <!-- article_social -->

                    </div>
                    <!-- feature_article_inner -->

                </div>
                <!-- feature_article_wrapper -->

            </div>
            <!-- col-md-7 -->
            @foreach ($topViews as $topView)
            <div class="col-md-5" style="margin-bottom: 20px">
                <div class="feature_static_wrapper">
                    <div class="feature_article_img">
                        <img class="lozad img-responsive" style="height: 300px; width: 457px;"
                            data-src="{{$topView->image}}" alt="feature-top">
                    </div>
                    <!-- feature_article_img -->

                    <div class="feature_article_inner">
                        <div class="tag_lg purple"><a href="{{route('category', 'top-viewed')}}">Top Viewed</a></div>
                        <div class="feature_article_title">
                            <h2><a href="{{route('news', $topView->slug)}}" target="_self">{{$topView->title}}</a>
                            </h2>
                        </div>
                        <!-- feature_article_title -->

                        <div class="feature_article_date"><a href="#" target="_self">{{$topView->author}}</a>,<a
                                href="#" target="_self">{{date("M j, Y", strtotime($topView->created_at))}}</a></div>
                        <!-- feature_article_date -->

                        <div class="feature_article_content">
                            In a move to address mounting concerns about security on Android...
                        </div>
                        <!-- feature_article_content -->

                        <div class="article_social">
                            <span><i class="fa fa-share-alt"></i><a href="#">424</a>Shares</span>
                            <span><i class="fa fa-comments-o"></i><a href="#">4</a>Comments</span>
                        </div>
                        <!-- article_social -->

                    </div>
                    <!-- feature_article_inner -->

                </div>
                <!-- feature_static_wrapper -->

            </div>
            @endforeach
            <!-- col-md-5 -->

            {{-- <div class="col-md-5">
                <div class="feature_static_last_wrapper">
                    <div class="feature_article_img">
                        <img class="lozad img-responsive" data-src="assets/img/feature-static2.jpg" alt="feature-top">
                    </div>
                    <!-- feature_article_img -->

                    <div class="feature_article_inner">
                        <div class="tag_lg blue"><a href="{{route('category', 'top-viewed')}}">Top Viewed</a>
        </div>

        <div class="feature_article_title">
            <h1><a href="single.html" target="_self">Gadget user good news</a></h1>
        </div>
        <!-- feature_article_title -->

        <div class="feature_article_date"><a href="#" target="_self">Stive Clark</a>,<a href="#" target="_self">Aug
                4, 2015</a></div>
        <!-- feature_article_date -->

        <div class="feature_article_content">
            In a move to address mounting concerns about security on Android...
        </div>
        <!-- feature_article_content -->

        <div class="article_social">
            <span><i class="fa fa-share-alt"></i><a href="#">424</a>Shares</span>
            <span><i class="fa fa-comments-o"></i><a href="#">4</a>Comments</span>
        </div>
        <!-- article_social -->

    </div>
    <!-- feature_article_inner -->

    </div>
    <!-- feature_static_wrapper -->

    </div> --}}
    <!-- col-md-5 -->

    </div>
    <!-- Row -->

    </div>
    <!-- container -->

</section>