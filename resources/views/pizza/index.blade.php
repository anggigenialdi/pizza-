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
                            @if (count($pizzas)>0)
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
                                        <td>
                                        <a href="{{ route('pizza.edit', $pizza->id) }}">
                                            <button
                                                type="submit"
                                                class="btn btn-primary badge bi bi-x"
                                                title="Edit">
                                            Edit
                                            </button>
                                        </a>
                                        <form
                                            action="?_method=DELETE"
                                            method="POST"
                                            class="d-inline">
                                            <!-- send id user for request method delete -->
                                            <input type="hidden" name="_id" value="" />
                                            <button
                                                type="submit"
                                                class="btn btn-danger badge bi bi-x"
                                                onclick="return confirm('Are you sure to delete this data?')"
                                                title="Delete">
                                            Delete
                                            </button>
                                        </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <p>No pizza to show</p>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
