@extends('layouts.postlayout')
@section('content')
    @foreach($posts as $post)
        <div class="card">
            <div class="card-img">
                {{$post->img}}
            </div>
            <div class="card-body">
                <a href="{{route('post.show', $post)}}"><h3>{{$post->title}}</h3></a>
                <p>
                    {{$post->small_text}}
                </p>
            </div>
        </div>
    @endforeach

@endsection

