<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Requests\BackEnd\tag\Store;
use App\Models\Tag;


class Tags extends BackEndController
{
    public function __construct(Tag $model)
    {
        parent::__construct($model);
    }


    public function store(Store $request){
        Tag::create($request->all());
        return redirect()->route('tags.index');
    }


    public function update($id,Store $request){
        $row=Tag::findOrFail($id);
        $row->update($request->all());
        return redirect()->route('tags.index');
    }
}
