<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Requests\BackEnd\skill\Store;
use App\Models\Skill;

class Skills extends BackEndController
{
    public function __construct(Skill $model)
    {
        parent::__construct($model);
    }


    public function store(Store $request){
        Skill::create($request->all());
        return redirect()->route('skills.index');
    }


    public function update($id,Store $request){
        $row=Skill::findOrFail($id);
        $row->update($request->all());
        return redirect()->route('skills.index');
    }
}
