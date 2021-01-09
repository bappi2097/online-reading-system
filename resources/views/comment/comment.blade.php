<div class="readers_comment">
    <div class="entity_inner__title header_purple">
        <h2>Readers Comment</h2>
    </div>
    <!-- entity_title -->
    @foreach ($comments as $comment)
    <div class="media">
        <div class="media-left">
            <a href="#">
                <img alt="{{$comment->user->first_name . " " . $comment->user->last_name}}" class="media-object lozad"
                    data-src="/assets/img/reader_img1.jpg" data-holder-rendered="true">
            </a>
        </div>
        <div class="media-body">
            <h2 class="media-heading"><a href="#">{{$comment->user->first_name . " " . $comment->user->last_name}}</a>
            </h2>
            {{$comment->text}}

            {{-- <div class="entity_vote">
                <a href="{{route('comment.like', $comment)}}"><i class="fas fa-thumbs-up" aria-hidden="true"></i></a>
            <a href="{{route('comment.dislike', $comment)}}"><i class="fas fa-thumbs-down active"
                    aria-hidden="true"></i></a>
        </div> --}}
    </div>

</div>
<!-- media end -->
@endforeach
</div>