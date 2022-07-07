@extends('admin.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <div class="card-body">

                <h4 class="card-title">Change Password Page</h4>

                @if (count($errors))
                    @foreach ($errors->all() as $error)
                        <p class="alert alert-danger alert-dismissible fade show">{{$error}}</p> 
                    @endforeach
                @endif


                <form method="post" action="{{ route('update.password') }}" >
                    @csrf
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Old Password</label>
                        <div class="col-sm-10">
                            <input name="oldPassword" class="form-control" type="password" value=""
                                id="oldPassword">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">New Password</label>
                        <div class="col-sm-10">
                            <input name="newPassword" class="form-control" type="password" value=""
                                id="newPassword">
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Confirm Password</label>
                        <div class="col-sm-10">
                            <input name="confirmPassword" class="form-control" type="password" value=""
                                id="confirmPassword">
                        </div>
                    </div>


                    
                    <input type="submit" name="" id="" value="Change Password " class="btn btn-primary waves-effect waves-light"> 
                </form>
            </div>
        </div>
    </div>

    
@endsection()

