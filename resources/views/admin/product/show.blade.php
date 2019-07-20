@extends('layouts.backend.master')
@section('content')
    <div class="row">
        <div class="col-12">

            <div class="box box-default">
                <div class="box-header with-border">
                    <h4 class="box-title">Product</h4>
                    <h6 class="box-subtitle">Details</h6>
                </div>
                <!-- /.box-header -->
                <div class="box-body wizard-content">
                    <table class="table table-bordered table-hover table-striped">
                        <tr>
                            <th style="width: 10%">Name</th>
                            <td>{{ $product->name }}</td>
                        </tr>
                        <tr>
                            <th>Category</th>
                            <td>{{ $product->category->name }}</td>
                        </tr>
                        <tr>
                            <th>Brand</th>
                            <td>{{ $product->brand->name }}</td>
                        </tr>
                        <tr>
                            <th>Color</th>
                            <td>{{ $product->color }}</td>
                        </tr>
                        <tr>
                            <th>Size</th>
                            <td>{{ $product->size }}</td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td>{{ $product->price }}</td>
                        </tr>
                        <tr>
                            <th>Stock</th>
                            <td>{{ $product->stock }}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>{{ ucfirst($product->status) }}</td>
                        </tr>
                        <tr>
                            <th>Details</th>
                            <td>{{ $product->description }}</td>
                        </tr>
                        <tr>
                            <th>Images</th>
                            <td>
                                @if(count($product->product_image))
                                    @foreach($product->product_image as $image)
                                        <img style="width: 20%" src="{{ asset($image->file_path) }}" alt="">
                                    @endforeach
                                @endif
                            </td>
                        </tr>
                    </table>
                    <br>
                    <a href="{{ route('product.index') }}" class="btn btn-primary btn-sm">Back</a>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
@endsection