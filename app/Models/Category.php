<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;

    protected $tableName = 'categories';

    public function getCategories()
    {
        return DB::collection($this->tableName)->get();
    }

    public function getCategoryById(string $id)
    {
        return DB::collection($this->tableName)->find($id);
    }

    public function insertCategory($newsOne)
    {
        return DB::collection($this->tableName)->insert($newsOne);
    }

    public function updateCategoryById(string $id, $newsOne)
    {
        return DB::collection($this->tableName)->where('_id', $id)->update($newsOne);
    }

    public function destroyCategoryById(string $id)
    {
        return DB::collection($this->tableName)->where('_id', $id)->delete();
    }
}
