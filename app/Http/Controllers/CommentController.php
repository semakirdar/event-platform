<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function create(Request $request)
    {
        $comment = Comment::query()->create([
            'body' => $request->body,
            'event_id' => $request->event_id,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->back();
    }

}
