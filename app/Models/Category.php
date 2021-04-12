<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;

    protected $tableName = 'categories';
    //protected $collection = 'categories';
    protected $fillable = ['name'];

    public function getCategories()
    {
        return DB::collection($this->tableName)->orderBy('_id', 'desc')->get();
    }

    public function getCategoryById(string $id)
    {
        return DB::collection($this->tableName)->find($id);
    }

    public function insertCategory($category)
    {
        return DB::collection($this->tableName)->insert($category);
    }

    public function updateCategoryById(string $id, $category)
    {
        return DB::collection($this->tableName)->where('_id', $id)->update($category);
    }

    public function destroyCategoryById(string $id)
    {
        return DB::collection($this->tableName)->where('_id', $id)->delete();
    }
}
