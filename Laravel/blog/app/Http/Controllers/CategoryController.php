<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorys = Category::all();
        $title = 'Crea';
        $category="";
        return view('pages.Category', compact(
            'categorys',
            'category',
            'title',
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        Category::create($request->all());
        return redirect()->back()->with(['success' => 'Categoria Creata con successo']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $title = 'Modifica';
        $route  = "route('categories.update') ";
        $valueInput = 'old("name", $category->name)';
        return view('pages.Category', compact(
            'category',
            'title',
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCategoryRequest $request, Category $category)
    {
        $category->update($request->all());

        return redirect()->route('categories.create')->with(['success' => 'Categoria modificata con successo']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->articles()->detach();
        $category->delete();

        return redirect()->back()->with(['success' => 'Categoria eliminata']);
    }
}
