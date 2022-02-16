@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div>Lista dei Posts</div>
                        <a href="{{route("posts.create")}}"><button type="button" class="btn btn-outline-success">Create New Post</button></a>
                    </div>
    
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Published</th>
                                    <th scope="colr">Show</th>
                                    <th scope="col">Update</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                <tr>
                                    <td>{{$loop->index + 1}}</td>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->slug}}</td>
                                    <td>{{$post->published ? "✅" : "❌"}}</td>
                                    <td><a href="{{route("posts.show", $post->id)}}"><button type="button" class="btn btn-outline-dark">Show</button></a></td>
                                    <td>Update</td>
                                    <td>Delete</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection