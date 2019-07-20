@extends('layouts.backend.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Search box</h4>
                    <div class="box-controls pull-right">
                        <a href="{{ route('brand.create') }}" class="btn btn-info btn-sm pull-right">Add New</a>
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
                                <th>Details</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            @foreach($brands as $brand)
                                <tr>
                                    <td>{{ $serial++ }}</td>
                                    <td>{{ $brand->name }}</td>
                                    <td>{{ $brand->details }}</td>
                                    <td><span class="label {{ ($brand->status == 'active')?'label-info':'label-danger'}}">{{ $brand->status }}</span></td>
                                    <td>
                                        @if($brand->deleted_at == null)
                                            <a href="{{ route('brand.edit',$brand->id) }}" class="btn btn-sm btn-info">Edit</a>
                                            <form action="{{ route('brand.destroy',$brand->id) }}" method="post" style="display: inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you confirm to delete this brand?')">Delete</button>
                                            </form>
                                        @else
                                            <form action="{{ route('brand.restore',$brand->id) }}" method="post" style="display: inline">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-warning" onclick="return confirm('Are you confirm to restore this brand?')">Restore</button>
                                            </form>
                                            <form action="{{ route('brand.delete',$brand->id) }}" method="post" style="display: inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you confirm to permanent delete this brand?')">Permanent Delete</button>
                                            </form>
                                        @endif

                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    {{ $brands->render() }}
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection