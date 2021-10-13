<?php

namespace App\Http\Controllers;

use App\Http\Requests\Categories\StoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('Categories.create');
    }

    public function store(StoreRequest $request)
    {
        $category = Category::query()->create([
            'name' => $request->name
        ]);
        return redirect()->route('home');
    }
}
