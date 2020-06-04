<?php

namespace App\Http\Controllers\BackEnd;
use App\Http\Requests\BackEnd\page\Store;
use App\Models\Page;


class Pages extends BackEndController
{
    public function __construct(Page $model)
    {
        parent::__construct($model);
    }


    public function store(Store $request){
        Page::create($request->all());
        dd($request->all());
        return redirect()->route('pages.index');
    }


    public function update($id,Store $request){
        $row=Page::findOrFail($id);
        $row->update($request->all());
        return redirect()->route('pages.index');
    }
}
