@extends('layouts.backend.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Search box</h4>
                    <div class="box-controls pull-right">
                        <a href="{{ route('user.create') }}" class="btn btn-info btn-sm pull-right">Add New</a>
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
                                <th>Type</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $serial++ }}</td>
                                    <td>{{ ucfirst($user->type) }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td><span class="label {{ ($user->status == 'active')?'label-info':'label-danger'}}">{{ ucfirst($user->status) }}</span></td>
                                    <td>
                                        @if($user->deleted_at == null)
                                            <a href="{{ route('user.edit',$user->id) }}" class="btn btn-sm btn-info">Edit</a>
                                            <form action="{{ route('user.destroy',$user->id) }}" method="post" style="display: inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you confirm to delete this user?')">Delete</button>
                                            </form>
                                        @else
                                            <form action="{{ route('user.restore',$user->id) }}" method="post" style="display: inline">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-warning" onclick="return confirm('Are you confirm to restore this user?')">Restore</button>
                                            </form>
                                            <form action="{{ route('user.delete',$user->id) }}" method="post" style="display: inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you confirm to permanent delete this user?')">Permanent Delete</button>
                                            </form>
                                        @endif

                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    {{ $users->render() }}
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection