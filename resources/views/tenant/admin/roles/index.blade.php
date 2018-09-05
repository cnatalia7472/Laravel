{{-- Copyright (C) 2018 Panobit, Inc - All rights reserved.
Unauthorized duplication, transmission, or modification by any means is strictly prohibited.
Proprietary and confidential. This file belongs to the Revohub SaaS (Software-as-a-Service)
Panobit, Inc | legal@panobit.com | www.panobit.com --}}
@extends('layouts.dashboard')
@section('page-title', ' - Dashboard')
@section('javascript-after')
    <script src="{{ asset('assets/backend/js/plugins/tables/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/demo_pages/datatables_data_sources.js') }}"></script>
@endsection
@section('content')
    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><span class="font-weight-semibold">User Administration </span>| Roles</h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
                <div class="d-flex justify-content-center">
                    <a href="{{ route('admin.users.index') }}" class="btn btn-link btn-float text-default"><i class="icon-users text-primary"></i><span>Users</span></a>
                    <a href="{{ route('admin.permissions.index') }}" class="btn btn-link btn-float text-default"><i class="icon-shield2 text-primary"></i> <span>Permissions</span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <a href="learning_detailed.html" class="breadcrumb-item">System</a>
                    <span class="breadcrumb-item active">Roles</span>
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>
    </div>
    <!-- /page header -->
    <!-- Content area -->
    <div class="content">
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Roles</h5>
                <div class="header-elements">
                    <div class="list-icons">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.roles.create') }}">
                    <button type="submit" class="btn btn-primary">Create New</button>
                </form>
            </div>

            <table class="table datatable-html">
                <thead>
                <tr>
                    <th>Role</th>
                    <th>Permissions</th>
                    <th>Operation</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($roles as $role)
                    <tr>

                        <td>{{ $role->name }}</td>
                        <td>
                            @foreach($role->permissions()->pluck('name') as $permission)
                                <span class="badge badge-primary">{{ $permission }}</span>
                            @endforeach
                        <td>
                            @if($role->name === "superadmin")
                                <button class="btn disabled">Disabled</button> {{-- This is disabled because a person should not be able to modify the super admin --}}
                                @else
                                <a href="{{ URL::to('roles/'.$role->id.'/edit') }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                                {!! Form::open(['method' => 'DELETE', 'route' => ['admin.roles.destroy', $role->id] ]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}
                                @endif



                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- /content area -->
@endsection