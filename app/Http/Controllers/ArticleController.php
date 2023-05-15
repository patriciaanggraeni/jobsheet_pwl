<?php

namespace App\Http\Controllers;

use App\Models\ArticleModel;
use Illuminate\Http\Request;

class ArticleController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('artikel.articles');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('artikel.articles');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        if ($request->file('image')) {
            $image_name = $request->file('image')->store('image', 'public');
        }

        ArticleModel::create([
            'title' => $request->title,
            'content' => $request->content,
            'featured_image' => $image_name
        ]);

        return view('artikel.articles', ['message' => 'Artikel berhasil di simpan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ArticleModel  $articleModel
     * @return \Illuminate\Http\Response
     */
    public function show(ArticleModel $articleModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ArticleModel  $articleModel
     * @return \Illuminate\Http\Response
     */
    public function edit(ArticleModel $articleModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ArticleModel  $articleModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ArticleModel $articleModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ArticleModel  $articleModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArticleModel $articleModel)
    {
        //
    }
}
