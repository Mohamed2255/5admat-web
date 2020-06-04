<?php


namespace App\Http\Controllers\BackEnd;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;


class BackEndController extends Controller
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model=$model;
    }


    public function index(){
        $rows=$this->model;
        $rows=$this->filter($rows);
        $rows=$rows->paginate(10);
        return view('back_end.'.$this->getClassNameFrommodel().'.index',compact('rows'));
    }
    public function create(){

        return view('back_end.'.$this->getClassNameFrommodel().'.create');
    }
    public function destroy($id){
        $this->model-> findOrFail($id)->delete();
        return redirect()->route(''.$this->getClassNameFrommodel().'.index');
    }
    public function edit($id){
        $row=$this->model->findOrFail($id);
        return view('back_end.'.$this->getClassNameFrommodel().'.edit',compact('row'));
    }

    protected function filter($rows)
    {
        return $rows;
    }
    protected function getClassNameFrommodel(){
        return str::plural(strtolower(class_basename($this->model)));
    }
}
