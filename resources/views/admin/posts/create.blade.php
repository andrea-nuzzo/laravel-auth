@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">Crea un nuovo Post</h2></div>

                    <div class="card-body"> 
                        <form>
                            <div class="form-group">
                                <label for=""></label>
                                <input type="text" name="title" id="title">
                            </div>
                            <button type="submit" class="btn btn-outline-dark">Crea</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection