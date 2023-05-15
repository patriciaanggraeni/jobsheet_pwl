<?php

namespace App\Http\Controllers;

use App\Models\ArticleModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $data_articles = ArticleModel::all();
        return view('articles')->with('articles', $data_articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $articles = ArticleModel::all();
        return view('artikel.create', ['articles' => $articles]);
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

        return redirect('/articles')->with('success', 'Data Articles Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ArticleModel  $articleModel
     * @return \Illuminate\Http\Response
     */
    public function show(ArticleModel $articleModel) {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ArticleModel  $articleModel
     * @return \Illuminate\Http\Response
     */
    public function edit( $id ) {
        $articles = ArticleModel::find($id);
        return view('artikel.update', ['articles' => $articles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ArticleModel  $articleModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $articles = ArticleModel::find($id);
        $articles->title = $request->title;
        $articles->content = $request->content;

        if ($articles->featured_image && file_exists(storage_path('app/public' . $articles->featured_image))) {
            Storage::delete('public/' . $articles->featured_image);
        }

        $image_name = $request->file('image')->store('image', 'public');
        $articles->featured_image = $image_name;
        $articles->save();

        return redirect('/articles')->with('success', 'Data Artikel Berhasil Dirubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ArticleModel  $articleModel
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id ) {
        ArticleModel::where('id', $id)->delete();
        return redirect('/articles')->with('success', 'Data Artikel Berhasil Dihapus!');
    }
}
