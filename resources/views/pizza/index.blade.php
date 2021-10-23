@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">All Pizza</div>

                    <div class="card-body">
                        @if (session('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Descripton</th>
                                <th scope="col">Category</th>
                                <th scope="col">S.Price</th>
                                <th scope="col">M.Price</th>
                                <th scope="col">L.Price</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pizzas as $key=> $pizza )                                        
                                    <tr>
                                        <th scope="row">{{ $key+1 }}</th>
                                        <td><img src="{{Storage::url($pizza->image)}}" width="80" alt="img"></td>
                                        <td>{{$pizza->name}}</td>
                                        <td>{{$pizza->description}}</td>
                                        <td>{{$pizza->category}}</td>
                                        <td>{{$pizza->small_pizza_price}}</td>
                                        <td>{{$pizza->medium_pizza_price}}</td>
                                        <td>{{$pizza->large_pizza_price}}</td>
                                        <td></td>
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
