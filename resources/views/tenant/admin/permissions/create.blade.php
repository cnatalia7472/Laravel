{{-- Copyright (C) 2018 Panobit, Inc - All rights reserved.
Unauthorized duplication, transmission, or modification by any means is strictly prohibited.
Proprietary and confidential. This file belongs to the Revohub SaaS (Software-as-a-Service)
Panobit, Inc | legal@panobit.com | www.panobit.com --}}
@extends('layouts.dashboard')
@section('page-title', ' - Dashboard')
@section('javascript-after')
    <script src="{{ asset('assets/backend/js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/plugins/ui/moment/moment.min.js') }}"></script>
@endsection
@section('content')
    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><span class="font-weight-semibold">User Administration </span>| New User</h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
                <div class="d-flex justify-content-center">
                    <a href="#" class="btn btn-link btn-float text-default"><i class="icon-bars-alt text-primary"></i><span>Users</span></a>
                    <a href="#" class="btn btn-link btn-float text-default"><i class="icon-bars-alt text-primary"></i><span>Permissions</span></a>
                    <a href="#" class="btn btn-link btn-float text-default"><i class="icon-calculator text-primary"></i> <span>Roles</span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <a href="learning_detailed.html" class="breadcrumb-item">Learning</a>
                    <span class="breadcrumb-item active">Detailed</span>
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>
    </div>
    <!-- /page header -->
    <!-- Content area -->
    <div class="content">
        <div class="row justify-content-center">
            <div class="card col-md-2">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">New Permission</h5>
                    <div class="header-elements">
                        <div class="list-icons">
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{route('admin.permissions.store')}}" method="post">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Permission</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                        </div>
                    </div>


                        @if(!$roles->isEmpty())

                            <h4>Assign Permission to Roles</h4>

                            @foreach ($roles as $role)
                                {{ Form::checkbox('roles[]',  $role->id ) }}
                                {{ Form::label($role->name, ucfirst($role->name)) }}<br>

                            @endforeach

                        @endif

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /content area -->
@endsection