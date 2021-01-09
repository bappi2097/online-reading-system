<div class="widget">
    <div class="widget_title widget_black">
        <h2><a href="#">Recent News</a></h2>
    </div>
    @foreach ($recentNews as $news)
    <div class="media">
        <div class="media-left">
            <a href="{{route('news', $news->slug)}}"><img class="lozad media-object"
                    style="width: 100px; height: 100px;" data-src="{{$news->image}}" alt="{{$news->title}}"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="{{route('news', $news->slug)}}" target="_self">{{$news->title}}</a>
            </h3> <span class="media-date"><a href="#">{{date("M j, Y", strtotime($news->created_at))}}</a>, by: <a
                    href="#">{{$news->author}}</a></span>
            <div class="widget_article_social">
                <span>
                    <a href="single.html" target="_self"> <i class="fa fa-share-alt"></i>424</a> Shares
                </span>
                <span>
                    <a href="single.html" target="_self"><i class="fa fa-comments-o"></i>4</a> Comments
                </span>
            </div>
        </div>
    </div>
    @endforeach
    {{-- <p class="widget_divider"><a href="#" target="_self">More News&nbsp;&raquo;</a></p> --}}
</div>