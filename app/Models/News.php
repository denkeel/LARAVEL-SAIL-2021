<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    use HasFactory;

    protected $tableName = 'news';

    public function getNews() {
        return DB::collection($this->tableName)->get();
    }
    
    public function getNewsById(string $id) {
        return DB::collection($this->tableName)->find($id);
    }
}
