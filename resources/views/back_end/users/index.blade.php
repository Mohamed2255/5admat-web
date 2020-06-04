@extends('back_end.layout.app')
@php
$pagetitle="Users Control";
$desciption="Here you can add/edit/delete Users"
@endphp
@section('title')
    {{$pagetitle}}
@endsection
@section('content')
    @component('back_end.layout.header')
        @slot('nav_title')
            {{$pagetitle}}
        @endslot
    @endcomponent
    <div class="card">
        <div class="card-header card-header-primary">
            <div class="row">
              <div class="col-md-8">
                  <h4 class="card-title ">Simple Table</h4>
                  <p class="card-category"> {{$desciption}}</p>
              </div>
              <div class="col-md-4 text-right">
                  <a href="{{route('users.create')}}" class="btn btn-white btn-round">Add User</a>
              </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                    <tr><th>
                            ID
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Email
                        </th>
                        <th class="text-right">
                            Control
                        </th>
                    </tr></thead>
                    <tbody>
                    @foreach( $rows as $row)
                     <tr>
                        <td>{{$row->id}}</td>
                         <td>{{$row->name}}</td>
                         <td>{{$row->email}}</td>
                         <td class="td-actions text-right">
                             <a href="{{route('users.edit',$row->id)}}"  rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Edit">
                                 <i class="material-icons">edit</i>
                             </a>
                             <form  method="POST" action="{{route('users.destroy',$row->id)}}">
                                @csrf
                                 @method('DELETE')
                                 <button type="submit" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Remove">
                                     <i class="material-icons">close</i></button>
                             </form>
                         </td>
                     </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
