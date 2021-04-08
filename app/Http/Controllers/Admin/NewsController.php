<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        $articles = (new News())->getNews();

        return view('admin/news/index', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/news/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newsOne = array_slice($request->all(), 2);
        $newsOne['author'] = 'Unknown';

        $date = date_create('now', timezone_open('Europe/Moscow'));
        $dateIso8601 = $date->format(DateTime::ISO8601);

        $newsOne['date'] = $dateIso8601;

        (new News())->insertNewsById($newsOne);

        return redirect()->route('admin/news/create');
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
        $article = (new News())->getNewsById($id);

        return view('admin/news/edit', ['article' => $article]);
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
        $newsOne = array_slice($request->all(), 2);
        $newsOne['author'] = 'Unknown';

        (new News())->updateNewsById($id, $newsOne);

        $request->session()->flash('done', true);

        return redirect()->route('admin/news/edit', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        (new News())->destroyNewsById($id);

        return response()->json([
            'deleted' => $id,
        ]);
    }
}
