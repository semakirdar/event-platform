<?php

namespace App\Http\Controllers;

use App\Http\Requests\Comments\CreateRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(CreateRequest $request)
    {
        $comment = Comment::query()->create([
            'body' => $request->body,
            'event_id' => $request->event_id,
            'user_id' => auth()->user()->id
        ]);
        return redirect()->back();
    }

    public function list()
    {
        $comments = Comment::query()
            ->whereNull('approved_at')
            ->with('event')
            ->get();
        return view('comments.approve', [
            'comments' => $comments
        ]);
    }

    public function approve(Comment $comment)
    {
        $comment->approved_at = now();
        $comment->save();

        return redirect()->back()->with('success', 'Comment approved.');
    }

    public function delete($id)
    {
        $comment = Comment::query()->where('id', $id)->first();

        $comment->delete();
        return redirect()->back()->with('success', 'Comment deleted.');;

    }
}
