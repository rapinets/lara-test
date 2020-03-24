@extends('layouts.app')

@section('create')
    <div class="main-container">
        <div class="card-container">
            <div class="card-wrap">
                <div class="card">
                    <div class="card-header">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="card-body">
                        <div class="main-container">
                            <form method="post" action="{{route('admin.post.store')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input type="slug" name="slug" id="slug" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="img">Image</label>
                                    <input type="text" name="img" id="img" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="small_text">Small Text</label>
                                    <textarea type="text" name="small_text" id="small_text" class="form-control" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="content">Content</label>
                                    <textarea type="text" name="content" id="content" class="form-control" rows="4"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
