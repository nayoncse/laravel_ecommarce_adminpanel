@csrf
<section>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name">Category Name :</label>
                <input name="name" type="text" value="{{ old('name',isset($category)?$category->name:null) }}"  class="form-control form-control-line @error('name') is-invalid @enderror" id="name">
            </div>
            @error('name')
            <div class="pl-1 text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <div class="form-group">
                @php
                    if(old("status")){
                        $status = old('status');
                    }elseif(isset($category)){
                        $status = $category->status;
                    }else{
                        $status = null;
                    }
                @endphp
                <label for="default">Status</label>
                <br>
                <input name="status" type="radio" value="active" id="active" @if($status =='Active') checked @endif >
                <label for="active">Active</label>
                <input name="status" type="radio" value="inactive" id="inactive" @if($status =='Inactive') checked @endif >
                <label for="inactive">Inactive</label>
            </div>
            @error('status')
            <div class="pl-1 text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
</section>