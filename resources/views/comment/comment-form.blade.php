<div class="entity_comments">
    <div class="entity_inner__title header_black">
        <h2>Add a Comment</h2>
    </div>
    <!--Entity Title -->

    <div class="entity_comment_from">
        <form action="{{route('comment.store', $news)}}" method="POST">
            @csrf
            <div class="form-group comment">
                <textarea class="form-control" name="text" id="inputComment" placeholder="Comment"></textarea>
            </div>

            <button type="submit" class="btn btn-submit red">Submit</button>
        </form>
    </div>
    <!--Entity Comments From -->

</div>