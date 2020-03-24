@extends('test-view.template')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th class="td-id">#</th>
                <th class="td-title">title</th>

                <th class="td-content">content</th>
                <th>
                    <a href="{{route('admin.post.create')}}" class="btn btn-dark" role="button">Create post</a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <th>{{$post->id}}</th>
                    <td>{{$post->title}}</td>

                    <td class="justify">{{$post->small_text}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{route('admin.post.edit', ['post'=>$post])}}" class="btn btn-edit" role="button">Edit</a>
                            <a href="{{route('post.show', ['post'=>$post])}}" class="btn btn-show" role="button">Show</a>
                            <button type="submit" form="delete-post" class="btn btn-delete">Delete</button>
                            <form method="post" action="{{route('admin.post.delete', ['post' => $post])}}" style="display: none" id="delete-post">
                                @csrf
                                @method('DELETE')
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

