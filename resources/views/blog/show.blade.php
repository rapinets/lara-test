@extends('layouts.postlayout')
@section('show-content')
    <div class="show-card">
        <div class="show-card-img">
            {{$post->img}}
        </div>
        <div class="show-card-body">
            <div class="show-card-title">
                <h3>{{$post->title}}</h3>
            </div>
            <div class="show-card-content">
                <p>{{$post->content}}</p>
            </div>
        </div>
    </div>
@endsection



