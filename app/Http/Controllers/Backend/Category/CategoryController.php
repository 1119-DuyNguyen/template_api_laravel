<?php

namespace App\Http\Controllers\Backend\Category;

use App\Http\Controllers\Controller;
use App\Http\Controllers\CRUDApiController;
use App\Http\Requests\Backend\CategoryRequest;
use App\Models\Category;
use App\Traits\CrudTrait;


class CategoryController extends CRUDApiController
{

    protected function model(): string
    {
        return Category::class;
    }

    protected function getFormRequest(): string
    {
        return CategoryRequest::class;
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
