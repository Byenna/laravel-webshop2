@extends('layouts.admin')

@section('content')



@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session('success')}}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="py-12">
    <div class="container">
        <div class="row">





            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> Edit product </div>
                    <div class="card-body">


                        <form action="{{ url('product/update/'.$products->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="old_image" value="{{ $products->product_image }}">

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Update product Name </label>
                                <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $products->product_name }}">

                                @error('product_name')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror

                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Update product Image </label>
                                <input type="file" name="product_image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $products->product_image }}">

                                @error('product_image')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror

                            </div>


                            <div class="form-group">
                                <img src="{{ asset($products->product_image) }}" style="width:400px; height:200px;">
                            </div>



                            <button type="submit" class="btn btn-primary">Update product</button>
                        </form>

                    </div>

                </div>
            </div>

        </div>
    </div>

</div>



@endsection