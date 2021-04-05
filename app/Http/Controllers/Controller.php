<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $articles = [
        ['id' => 1,
        'heading' => 'Article 1',
        'content' => 'Аbandon lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit assumenda, labore cum accusamus distinctio reiciendis temporibus nemo error laboriosam ab.'],
        ['id' => 2,
        'heading' => 'Article 2',
        'content' => 'Reckless lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit assumenda, labore cum accusamus distinctio reiciendis temporibus nemo error laboriosam ab labore cum accusamus distinctio reiciendis temporibus nemo error laboriosam ab.'],
    ];
}
