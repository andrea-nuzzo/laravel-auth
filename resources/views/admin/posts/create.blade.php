@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">Crea un nuovo Post</h2></div>

                    <div class="card-body"> 
                        <form action="{{route("posts.store")}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Add title" >
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea type="text" class="form-control" name="content" id="content" placeholder="Add text" rows="8"></textarea>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="published">
                                <label class="form-check-label" for="published">Published</label>
                            </div>

                            <button type="submit" class="btn btn-outline-dark">Crea</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection