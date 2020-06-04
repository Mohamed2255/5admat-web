<?php

namespace App\Http\Controllers\BackEnd;
use App\Http\Requests\BackEnd\video\Store;
use App\Models\Category;
use App\Models\Skill;
use App\Models\Tag;
use App\Models\Video;


class Videos extends BackEndController
{
    public function __construct(Video $model)
    {
        parent::__construct($model);
    }

    public function index(){
        $rows=$this->model->with('user','cat');
        $rows=$this->filter($rows);
        $rows=$rows->paginate(10);
        return view('back_end.'.$this->getClassNameFrommodel().'.index',compact('rows'));
    }
    public function store(Store $request){
        $requestarray =$request->all() + ['user_id' => auth()->user()->id];
        $row=Video::create($requestarray);
        if (isset($requestarray['skills']) && !empty($requestarray['skills']))
        {
            $row->skills()->sync($requestarray['skills']);
        }
        if (isset($requestarray['tags']) && !empty($requestarray['tags']))
        {
            $row->tags()->sync($requestarray['tags']);
        }

        return redirect()->route('videos.index');
    }
    public function edit($id){
        $row=$this->model->findOrFail($id);
        $categories=Category::get();
        $skills=Skill::get();
        $tags=Tag::get();
        return view('back_end.'.$this->getClassNameFrommodel().'.edit',
            compact('row','categories','skills','tags'));
    }
    public function create(){

        $categories=Category::get();
        $skills=Skill::get();
        $tags=Tag::get();
        return view('back_end.'.$this->getClassNameFrommodel().'.create',
            compact('categories','skills','tags'));
    }

    public function update($id,Store $request){
       $requestarray =$request->all();
        $row=Video::findOrFail($id);
        $row->update($request->all());
        if (isset($requestarray['skills']) && !empty($requestarray['skills']))
        {
            $row->skills()->sync($requestarray['skills']);
        }
        if (isset($requestarray['tags']) && !empty($requestarray['tags']))
        {
            $row->tags()->sync($requestarray['tags']);
        }
        return redirect()->route('videos.index');
    }
}
