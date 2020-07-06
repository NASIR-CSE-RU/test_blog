<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\postFormValidate;
use App\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.post');
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
    public function store(postFormValidate $request)
    {
        $arr=request()->all();
        $cover =request()->file('image');
        $title =request()->title;
        $file=$title.'.'.$cover->getClientOriginalExtension();
        Storage::disk('public')->put($file,  File::get($cover));
        $post=new Post($arr);
        $post->image=$file;
        $post->save();
        dd($arr);
    }

    public function unpublish($id){
        Post::whereId($id)->update(['publish'=>0]);
        return view('admin.main');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
