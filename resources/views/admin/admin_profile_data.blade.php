@extends('admin.app')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Cards</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                                <li class="breadcrumb-item active">Cards</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6 col-xl-3">

                    <!-- Simple card -->
                    <div class="card">
                        <img class="card-img-top img-fluid" src="{{asset('assets/images/small/img-1.jpg')}} " alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Name : {{$adminData->name}}</h4><hr>
                            <h4 class="card-title">Username : {{$adminData->username}}</h4><hr>
                            <h4 class="card-title">Email : {{$adminData->email}}</h4><hr>
                        </div>
                        <a href="{{route('edit.profile')}}" class="btn btn-primary">Edit Profile</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection()