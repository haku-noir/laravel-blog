<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class RestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::all();
        return response()->json([
            'message' => 'ok',
            'data' => $post,
        ], 200, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->author = 1;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return response()->json([
            'message' => 'Post created successfully',
            'data' => $post
        ], 201, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        if($post){
            return response()->json([
                'message' => 'ok',
                'data' => $post
            ], 200, [], JSON_UNESCAPED_UNICODE);
        }else{
            return response()->json([
                'message' => 'Post not found',
            ], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = [
            'title'=>$request->title,
            'content'=>$request->content
        ];
        $success = Post::where('id', $id)->update($update);
        $post = Post::find($id);
        if($success){
            return response()->json([
                'message'=>'Post updated successfully',
                'data' => $post
            ], 200);
        }else{
            return response ()->json([
                'message'=>'Post update failed',
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $success = Post::where('id', $id)->delete();
        if($success){
            return response()->json([
                'message'=>'Post deleted successfully',
            ], 200);
        }else{
            return response()->json([
                'message'=>'Post deleted failed',
            ], 404);
        }
    }
}
