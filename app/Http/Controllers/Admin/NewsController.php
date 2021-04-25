<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsStore;
use App\Http\Requests\NewsUpdate;
use App\Models\Category;
use App\Models\News;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = (News::orderBy('_id', 'desc')->get());

        return view('admin/news/index', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = (Category::orderBy('_id', 'desc')->get());

        return view('admin/news/create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsStore $request)
    {
        $article = $request->validated();
        $article['author'] = NULL;

        $article = News::create($article);

        if ($article) {

            return redirect()->route('admin');
        }
        
        return back()->withErrors(['Наш сайт сломался. Мы уже решаем эту проблему. Попробуйте зайти через несколько часов']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(News $article)
    {
        $categories = (Category::orderBy('_id', 'desc')->get());

        return view('admin/news/edit', ['article' => $article, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsUpdate $request, News $article)
    {
        $updatedArticle = $request->validated();
        $updatedArticle['author'] = NULL;

        $article->fill($updatedArticle)->save();

        if ($article) {

            return redirect()->back()->with('done', true);
        }

        return back()->withErrors(['Наш сайт сломался. Мы уже решаем эту проблему. Попробуйте зайти через несколько часов']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyAjax(News $article)
    {
        $article->delete();

        return response()->json([
            'deleted' => true,
            'id' => $article->id,
        ]);
    }
}
