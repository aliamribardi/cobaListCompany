@extends('dashboard.layouts.app')

@section('content')

<div class="single-pro-review-area">
                <div class="container-fluid" style="padding-top: 7%">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-bottom: 15%">
                            <div class="review-tab-pro-inner">
                                <div class="profile-dtl">
                                    <h2>Edit Data Company</h2>
                                </div>
                            <form action="/dashboard/{{ $post->id }}" method="POST">
                                @method('put')
                                @csrf
                                <div class="card-block">
                                    <div class="input-group mg-b-15 mg-t-15 col-lg-12">
                                        <input type="text" name="name" class="form-control" placeholder="Name Company" value="{{ old('name', $post->name) }}" required>
                                    </div>
                                    <div class="input-group mg-b-15 col-lg-12">
                                        <input type="text" name="address" class="form-control" placeholder="Address" value="{{ old('address', $post->address) }}" required>
                                    </div>
                                    <div class="input-group mg-b-15 col-lg-12">
                                        <input type="text" name="city" class="form-control" placeholder="City" value="{{ old('city', $post->city) }}" required>
                                    </div>

                                    <div class="input-group mg-b-15 col-lg-12">
                                        <div id="toolbar">
                                            <select class="form-control" name="category_id" id="category_id" onchange="showCategory()">
                                                @foreach ($categories as $category)
                                                    @if (old('category_id') == $category->id)
                                                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                                    @else    
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endif
                                                @endforeach
                                                <option value="lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="input-group mg-b-15 col-lg-12">
                                        <input type="text" name="category" id="hideCategory" class="form-control" placeholder="Category" style="display: none" required>
                                    </div>

                                    <div class="form-group review-pro-edt mg-b-0-pt">
                                        <button type="submit" class="btn btn-ctl-bt waves-effect waves-light">Edit Data</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
</div>

<script>
    function showCategory() {
        var category = document.getElementById("category_id").value;
        
        console.log(category);
        if (category == "lainnya") {
            document.getElementById("hideCategory").style.display = "block";
        } else {
            document.getElementById("hideCategory").style.display = "none";
        }
    }
</script>
    
@endsection