@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Menu') }}</div>
                <div class="card-body">
                    <ul class="list-group">
                        <a href="{{ route('pizza.index') }}" class="list-group-item list-group-item-action">View</a>
                        <a href="{{ route('pizza.create') }}" class="list-group-item list-group-item-action">Add</a>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Pizza') }}</div>
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
                            <input type="text" class="form-control" name="name" placeholder="name of pizza">
                        </div>
                        <div class="form-group">
                            <label for="description">Descripton of Pizza</label>
                            <textarea name="description" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Pizza price($)</label>
                            <input type="number" class="form-control" placeholder="small pizza price" name="small_pizza_price">
                            <input type="number" class="form-control" placeholder="medium pizza price" name="medium_pizza_price">
                            <input type="number" class="form-control" placeholder="large pizza price" name="large_pizza_price">
                        </div>
                        <div class="form-group">
                            <label for="description">Category</label>
                            <select class="form-control" name="category">
                                <option value="">-= please select =-</option>
                                <option value="vegetarian">Vegetarian Pizza</option>
                                <option value="nonvegetarian">Nonvegetarian Pizza</option>
                                <option value="traditional">Traditional Pizza</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control">
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
