<?php

namespace App\Http\Controllers\Api\v1;

use App\Category;
use App\Transformers\CategoryTransformer;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::all();
        return $this->response()->collection($data, new CategoryTransformer());
    }
}
