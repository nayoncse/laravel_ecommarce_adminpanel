@extends('layouts.backend.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Search box</h4>
                    <div class="box-controls pull-right">
                        <a href="{{ route('product.create') }}" class="btn btn-info btn-sm pull-right">Add New</a>
                        <form>
                            <div class="lookup lookup-circle lookup-right">
                                <input type="text" name="search" value="{{ request()->search }}">
                                <select name="status" id="">
                                    <option value="">Select Status</option>
                                    <option @if(request()->status == 'Active') selected @endif value="Active">Active</option>
                                    <option @if(request()->status == 'Inactive') selected @endif value="Inactive">Inactive</option>
                                </select>
                                <button class="btn btn-sm btn-warning pull-right" type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $serial++ }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->stock }}</td>
                                    <td><span class="label {{ ($product->status == 'active')?'label-info':'label-danger'}}">{{ ucfirst($product->status) }}</span></td>
                                    <td>
                                        @if($product->deleted_at == null)
                                            <a href="{{ route('product.show',$product->id) }}" class="btn btn-sm btn-primary">Details</a>
                                            <a href="{{ route('product.edit',$product->id) }}" class="btn btn-sm btn-info">Edit</a>
                                            <form action="{{ route('product.destroy',$product->id) }}" method="post" style="display: inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you confirm to delete this product?')">Delete</button>
                                            </form>
                                        @else
                                            <form action="{{ route('product.restore',$product->id) }}" method="post" style="display: inline">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-warning" onclick="return confirm('Are you confirm to restore this product?')">Restore</button>
                                            </form>
                                            <form action="{{ route('product.delete',$product->id) }}" method="post" style="display: inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you confirm to permanent delete this product?')">Permanent Delete</button>
                                            </form>
                                        @endif

                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    {{ $products->render() }}
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection