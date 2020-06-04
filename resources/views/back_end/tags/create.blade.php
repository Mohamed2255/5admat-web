@extends('back_end.layout.app')
@php
    $pagetitle="Create  Tag";
    $desciption="Here you can create Tags"
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
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">{{$pagetitle}}</h4>
                    <p class="card-category">{{$desciption}}</p>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('tags.store')}}">
                        @include('back_end.tags.form')
                        <button type="submit" class="btn btn-primary pull-right">Add Tag</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
