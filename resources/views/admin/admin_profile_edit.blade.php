@extends('admin.app')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="card-body">

                <h4 class="card-title">Textual inputs</h4>
                <form action="">
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
                            <input name="name" class="form-control" type="text" value="{{ $editData->email }}"
                                id="example-text-input">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Profile Image</label>
                        <div class="col-sm-10">
                            <input name="profile_images" class="form-control" type="file" value="{{ $editData->name }}"
                                id="example-text-input">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Profile Image</label>
                        <div class="col-sm-10">
                            <img class="rounded avatar-lg" src="{{asset('assets/images/small/img-1.jpg')}} " alt="Card image cap">
                        </div>
                    </div>
                    <input type="submit" name="" id="" value="Update Profile" class="btn btn-primary waves-effect waves-light"> 
                </form>
            </div>
        </div>
    </div>
@endsection()
