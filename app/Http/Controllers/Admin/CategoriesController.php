<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStore;
use App\Http\Requests\CategoryUpdate;
use App\Models\Category;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = (Category::all());

        return view('admin/categories/index', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryStore $request)
    {
        $category = Category::create($request->validated());
        
        if ($category) {
            
            return redirect()->route('admin/categories/index');
        }
        
        return back()->withErrors(['Наш сайт сломался. Мы уже решаем эту проблему. Попробуйте зайти через несколько часов']);
    }
    
    /**
     * AJAX
     * 
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateAjax(CategoryUpdate $request, Category $category) 
    {
        $categoryUpdated = $request->validated();
        dd($request);

        $category->fill($categoryUpdated)->save();

        return response()->json([
            'updated' => true,
            'id' => $category->id,
        ]);
    }

    /**
     * AJAX
     * 
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyAjax(Category $category)
    {
        $category->delete();

        return response()->json([
            'deleted' => true,
            'id' => $category->id,
        ]);
    }
}
