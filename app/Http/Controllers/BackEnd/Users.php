<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Requests\BackEnd\Users\Store;
use App\Http\Requests\BackEnd\Users\Update;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class Users extends BackEndController
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }


    public function store(Store $request){
        $requestarray=$request->all();
        $requestarray['password']= Hash::make($requestarray['password']);
        User::create($requestarray);
        return redirect()->route('users.index');
    }


    public function update($id,Update $request){
        $row=User::findOrFail($id);
        $requestarray=$request->all();
        if (isset($requestarray['password']) && $requestarray['password']!='')
        {
            $requestarray['password']= Hash::make($requestarray['password']);
        }
        else
        {
            unset($requestarray['password']);
        }
        $row->update($requestarray);
        return redirect()->route('users.index');
    }

    protected function filter($rows)
    {
        if (request()->has('name') && request()->get('name') != '')
        {
            $rows=$rows->where('name',request()->get('name'));
        }
        return $rows;
    }







}
