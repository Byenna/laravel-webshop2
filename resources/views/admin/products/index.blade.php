@extends('layouts.admin')

@section('content')



<div class="py-12">

    <div class="container">
        <div class="row">


            <div class="col-md-8">
                <div class="card">

                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('success')}}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <div class="card-header"> All product </div>


                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">SL No</th>
                                <th scope="col">product Name</th>
                                <th scope="col">product Image</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <!-- @php($i = 1) -->
                            @foreach($products as $product)
                            <tr>
                                <th scope="row"> {{$products->firstItem()+$loop->index }} </th>
                                <td> {{ $product->product_name }} </td>
                                <td> <img src="{{ asset($product->product_image) }}" style="height:40px; width:70px;"> </td>
                                <td>
                                    @if($product->created_at == NULL)
                                    <span class="text-danger"> No Date Set</span>
                                    @else
                                    {{ Carbon\Carbon::parse($product->created_at)->diffForHumans() }}
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('products/edit/'.$product->id) }}" class="btn btn-info">Edit</a>
                                    <a href="{{ url('products/delete/'.$product->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
                                </td>



                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                    {{ $products->links() }}

                </div>
            </div>


            <div class="col-md-4">
                <div class="card">
                    <div class="card-header"> Add product </div>
                    <div class="card-body">


                        <form action="{{ route('store.product') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">product Name</label>
                                <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                @error('product_name')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror

                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">product Image</label>
                                <input type="file" name="product_image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                @error('product_image')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror

                            </div>




                            <button type="submit" class="btn btn-primary">Add product</button>
                        </form>

                    </div>

                </div>
            </div>

        </div>
    </div>




</div>



@endsection