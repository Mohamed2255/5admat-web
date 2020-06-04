@extends('back_end.layout.app')
@php
    $pagetitle="Create  Videos";
    $desciption="Here you can create Videos"
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
                    <form method="POST" action="{{route('videos.store')}}">
                        @include('back_end.videos.form')
                        <button type="submit" class="btn btn-primary pull-right">Add Video</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
