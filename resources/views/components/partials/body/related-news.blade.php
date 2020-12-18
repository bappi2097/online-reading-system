<div class="related_news">
    <div class="entity_inner__title header_purple">
        <h2><a href="#">Related News</a></h2>
    </div>
    <!-- entity_title -->
    @foreach ($related_news as $news)
    <div class="row">
        @if ($loop->odd)
        <div class="col-md-6">
            @endif
            <div class="media">
                <div class="media-left">
                    <a href="#"><img class="lozad media-object -layout-1-sub-image" data-src="{{$news['data']->image}}"
                            alt="{{$news['data']->title}}"></a>
                </div>
                <div class="media-body">
                    <span class="tag purple"><a href="category.html"
                            target="_self">{{$news['category']->name}}</a></span>

                    <h3 class="media-heading"><a href="{{route('news',$news['data']->slug)}}"
                            target="_self">{{$news['data']->title}}</a></h3>
                    <span class="media-date"><a href="#">{{date("M j, Y", strtotime($news['data']->created_at))}}</a>,
                        by: <a href="#">{{$news['data']->author}}</a></span>

                    <div class="media_social">
                        <span><a href="#"><i class="fa fa-share-alt"></i>424</a> Shares</span>
                        <span><a href="#"><i class="fa fa-comments-o"></i>4</a> Comments</span>
                    </div>
                </div>
            </div>
            @if ($loop->even)
        </div>
        @endif
    </div>
    @endforeach
</div>