@extends('admin.app')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <div class="page-content">
        <div class="container-fluid">

            <div class="card-body">

                <h4 class="card-title">Textual inputs</h4>
                <form method="post" action="{{ route('store.profile') }}" enctype="multipart/form-data" >
                    @csrf
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input name="name" class="form-control" type="text" value="{{ $editData->name }}"
                                id="example-text-input">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input name="username" class="form-control" type="text" value="{{ $editData->username }}"
                                id="example-text-input">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input name="email" class="form-control" type="text" value="{{ $editData->email }}"
                                id="example-text-input">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Profile Image</label>
                        <div class="col-sm-10">
                            <input name="profile_image" class="form-control" type="file" value="{{ $editData->name }}"
                                id="image">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Profile Image</label>
                        <div class="col-sm-10">
                            <img id="showImage" class="rounded avatar-lg" src="{{ !empty($editData->profile_image) ? url('upload/admin_images/' . $editData->profile_image) : url('upload/no_image.jpg') }} " alt="Card image cap">
                        </div>
                    </div>
                    <input type="submit" name="" id="" value="Update Profile" class="btn btn-primary waves-effect waves-light"> 
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            })
        })

    </script>
@endsection()

