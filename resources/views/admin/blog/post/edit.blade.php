@extends('layouts.adminlayout')
@section('edit')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{route('admin.post.update', $post)}}" method="post">

            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{$post->title}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="slug" name="slug" id="slug" value="{{$post->slug}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="img">Image</label>
                <input type="text" name="img" id="img" value="{{$post->img}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="small_text">Small Text</label>
                <textarea type="text" name="small_text" id="small_text" class="form-control" rows="3">{{$post->small_text}}</textarea>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea type="text" name="content" id="content" class="form-control" rows="4">{{$post->content}}</textarea>
            </div>
            <button type="submit" class="btn btn-secondary">save</button>
        </form>
    </div>
@endsection

