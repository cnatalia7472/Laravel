{{-- Copyright (C) 2018 Panobit, Inc - All rights reserved.
Unauthorized duplication, transmission, or modification by any means is strictly prohibited.
Proprietary and confidential. This file belongs to the Revohub SaaS (Software-as-a-Service)
Panobit, Inc | legal@panobit.com | www.panobit.com --}}
@extends('layouts.dashboard')
@section('javascript-after')
    <script src="{{ asset('assets/backend/js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/plugins/ui/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/demo_pages/user_pages_profile_tabbed.js') }}"></script>
@endsection

@section('content')
        <!-- Page header -->
        <div class="page-header page-header-light">


            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="{{ route('dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                        <a href="{{ route('organizations.index') }}" class="breadcrumb-item">Organizations</a>
                        <span class="breadcrumb-item active">Create New Organization</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">

                </div>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">
            <!-- Inner container -->
            <!-- Profile info -->
            <div class="card col-md-6">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">Organization Details</h5>
                    <div class="header-elements">
                        <div class="list-icons">
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{route('organizations.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-10">
                                    <label>Company Name</label>
                                    <input type="text" name="company_name" class="form-control" required>
                                </div>
                                <div class="col-md-2">
                                    <label>Prefix</label>
                                    <input type="text" name="prefix" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Address Line 1</label>
                                    <input type="text" name="address_line1" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Address Line 2</label>
                                    <input type="text" name="address_line2" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>City</label>
                                    <input type="text" name="city" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label>State/Province/Region</label>
                                    <input type="text" name="state_province_region" class="form-control" required>
                                </div>
                                <div class="col-md-2">
                                    <label>Zip/Postal Code</label>
                                    <input type="text" name="zip_postal_code" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Country</label>
                                    <select class="form-control form-control-select2" name="country" data-fouc>
                                        <option value="germany" selected>Germany</option>
                                        <option value="france">France</option>
                                        <option value="spain">Spain</option>
                                        <option value="netherlands">Netherlands</option>
                                        <option value="other">...</option>
                                        <option value="us">United States</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Company E-Mail</label>
                                    <input type="text" name="email" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>Website</label>
                                    <input type="text" name="website" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Phone #</label>
                                    <input type="text" name="phone_number" class="form-control">
                                    <span class="form-text text-muted">+99-99-9999-9999</span>
                                </div>
                                <div class="col-md-6">
                                    <label>Fax #</label>
                                    <input type="text" name="fax_number" class="form-control">
                                    <span class="form-text text-muted">+99-99-9999-9999</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Company Logo</label>
                                    <input type="file" class="form-input-styled" data-fouc>
                                    <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                                </div>
                            </div>
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /profile info -->
            <!-- /inner container -->

        </div>
        <!-- /content area -->
@endsection