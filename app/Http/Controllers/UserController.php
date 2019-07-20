<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'User List';
        $user = new User();
        $user = $user->withTrashed();
        if($request->has('search') && $request->search != null){
            $user = $user->where('name','like','%'.$request->search.'%');
        }
        if($request->has('status') && $request->status != null){
            $user = $user->where('status',$request->status);
        }
        $user = $user->orderBy('id','DESC')->paginate(10);
        $data['users'] = $user;

        if (isset($request->status) || $request->search) {
            $render['status'] = $request->status;
            $render['search'] = $request->search;
            $user = $user->appends($render);
        }

        $data['serial'] = managePagination($user);
        return view('admin.user.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title']="Create new User";
        return view('admin.user.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'type'=>'required',
            'email'=>'required|unique:users|email',
            'password'=>'required|confirmed',
            'status'=>'required',
        ]);

        $user = $request->except('_token','password');
        $user['password'] = bcrypt($request->password);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $file->move('images/users/',$file->getClientOriginalName());
            $user['image'] = 'images/users/'.$file->getClientOriginalName();
        }


        User::create($user);
        session()->flash('message','User created successfully');
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['title']="Edit User";
        $data['user']=User::findOrFail($id);
        return view('admin.user.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name'=>'required',
            'type'=>'required',
            'email'=>'sometimes|required|email|unique:users,email,'.$user->id,
            'status'=>'required',
            'password'=>'confirmed',
        ]);
        $user_req= $request->except('_token','password');
        if($request->has('password'))
        {
            $user_req['password'] = bcrypt($request->password);
        }

        if($request->hasFile('image')){
            $file = $request->file('image');
            $file->move('images/users/',$file->getClientOriginalName());
            File::delete($user->image);
            $user_req['image'] = 'images/users/'.$file->getClientOriginalName();
        }


        $user->update($user_req);
        session()->flash('message','User updated successfully');
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        session()->flash('message','User deleted successfully');
        return redirect()->route('user.index');
    }
    public function restore($id)
    {
        $user = User::onlyTrashed()->findOrFail($id);
        $user->restore();
        session()->flash('message','User restored successfully');
        return redirect()->route('user.index');
    }
    public function delete($id)
    {
        $user = User::onlyTrashed()->findOrFail($id);
        File::delete($user->image);
        $user->forceDelete();
        session()->flash('message','User has been permanently deleted.');
        return redirect()->route('user.index');
    }
}
