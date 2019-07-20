@csrf
<section>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name">Brand Name :</label>
                <input name="name" type="text" value="{{ old('name',isset($brand)?$brand->name:null) }}"  class="form-control form-control-line @error('name') is-invalid @enderror" id="name">
            </div>
            @error('name')
            <div class="pl-1 text-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                @php
                    if(old("status")){
                        $status = old('status');
                    }elseif(isset($brand)){
                        $status = $brand->status;
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
        <div class="col-md-6">
            <div class="form-group">
                <label for="details">Brand Details :</label>
                <textarea name="details" rows="5" class="form-control form-control-line @error('details') is-invalid @enderror" id="details">{{ old('details',isset($brand)?$brand->details:null) }}</textarea>
            </div>
            @error('details')
            <div class="pl-1 text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
</section>