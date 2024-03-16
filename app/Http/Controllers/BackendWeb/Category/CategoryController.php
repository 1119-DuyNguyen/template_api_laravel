<?php

namespace App\Http\Controllers\BackendWeb\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CategoryRequest;
use App\Models\Category;
use App\Traits\CrudTrait;


class CategoryController extends Controller
{
    use CrudTrait;

    protected function model(): string
    {
        return Category::class;
    }

    protected function getFormRequest(): string
    {
        return CategoryRequest::class;
    }

    protected function getInputSlug(): string
    {
        return 'name';
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.categories.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }


    //    public function changeStatus(Request $request)
    //    {
    //        $category = Category::findOrFail($request->id);
    //        $category->status = $request->status == 'true' ? 1 : 0;
    //        $category->save();
    //
    //        return response(['message' => 'Status has been updated!']);
    //    }


}
