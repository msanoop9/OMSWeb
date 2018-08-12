@extends('layouts.app')
 
@section('content')
    <div class="container-fluid">
        <div class="row">
 
            <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
                <h1>Add Movie</h1>
                <div class="col-md-4">
                    <form method="post" action="">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Movie Title</label>
                            <input type="text" class="form-control" id="id_title" name="title"
                                   aria-describedby="title" placeholder="Enter title">
                        </div>
                        <div class="form-group">
                            <label for="name">Movie Price</label>
                            <input type="text" class="form-control" id="id_price" name="price"
                                   aria-describedby="price" placeholder="Enter price">
                        </div>
                        <div class="form-group">
                            <label for="description">Movie Description</label>
                            <textarea class="form-control" id="id_description" rows="3" name="description" placeholder="Description"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Movie</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
@endsection