<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\News;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function store(Request $request, News $news)
    {
        $this->validate($request, [
            'text' => ['required', 'string'],
        ]);

        $data = [
            'text' => $request->text,
            'news_id' => $news->id,
            'user_id' => auth()->user()->id,
        ];

        if (Comment::insert($data)) {
            return back()->with(notification('success', 'Wow. You make a comment'));
        } else {
            return back()->with(notification('danger', 'Something Went Wrong!'));
        }
    }
    // public function like(Comment $comment)
    // {
    //     if ($comment->like()) {
    //         return back()->with(notification('success', 'Wow. You like this comment'));
    //     } else {
    //         return back()->with(notification('danger', 'Something Went Wrong!'));
    //     }
    // }

    // public function dislike(Comment $comment)
    // {
    //     if ($comment->dislike()) {
    //         return back()->with(notification('success', 'Yap you dislike it'));
    //     } else {
    //         return back()->with(notification('danger', 'Something Went Wrong!'));
    //     }
    // }
}
