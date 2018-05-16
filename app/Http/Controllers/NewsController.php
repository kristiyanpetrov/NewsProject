<?php

namespace App\Http\Controllers;

use App\Category;
use App\News;
use App\Tags;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tag;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();

        return view ('news.index')->with('news', $news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        $tags = Tags::all();

        return view ( 'news.create')->with('categories', $categories)
                                          ->with('tags', $tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title'         => 'required',
            'content_id'    => 'required',
            'author'        => 'required',
            'image_gallery' => 'required|image',
            'rank'          => 'required',
            'category'      => 'required',
            'tags'          => 'required'
        ]);

        $news = new News;

        $image_gallery = $request->image_gallery;

        $image_new_name = time() . $image_gallery->getClientOriginalName();

        $image_gallery->move('uploads/images/news', $image_new_name);


        $news->title          = $request->title;
        $news->content_id     = $request->content_id;
        $news->image_gallery  = 'uploads/images/news/' . $image_new_name;
        $news->author         = $request->author;
        $news->rank           = $request->rank;
        $news->category       = $request->category;
        $news->tags           = $request->tags;

        $news->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);

        return view ('news.edit')->with('news', $news);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'         => 'required',
            'content_id'    => 'required',
            'author'        => 'required',
            'image_gallery' => 'required|image',
            'rank'          => 'required',
            'category'      => 'required',
            'tags'          => 'required'
        ]);

        $news = News::find($id);

        if($request->hasFile('image_gallery'))
        {
            $image_gallery  = $request->image_gallery;
            $image_new_name = time() .$image_gallery->getClientOriginalName();
            $image_gallery->move('uploads/images/news', $image_new_name);

            $news->image = 'uploads/images/news/' .$image_new_name;

            $news->save();
        }

        $news->title          = $request->title;
        $news->content_id     = $request->content_id;
        $news->image_gallery  = 'uploads/images/news/' . $image_new_name;
        $news->author         = $request->author;
        $news->category       = $request->category;
        $news->tags           = $request->tags;
        $news->rank           = $request->rank;

        $news->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }
}
