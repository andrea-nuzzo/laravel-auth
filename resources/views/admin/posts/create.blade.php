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
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" placeholder="Add title" value="{{old('title')}}">
                                @error('title')
                                 <div class="alert alert-danger my-2"> {{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea type="text" class="form-control @error('content') is-invalid @enderror" name="content" id="content" placeholder="Add text" rows="8">{{old('content')}}</textarea>
                                @error('content')
                                 <div class="alert alert-danger my-2"> {{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input @error('published') is-invalid @enderror" name="published" id="published" {{old('published') ? 'checked': ''}} >
                                <label class="form-check-label" for="published">Published</label>
                                @error('published')
                                 <div class="alert alert-danger my-2"> {{$message}}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-outline-dark">Crea</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection