<?php

namespace App\Http\Controllers;

use App\Http\Requests\Categories\StoreRequest;
use App\Http\Requests\Categories\UpdateRequest;
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

    public function list()
    {
        $categories = Category::query()->get();
        return view('Categories.list', [
            'categories' => $categories
        ]);
    }

    public function edit($id)
    {
        $category = Category::query()->where('id', $id)->first();
        return view('Categories.edit', [
            'category' => $category
        ]);
    }

    public function update($id, UpdateRequest $request)
    {
        $category = Category::query()->where('id', $id)->first();
        $category->name = $request->name;
        $category->save();
        return redirect()->route('category.list');
    }

    public function delete($id)
    {
        $category = Category::query()->where('id', $id)->first();
        $category->delete();
        return redirect()->back()->with('success', 'Category deleted.');
    }
}
