<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{

    //  basically a post request instead of get request to get data because in this we will pass video id to get all the comments
    // related to that video
    public function index(Request $request){

        // validate request data
        $validated_request = $request->validate([
           'video_Id' => 'required',
        ]);

        // find all the comments
        $comments = Comment::where('video_id',$validated_request['videoId'])
                ->orderBy('id', 'desc')
                ->get();

        // return comments
        return response($comments, 200);
    }

    // to store in data base ( the data )
    public function store(Request $request){

        // validate request data
        $validated_request = $request->validate([
            'body' => 'required|min:3',
            'video_Id' => 'required',
        ]);

        // create a new comment in database
        $new_comment = Comment::create([
            'body' => $validated_request['body'],
            'user_id' => auth()->id(),
            'is_published' => 1,
            'video_id' => $validated_request['videoId'],
        ]);

        // return it
        return response($new_comment, 200);
    }
}
