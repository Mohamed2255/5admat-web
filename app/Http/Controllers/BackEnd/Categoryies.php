<?php

namespace App\Http\Controllers\BackEnd;


use App\Http\Requests\BackEnd\Categoryies\Store;
use App\Models\Category;

class Categoryies extends BackEndController
{
    public function __construct(Category $model)
    {
        parent::__construct($model);
    }


    public function store(Store $request){
        Category::create($request->all());
        return redirect()->route('categories.index');
    }


    public function update($id,Store $request){
        $row=Category::findOrFail($id);
        $row->update($request->all());
        return redirect()->route('categories.index');
    }

}
