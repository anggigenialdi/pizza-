@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Pizza</div>
                @if(count($errors)> 0 )
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error )
                            <p>{{ $error }} </p>                        
                        @endforeach
                    </div>
                @endif
                <form action="{{ route('pizza.store') }}" method="post" enctype="multipart/form-data" >@csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name of Pizza</label>
                            <input type="text" class="form-control" name="name" placeholder="name of pizza" value="{{$pizza->name}}">
                        </div>
                        <div class="form-group">
                            <label for="description">Descripton of Pizza</label>
                            <textarea name="description" class="form-control">{{$pizza->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Pizza price($)</label>
                            <input type="text" class="form-control" placeholder="small pizza price" name="small_pizza_price" value="{{$pizza->small_pizza_price}}">
                            <input type="text" class="form-control" placeholder="medium pizza price" name="medium_pizza_price" value="{{$pizza->medium_pizza_price}}">
                            <input type="text" class="form-control" placeholder="large pizza price" name="large_pizza_price" value="{{$pizza->large_pizza_price}}">
                        </div>
                        <div class="form-group">
                            <label for="description">Category</label>
                            <select class="form-control" name="category">
                                <option value="">-= please select =-</option>
                                <option value="vegetarian" {{ $pizza->category == "vegetarian" ? "selected" : ""}} >Vegetarian Pizza</option>
                                <option value="nonvegetarian" {{ $pizza->category == "nonvegetarian" ? "selected" : ""}}  >Nonvegetarian Pizza</option>
                                <option value="traditional" {{ $pizza->category == "traditional" ? "selected" : ""}}  >Traditional Pizza</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control">
                            <img src="{{Storage::url($pizza->image)}}" alt="img" width="80">
                        </div><br>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
