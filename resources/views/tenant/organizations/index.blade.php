{{-- Copyright (C) 2018 Panobit, Inc - All rights reserved.
Unauthorized duplication, transmission, or modification by any means is strictly prohibited.
Proprietary and confidential. This file belongs to the Revohub SaaS (Software-as-a-Service)
Panobit, Inc | legal@panobit.com | www.panobit.com --}}
@extends('layouts.dashboard')
@section('page-title', ' - Dashboard')
@section('javascript-after')
    <script src="{{ asset('assets/backend/js/plugins/tables/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/pages/organizations-datatables.js') }}"></script>
    @endsection
@section('content')
    <script>

        function ConfirmDelete()
        {
            var x = confirm("Are you sure you want to delete?");
            if (x)
                return true;
            else
                return false;
        }

    </script>
        <!-- Page header -->
        <div class="page-header page-header-light">

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="{{ route('dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                        <span class="breadcrumb-item active">Organizations</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">
                    <div class="breadcrumb justify-content-center">
                        <a href="#" class="breadcrumb-elements-item">
                            <i class="icon-comment-discussion mr-2"></i>
                            License Limit
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">
            <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))
                        <div class="alert alert-{{ $msg }} alert-styled-left alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                            <span class="font-weight-semibold">{{ Session::get('alert-' . $msg) }}</span></a>
                        </div>
                    @endif
                @endforeach
            </div>

            <!-- HTML sourced data -->
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">Organizations</h5>
                    <div class="header-elements">
                        <div class="list-icons">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('organizations.create')}}">
                        <button type="submit" class="btn btn-primary">Create New</button>
                    </form>
                </div>

                <table class="table datatable-html">
                    <thead>
                    <tr>
                        <th>Company Name</th>
                        <th>Prefix</th>
                        <th>City</th>
                        <th>State/Province/Region</th>
                        <th>Country</th>
                        <th>Phone Number</th>
                        <th>E-Mail</th>
                        <th>Website</th>
                        <th>Type</th>
                        <th>Created</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($organizations as $organization)
                    <tr>
                        <td><a href="{{ route('organizations.show', $organization->id) }}"> {{ $organization->company_name }} </a></td>

                        <td> {{ $organization->prefix }} </td>

                        <td> {{ $organization->city }} </td>
                        <td> {{ $organization->state_province_region }} </td>
                        <td> {{ $organization->country }} </td>
                        <td> {{ $organization->phone_number }} </td>
                        <td>
                            <a href="mailto:{{ $organization->email }}"> {{ $organization->email }} </a>
                        </td>
                        <td>
                            <a href="http://{{ $organization->website }}"> {{ $organization->website }} </a>
                        </td>
                        <td><span class="badge badge-info">$320,800</span></td>
                        <td> {{ $organization->created_at }} </td>
                        <td class="text-center">
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="{{action('OrganizationController@edit', $organization['id'])}}" class="dropdown-item"><i class="icon-pencil"></i> Edit </a>
                                        <form action="{{ url('organizations' , $organization->id ) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button class="dropdown-item" onclick="return confirm('Are you sure you want to delete this organization?')"><i class="icon-cross2"></i> Delete </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /HTML sourced data -->


        </div>
        <!-- /content area -->




    @endsection
