@extends('back_end.layout.app')
@php
    $pagetitle=" Video Page";
    $desciption="Here you can edit Videos"
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
                    <form method="POST" action="{{route('videos.update',$row->id)}}">
                        @method('PUT')
                        @include('back_end.videos.form')
                        <button type="submit" class="btn btn-primary pull-right">Update</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <iframe width="300"  src="https://www.youtube.com/embed/bULHYPjbdZU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
    </div>
    </div>
@endsection
