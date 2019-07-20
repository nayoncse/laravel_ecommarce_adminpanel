@csrf
<section>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                @php
                    if(old("type")){
                        $type = old('type');
                    }elseif(isset($user)){
                        $type = $user->type;
                    }else{
                        $type = null;
                    }
                @endphp
                <label for="default">Type</label>
                <br>
                <select name="type" class="form-control">
                    <option value="">--Select--</option>
                    <option value="admin" @if($type=='admin') selected @endif>Admin</option>
                    <option value="manager" @if($type=='manager') selected @endif>Manager</option>

                </select>
            </div>
            @error('type')
            <div class="pl-1 text-danger">{{ $message }}</div>
            @enderror
            
            <div class="form-group">
                <label for="name">User Name :</label>
                <input name="name" type="text" value="{{ old('name',isset($user)?$user->name:null) }}"  class="form-control form-control-line @error('name') is-invalid @enderror" id="name">
            </div>
            @error('name')
            <div class="pl-1 text-danger">{{ $message }}</div>
            @enderror
            
            <div class="form-group">
                <label for="email">Email :</label>
                <input name="email" type="email" value="{{ old('email',isset($user)?$user->email:null) }}"  class="form-control form-control-line @error('email') is-invalid @enderror" id="email">
            </div>
            @error('email')
            <div class="pl-1 text-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="password">Password :</label>
                <input name="password" type="password"   class="form-control form-control-line @error('password') is-invalid @enderror" id="password">
            </div>
            @error('password')
            <div class="pl-1 text-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="password_confirmation">Confirm Password :</label>
                <input name="password_confirmation" type="password"   class="form-control form-control-line @error('password_confirmation') is-invalid @enderror" id="password_confirmation">
            </div>
            
            <div class="form-group">
                <label for="phone">Phone :</label>
                <input name="phone" type="text" value="{{ old('phone',isset($user)?$user->phone:null) }}"  class="form-control form-control-line @error('phone') is-invalid @enderror" id="phone">
            </div>
            @error('phone')
            <div class="pl-1 text-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="image">Image :</label>
                <img src="{{ asset(isset($user)?$user->image:null)  }}" width="30%">
                <input name="image" type="file"   class="form-control form-control-line @error('image') is-invalid @enderror" id="image">
            </div>
            @error('image')
            <div class="pl-1 text-danger">{{ $message }}</div>
            @enderror
            
            <div class="form-group">
                @php
                    if(old("status")){
                        $status = old('status');
                    }elseif(isset($user)){
                        $status = $user->status;
                    }else{
                        $status = null;
                    }
                @endphp
                <label for="default">Status</label>
                <br>
                <input name="status" type="radio" value="active" id="active" @if($status =='active') checked @endif >
                <label for="active">Active</label>
                <input name="status" type="radio" value="inactive" id="inactive" @if($status =='inactive') checked @endif >
                <label for="inactive">Inactive</label>
            </div>
            @error('status')
            <div class="pl-1 text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
</section>